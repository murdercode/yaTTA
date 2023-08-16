<div id="chat-messages"
     class="flex-col-reverse flex flex-grow h-full overflow-y-scroll gap-y-8 py-8
     bg-gradient-to-bl from-gray-900 to-transparent
     ">

    @if($isLoading)
        <div class="fixed bottom-0 w-full">
            <x-atoms.loading-message/>
        </div>
    @endif

    @forelse($messages as $message)
        <div wire:key="{{$message->id}}">
            <x-chat.baloon :message="$message"/>
        </div>
    @empty

        <x-chat.notification>
            {{__('This chat is empty. Start sending messages to fill it.')}}
        </x-chat.notification>

    @endforelse

    <script>
        Livewire.on('chat-complete', ($chatId) => {
            const source = new EventSource("/api/openai/ask/" + $chatId);
            source.addEventListener("update", function (event) {

                const lastMessage = document.querySelector('#chat-messages > div:first-child div.message-content');
                if (event.data === "<END_STREAMING_SSE>") {
                    source.close();
                    console.log("SSE closed");
                    window.location.reload();
                    return;
                }
                lastMessage.innerText += event.data;
            });
        })
    </script>

</div>
