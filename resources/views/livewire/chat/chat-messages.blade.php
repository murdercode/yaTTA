<div id="chat-messages"
     class="flex-col-reverse flex flex-grow h-full overflow-y-scroll gap-y-8 py-8
     bg-gradient-to-bl from-gray-900 to-transparent
     ">

    @forelse($messages as $message)
        <div wire:key="{{$message->id}}">
            <x-chat.baloon :message="$message"/>
        </div>
    @empty

        <x-chat.notification>
            {{__('This chat is empty. Start sending messages to fill it.')}}
        </x-chat.notification>

    @endforelse

    {{--Shadow Top View--}}
    <div class="fixed z-30 top-0 w-full h-32 bg-gradient-to-b from-gray-900 to-transparent pointer-events-none"></div>


    <script>
        Livewire.on('chat-complete', ($chatId) => {
            const source = new EventSource("/api/openai/ask/" + $chatId);
            source.addEventListener("update", function (event) {

                const lastMessage = document.querySelector('#chat-messages > div:first-child .message-content');
                if (event.data === "<END_STREAMING_SSE>") {
                    source.close();
                    console.log("SSE closed");
                    // window.location.reload();
                    return;
                }
                lastMessage.innerText += event.data;
            });
        })
    </script>

</div>
