<x-layouts.app>

    <x-templates.page :title="__('Settings')" :description="__('Here you can define your settings')">

        <div class="mt-12">
            <div class="space-y-12">

                {{--Your API keys--}}
                <livewire:settings.api-key-index/>


                {{--Form to add a new API key--}}
                <livewire:settings.add-api-key/>


            </div>
        </div>

    </x-templates.page>

</x-layouts.app>
