<div id="chat-messages" class="text-gray-700">
    @foreach($messages as $message)
        <div wire:key="{{$message->id}}" class="p-8 even:bg-gray-100">
            <div class="mx-auto max-container flex items-start space-x-4">
                <div class="flex-shrink-0">
                    <img loading="lazy" class="inline-block h-10 w-10 rounded-full"
                         src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                         alt="">
                </div>
                <div>
                    {{$message->body}}
                </div>
            </div>
        </div>
    @endforeach
</div>
