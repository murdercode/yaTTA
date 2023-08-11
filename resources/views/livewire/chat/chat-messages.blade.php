<div id="chat-messages" class="flex-col-reverse flex flex-grow h-full overflow-y-scroll gap-y-8 py-8">

    {{-- Shadow --}}
    <div class="fixed top-0 w-full h-32 bg-gradient-to-b from-gray-700 to-transparent pointer-events-none"></div>

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
