<div class="flex-grow p-4 space-y-2 leading-5 overflow-y-scroll">

    {{--Create Chat--}}
    <div class="flex items-center justify-between border-gray-400 border text-gray-300 p-4 rounded hover:bg-black/20 hover:border-rose-500 cursor-pointer">
        <div class="m-auto flex items-center">
            <span class="rounded border border-gray-300 w-6 h-6 mr-2 text-center">+</span>
            {{__('New Chat')}}
        </div>
    </div>

    @foreach($chats as $chat)
        <a
            href="#"
            wire:key="{{$chat->id}}"
            wire:click="setChat({{$chat}})"
           class="block p-2 border-l-4 text-gray-200 hover:text-white
           @if($chat->id === $activeChatId) border-rose-500 @else border-transparent @endif
           ">
            {{$chat->title}}
        </a>
    @endforeach
</div>
