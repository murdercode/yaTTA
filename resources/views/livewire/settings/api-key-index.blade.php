<div>
    <x-atoms.h2>{{__('Your API keys')}}</x-atoms.h2>
    <table class="w-full text-left bg-gray-900 shadow-inner-custom">
        <thead>
        <tr>
            <th class="p-2">{{__('Name')}}</th>
            <th>{{__('Api Key')}}</th>
            <th>{{__('Created')}}</th>
            {{--            <th>{{__('Usage')}}</th>--}}
            <th>{{__('Actions')}}</th>
        </tr>
        </thead>
        <tbody class="divide-y divide-gray-800">

        @forelse($apiKeys as $apiKey)
            <tr>
                <td class="p-2 inline-flex">
                    @if($apiKey->isActive())
                        @svg('fas-check', 'h-4 w-4 text-green-500 mr-2')
                    @endif
                    {{$apiKey->name}}

                </td>
                <td title="{{__('For your security, keys will never be shown')}}">
                    {{substr($apiKey->key, 0, 4)}}......{{substr($apiKey->key, -4)}}</td>
                <td>{{$apiKey->created_at->diffForHumans()}}</td>
                {{--                <td>{{rand(0, 99)}}</td>--}}
                <td>

                    @if(!$apiKey->isActive())
                        <button
                            wire:click="makeApiKeyDefault({{$apiKey->id}})">{{__('Make default')}}</button>
                    @endif

                    <button
                        onclick="confirm('Are you sure you want to remove this Api key?') || event.stopImmediatePropagation()"
                        wire:click="delete({{$apiKey->id}})">{{__('Revoke')}}</button>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="p-2">{{__('No API keys found. Add one from below.')}}</td>
            </tr>
        @endforelse

        </tbody>
    </table>

</div>
