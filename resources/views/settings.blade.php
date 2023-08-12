<x-layouts.app>

    <x-templates.page :title="__('Settings')" :description="__('Here you can define your settings')">

        <form class="mt-12">
            <div class="space-y-12">

                <div>
                    <x-atoms.h2>{{__('Your API keys')}}</x-atoms.h2>
                    <table class="w-full text-left bg-gray-900 shadow-inner-custom">
                        <thead>
                        <tr>
                            <th class="p-2">{{__('Name')}}</th>
                            <th>{{__('Key')}}</th>
                            <th>{{__('Created')}}</th>
                            <th>{{__('Usage')}}</th>
                            <th>{{__('Actions')}}</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-800">
                        @foreach($apiKeys as $apiKey)
                            <tr>
                                <td class="p-2">{{$apiKey->name}}</td>
                                <td title="{{__('For your security, keys will never be shown')}}">
                                    {{substr($apiKey->key, 0, 4)}}......{{substr($apiKey->key, -4)}}</td>
                                <td>{{$apiKey->created_at->diffForHumans()}}</td>
                                <td>{{rand(0, 99)}}</td>
                                <td>
                                    <button class="btn btn-primary">{{__('Revoke')}}</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </form>

    </x-templates.page>

</x-layouts.app>
