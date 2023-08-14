<form wire:submit="save">
    <div class="mt-12">
        <x-atoms.h2>{{__('Add a new API key')}}</x-atoms.h2>
        <div class="mt-4 grid grid-cols-3 gap-2">
            {{--Name--}}
            <div>
                <label for="name"
                       class="block text-sm font-medium leading-6 text-white">{{__('Name')}}</label>
                <div
                    class="flex rounded-md bg-white/5 ring-1 ring-inset ring-white/10 focus-within:ring-2 focus-within:ring-inset focus-within:ring-rose-500">
                    <input type="text" name="name" id="name" autocomplete="name" wire:model="form.name"
                           class="flex-1 border-0 bg-transparent py-1.5 pl-1 text-white focus:ring-0 sm:text-sm sm:leading-6"
                           placeholder="My great app">
                </div>
            </div>

            {{--Api Key--}}
            <div>
                <label for="key"
                       class="block text-sm font-medium leading-6 text-white">{{__('Api Key')}}</label>
                <div
                    class="flex rounded-md bg-white/5 ring-1 ring-inset ring-white/10 focus-within:ring-2 focus-within:ring-inset focus-within:ring-rose-500">
                    <input type="text" name="key" id="key" autocomplete="off" wire:model="form.key"
                           class="flex-1 border-0 bg-transparent py-1.5 pl-1 text-white focus:ring-0 sm:text-sm sm:leading-6"
                           placeholder="sk-***">
                </div>
            </div>

            {{--Type--}}
            <div>
                <label for="type"
                       class="block text-sm font-medium leading-6 text-white">{{__('Type')}}</label>
                <div
                    class="flex rounded-md bg-white/5 ring-1 ring-inset ring-white/10 focus-within:ring-2 focus-within:ring-inset focus-within:ring-rose-500">
                    <select name="type" id="type" wire:model="form.type"
                            class="flex-1 border-0 bg-transparent py-1.5 pl-1 text-white focus:ring-0 sm:text-sm sm:leading-6">
                        @foreach($apiKeyTypes as $type)
                            <option value="{{$type}}">{{$type}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="mt-2 col-span-3">
                <button type="submit">
                    <x-atoms.button>+ {{__('Add Api Key')}}</x-atoms.button>
                </button>
            </div>

        </div>

        @error('name')
        <div class="mt-2 text-sm text-red-600">
            {{$message}}
        </div>
        @enderror

    </div>
</form>
