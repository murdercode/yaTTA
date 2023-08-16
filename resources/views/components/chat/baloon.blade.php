<div class="message-container mx-auto max-container flex items-start gap-x-4
{{$message->from_ai ? 'flex-row-reverse' : 'flex-row'}}
">
    {{--Avatar--}}
    <div class="flex-shrink-0 hidden md:block">
        <img loading="lazy" class="inline-block h-10 w-10 rounded-full shadow-lg
        {{$message->from_ai ? 'shadow-rose-600/30' : ''}}"
             src="{{$message->from_ai ? asset('assets/ai-icon.svg') : asset('assets/user-icon.svg')}}"
             alt="">
    </div>

    <div>

        {{--Name--}}
        <div class="text-xs mb-1 w-full flex gap-x-2
        {{$message->from_ai ? 'flex-row-reverse' : ''}}"
        >
            <span class="font-semibold text-gray-300">{{$message->from_ai ? 'YaTTA!' : 'You'}}</span>
            <span
                class="text-gray-500">{{isset($message->created_at) ? $message->created_at->diffForHumans() : ''}}</span>
        </div>


        {{--Baloon--}}
        <div class="message-baloon flex rounded-md relative shadow-lg
        {{$message->from_ai ? 'bg-gray-500/10 rounded-tr-none border-rose-500' : 'bg-black/20 rounded-tl-none flex-row-reverse'}}
        ">

            <x-atoms.light-indicator :is-primary="$message->from_ai"/>

            <div
                class="message-content grow shadow-inner-custom shadow-lg p-4 rounded space-y-4
            {{$message->from_ai ? 'rounded-tr-none' : 'rounded-tl-none'}}
            ">
                @if($message->from_ai)
                    <x-markdown>{!! $message->body !!}</x-markdown>
                @else
                    {{$message->body}}
                @endif
            </div>


        </div>

    </div>


</div>
