<div class="flex-1 flex flex-col h-screen">

    {{--Chat--}}
    <div class="flex-grow overflow-y-scroll">
        <livewire:chat.chat-messages :messages="$chat->messages" />
    </div>

    {{--Input--}}
    <livewire:chat.chat-input :chat="$chat" input="" />
</div>
