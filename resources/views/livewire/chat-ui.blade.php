<div class="flex-1 flex flex-col h-screen">

    {{--Chat--}}
    <div class="flex-grow overflow-y-scroll">
        {{--TODO: key is not the solution--}}
        <livewire:chat.chat-messages :messages="$chat->messages" :key="rand(11111,99999)" />
    </div>

    {{--Input--}}
    <livewire:chat.chat-input :chat="$chat" input="" />

    {{--Confirm Delete--}}
    <livewire:chat.confirm-delete />

</div>
