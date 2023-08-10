<?php

namespace App\Livewire\Chat;

use App\Livewire\Forms\ChatForm;
use App\Models\Chat;
use Livewire\Component;

class ChatInput extends Component
{
    public ChatForm $form;

    public Chat $chat;

    /**
     * Run when user submit the input field.
     */
    public function save()
    {

        // Save the chat
        $this->chat->messages()->create([
            'body' => $this->form->input,
            'in_out' => 1,
        ]);

        // Save the answer
        sleep(1);
        $this->chat->messages()->create([
            'body' => 'PHP is a popular general-purpose scripting language that is especially suited to web development.',
            'in_out' => 0,
        ]);
        //        $result = OpenAI::completions()->create([
        //            'model' => 'text-davinci-003',
        //            'prompt' => 'PHP is',
        //        ]);
        //        $this->chat->messages()->create([
        //            'body' => $result['choices'][0]['text'],
        //            'in_out' => 0,
        //        ]);

        // Reset the form
        $this->form->reset();

        // Reload the page
        return redirect()->route('chat.show', $this->chat);

    }

    //    #[Js]
    //    public function scrollToBottom(): string
    //    {
    //        return <<<'JS'
    //            const chatMessages = document.getElementById('chat-messages')
    //            chatMessages.scrollIntoView({block: 'end', behavior: 'smooth'})
    //        JS;
    //    }

    public function render()
    {
        return view('livewire.chat.chat-input');
    }
}
