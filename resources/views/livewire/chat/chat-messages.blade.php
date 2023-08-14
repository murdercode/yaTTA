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
    
</div>
