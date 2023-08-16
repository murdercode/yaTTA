<aside x-data="{ open: window.innerWidth > 768 }"
       class="block z-40 bg-gray-850 top-0 left-0 absolute md:sticky shrink-0 h-screen">

    {{--Floating Sidebar Button Show--}}
    <button
        x-show="!open"
        @click="console.log(open); open = !open"
        type="button" class="absolute rounded-br z-40 p-5 shrink-0 hover:text-white">
        @svg('fas-arrow-right-to-bracket', 'w-4 h-4 transform')
    </button>

    {{--Sidebar Content--}}
    <div x-show="open" class="w-72 h-full flex-col flex">
        <div class="flex space-x-2 p-2">
            <div class="grow">
                <livewire:chat.create-chat-button/>
            </div>

            <button
                @click="console.log(open); open = !open"
                type="button" class="shadow-inner-custom p-5 shrink-0 m-auto bg-gray-800 hover:bg-gray-700 rounded">
                @svg('fas-arrow-right-to-bracket', 'w-4 h-4 rotate-180')
            </button>

        </div>

        <livewire:chat.chat-list/>
        <livewire:chat.quick-settings/>

    </div>


</aside>
