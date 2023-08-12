<div class="max-container mx-auto {{$class ?? ''}} p-4">

    @if(isset($title))
        <h1 class="text-xl font-semibold leading-7 text-white">{{$title}}</h1>
    @endif
    @if(isset($description))
        <p class="mt-1 text-sm leading-6 text-gray-400">{{$description}}</p>
    @endif

    {{$slot}}

</div>
