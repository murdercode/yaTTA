<div class="flex-1 flex flex-col h-screen">

    {{--Chat--}}
    <livewire:chat.chat-messages :chat="$chat"/>

    {{--Input--}}
    <livewire:chat.chat-input :chat="$chat" input=""/>

    {{--Confirm Delete--}}
    {{--    <livewire:chat.confirm-delete />--}}

</div>
