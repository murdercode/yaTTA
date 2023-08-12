<div class="flex-1 flex flex-col h-screen">

    @if(config('openai.api_key'))
        {{--Chat--}}
        <livewire:chat.chat-messages :chat="$chat"/>

        {{--Input--}}
        <livewire:chat.chat-input :chat="$chat" input=""/>

    @else

        <x-chat.notification>
            {{__('Please set up your OpenAI API key first')}}.
            <a class="text-white underline" href="{{route('settings')}}">{{__('Go to Settings page')}}</a>
        </x-chat.notification>

    @endif


</div>
