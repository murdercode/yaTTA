<div class="w-full bg-gray-800">

    {{--Loading Bar--}}
    <div class="h-1 w-full flex">
        <div wire:loading class="mx-auto loading-bar-animation bg-rose-500 h-full"></div>
    </div>

    <form wire:submit="save" class="p-4 flex max-container mx-auto w-full">

        @error('form.input')
        <div class="text-red-500 text-xs italic">{{ $message }}</div>
        @enderror

        <label for="input_user" class="hidden">Add your input here</label>
        <input type="text" wire:model="form.input"
               autofocus x-init="$refs.input.focus()"
               name="input_user" id="input_user"
               class="
               bg-gray-850 caret-rose-400 caret-opacity-50
              
               block w-full rounded-l-md border-0 py-1.5 ring-0 ring-inset ring-rose-500 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-rose-400 sm:text-sm sm:leading-6"
               placeholder="{{__('Write your input here')}} on chat ID: {{$chat->id}}">

        <button wire:loading.attr="disabled" wire:loading.class="cursor-not-allowed" type="submit"
                class="bg-rose-500 hover:bg-rose-600 text-white px-2.5 rounded-r-md">

            {{--Send Icon--}}
            <svg wire:loading.remove xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"
                 fill="currentColor">
                <path
                    d="M16.1 260.2c-22.6 12.9-20.5 47.3 3.6 57.3L160 376V479.3c0 18.1 14.6 32.7 32.7 32.7c9.7 0 18.9-4.3 25.1-11.8l62-74.3 123.9 51.6c18.9 7.9 40.8-4.5 43.9-24.7l64-416c1.9-12.1-3.4-24.3-13.5-31.2s-23.3-7.5-34-1.4l-448 256zm52.1 25.5L409.7 90.6 190.1 336l1.2 1L68.2 285.7zM403.3 425.4L236.7 355.9 450.8 116.6 403.3 425.4z"/>
            </svg>

            {{--Loading Spinner--}}
            <svg wire:loading xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"
                 class="animate-spin" fill="currentColor">
                <path
                    d="M304 48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zm0 416a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM48 304a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm464-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM142.9 437A48 48 0 1 0 75 369.1 48 48 0 1 0 142.9 437zm0-294.2A48 48 0 1 0 75 75a48 48 0 1 0 67.9 67.9zM369.1 437A48 48 0 1 0 437 369.1 48 48 0 1 0 369.1 437z"/>
            </svg>

        </button>


    </form>
</div>
