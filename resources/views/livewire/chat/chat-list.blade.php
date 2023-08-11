<div class="flex-grow p-4 space-y-2 leading-5 overflow-y-scroll">

    @foreach($chats as $chat)
        <a
            href="{{route('chat.show', $chat->id)}}"
            wire:navigate
            class="block p-2 border-l-4 text-gray-300 hover:text-white transition-all
           {{request()->routeIs('chat.show') && request()->route()->id == $chat->id ? 'text-white border-rose-500' : 'border-transparent'}}
           ">
            @if($chat->title)
                {{$chat->title}}
            @else
                <em>{{__('New chat: ') . $chat->id}}</em>
            @endif
        </a>
    @endforeach
</div>
