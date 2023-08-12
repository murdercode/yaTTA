<div class="w-full bg-gray-800">

    {{--Loading Bar--}}
    {{--    <div class="h-1 w-full flex">--}}
    {{--        <div wire:loading class="mx-auto loading-bar-animation bg-rose-500 h-full"></div>--}}
    {{--    </div>--}}

    <form x-data="{ open: false , input: ''}" autocomplete="off" wire:submit="save"
          class="relative p-4 flex max-container mx-auto w-full">

        @error('form.input')
        <div class="text-red-500 text-xs italic">{{ $message }}</div>
        @enderror

        {{--Short Commands--}}
        <button type="button" x-on:click="open = !open;"
                class="relative bg-gray-900 px-2.5 rounded-l">
            {{--Icon Button--}}
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="1em" viewBox="0 0 576 512">
                <path
                    d="M9.4 86.6C-3.1 74.1-3.1 53.9 9.4 41.4s32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 9.4 86.6zM256 416H544c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32s14.3-32 32-32z"/>
            </svg>
        </button>

        {{-- Short Commands Dropdown --}}
        <div x-show="open" @click.outside="open = false"
             class="absolute bg-gray-900 text-gray-400 text-sm bottom-0 mb-[48px] left-[32px] rounded-t">
            <ul class="divide-y divide-gray-800">
                <li x-on:click="input = '/image '; open = false; /*focus on input*/"
                    class="hover:bg-black/20 p-3 cursor-pointer">
                    <strong class="text-gray-200">/image</strong> - Generate an image
                </li>
            </ul>
        </div>

        {{--Input--}}
        <div class="relative w-full h-9 bg-gray-850">

            {{--Autocomplete--}}
            <label for="input_autocomplete"></label>
            <input wire:model="autocomplete"
                   name="input_autocomplete" id="input_autocomplete"
                   placeholder=""
                   class="text-right text-gray-500 absolute py-1.5 top-0 left-0 w-full h-auto bg-transparent border-0 sm:text-sm sm:leading-6 ring-0 focus:ring-0 ring-inset"/>

            {{--Real Input--}}
            <label for="input_user"></label>
            <input type="text"
                   wire:model="form.input"
                   x-model="input"
                   autofocus
                   name="input_user" id="input_user"
                   class="absolute
               caret-rose-400 caret-opacity-50
               bg-transparent block w-full border-0 py-1.5 ring-0 ring-inset ring-rose-500 placeholder:text-gray-400 focus:ring-2 focus:ring-rose-500 sm:text-sm sm:leading-6"
                   placeholder="{{__('Write your input here')}} on chat ID: {{$chat->id}}"
            >

        </div>

        <button wire:loading.attr="disabled" wire:loading.class="cursor-not-allowed" type="submit"
                class="bg-gray-850 hover:bg-gray-900 hover:text-white text-gray-500 px-2.5 rounded-r-md">

            {{--Send Icon--}}
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"
                 fill="currentColor">
                <path
                    d="M16.1 260.2c-22.6 12.9-20.5 47.3 3.6 57.3L160 376V479.3c0 18.1 14.6 32.7 32.7 32.7c9.7 0 18.9-4.3 25.1-11.8l62-74.3 123.9 51.6c18.9 7.9 40.8-4.5 43.9-24.7l64-416c1.9-12.1-3.4-24.3-13.5-31.2s-23.3-7.5-34-1.4l-448 256zm52.1 25.5L409.7 90.6 190.1 336l1.2 1L68.2 285.7zM403.3 425.4L236.7 355.9 450.8 116.6 403.3 425.4z"/>
            </svg>

            {{--Loading Spinner--}}
            {{--            <svg wire:loading xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"--}}
            {{--                 class="animate-spin" fill="currentColor">--}}
            {{--                <path--}}
            {{--                    d="M304 48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zm0 416a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM48 304a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm464-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM142.9 437A48 48 0 1 0 75 369.1 48 48 0 1 0 142.9 437zm0-294.2A48 48 0 1 0 75 75a48 48 0 1 0 67.9 67.9zM369.1 437A48 48 0 1 0 437 369.1 48 48 0 1 0 369.1 437z"/>--}}
            {{--            </svg>--}}

        </button>


    </form>
</div>
