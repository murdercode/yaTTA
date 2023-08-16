<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use OpenAI\Laravel\Facades\OpenAI;

class OpenAIController extends Controller
{
    public function __invoke(int $chatId)
    {

        $chat = Chat::find($chatId);

        return response()->stream(function () use ($chat) {

            $latestMessages = $chat->messages()->latest()->limit(4)->get()->sortBy('id');
            $latestMessagesArray = [];
            foreach ($latestMessages as $message) {
                $latestMessagesArray[] = [
                    'role' => $message->in_out ? 'user' : 'assistant', 'content' => $message->compressed_body];
            }

            $stream = OpenAI::chat()->createStreamed([
                'model' => 'gpt-3.5-turbo-0613',
                'messages' => $latestMessagesArray,
            ]);

            $output = '';

            foreach ($stream as $response) {
                $text = $response->choices[0]->delta->content;
                $output .= $text;
                if (connection_aborted()) {
                    break;
                }

                echo "event: update\n";
                echo 'data: '.$text;
                echo "\n\n";
                if (ob_get_level() > 0) {
                    @ob_flush();
                }
                flush();
            }

            // Rewrite the last message with the full output
            $latestMessages->last()->update(['body' => $output]);

            echo "event: update\n";
            echo 'data: <END_STREAMING_SSE>';
            echo "\n\n";

            ob_flush();
            flush();
        }, 200, [
            'Cache-Control' => 'no-cache',
            'X-Accel-Buffering' => 'no',
            'Content-Type' => 'text/event-stream',
        ]);
    }
}
