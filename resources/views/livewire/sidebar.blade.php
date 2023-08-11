<aside class="sticky top-8 w-72 shrink-0 h-screen text-white flex-col min-h-screen hidden sm:flex">

    <div class="flex space-x-2 p-2">
        <div class="grow">
            <livewire:chat.create-chat-button/>
        </div>
        <button
            type="button" class="shadow-inner-custom p-4 shrink-0 m-auto bg-gray-800 hover:bg-gray-700 rounded">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75"/>
            </svg>
        </button>
    </div>

    <livewire:chat.chat-list/>

    <livewire:chat.quick-settings/>


</aside>
