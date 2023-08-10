<div id="chat-messages" class="flex-col-reverse flex flex-grow h-full overflow-y-scroll gap-y-8 py-8">

    @forelse($messages as $message)
        <div wire:key="{{$message->id}}">
            <livewire:chat.baloon :message="$message"/>
        </div>
    @empty

        {{__('No messages yet')}}

    @endforelse


</div>
