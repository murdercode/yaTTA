<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use OpenAI\Laravel\Facades\OpenAI;
use OpenAI\Responses\Completions\CreateResponse;

class Chat extends Model
{
    use HasFactory;

    /**
     * Save the input message of the user
     */
    public function addInput(string $message, bool $in = true): Message
    {
        return $this->messages()->create([
            'body' => $message,
            'in_out' => $in,
            'created_at' => now(),
            'updated_at' => now(),
            'chat_id' => $this->id,
        ]);
    }

    /**
     * Save the output message of the bot
     */
    public function addOutput(string $request): Message
    {
        $message = $this->getAiResponse($request);

        return $this->addInput($message, false);
    }

    /**
     * Get the response from the AI
     */
    public function getAiResponse($input)
    {
        if (! $input || $input == '') {
            return 'Please enter a message';
        }

        if (str_starts_with($input, '/image')) {
            return $this->getOpenAiImage($input);
        }

        return $this->getOpenAiChat($input);
    }

    /**
     * Get response chat from OpenAI
     */
    public function getOpenAiChat(string $input): string
    {
        sleep(1);
        OpenAI::fake([
            CreateResponse::fake([
                'choices' => [
                    [
                        'text' => 'Only with PHP!',
                    ],
                ],
            ]),
        ]);
        $completion = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => $input,
        ]);

        return $completion->choices[0]->text;
    }

    /**
     * Get response chat from OpenAI
     */
    public function getOpenAiImage(string $input): string
    {
        $result = OpenAI::images()->create([
            'prompt' => $input,
            'n' => 1,
            'size' => '256x256',
            'response_format' => 'b64_json',
        ]);

        return '<img src="data:image/png;base64, '.$result->data[0]->b64_json.'" loading="lazy" />';

        //        dd($result);

    }

    /**
     * Chat has many messages.
     */
    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }
}
