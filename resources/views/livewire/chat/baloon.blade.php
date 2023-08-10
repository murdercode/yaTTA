<div class="mx-auto max-container flex items-start gap-x-4
{{$message->from_ai ? 'flex-row-reverse' : 'flex-row'}}
">
    {{--Avatar--}}
    <div class="flex-shrink-0">
        <img loading="lazy" class="inline-block h-10 w-10 rounded-full shadow-lg
        {{$message->from_ai ? 'shadow-rose-600/30' : ''}}
        "
             src="{{$message->from_ai ? asset('assets/ai-icon.svg') : asset('assets/user-icon.svg')}}"
             alt="">
    </div>

    {{--Baloon--}}
    <div class="flex rounded-md relative shadow-lg min-w-[100px]
    {{$message->from_ai ? 'bg-gray-500/10 rounded-tr-none border-rose-500' : 'bg-black/20 rounded-tl-none flex-row-reverse'}}
    ">

        {{--Border Indicator--}}
        <div class="flex-shrink-0 w-[2px] h-auto rounded shadow my-4
        {{$message->from_ai ? 'bg-rose-500 shadow-pink-400' : 'bg-gray-700 shadow-gray-700'}}
        "></div>

        <div
            style="box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.5), inset 0 1px 0 rgba(255, 255, 255, 0.1)"
            class="shadow-lg p-4 rounded w-full
            {{$message->from_ai ? 'rounded-tr-none' : 'rounded-tl-none'}}
            ">
            {{$message->body}}

        </div>


    </div>


</div>
