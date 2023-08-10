<aside x-data="{ sidebarOpen: false }"
       
       class="sticky top-8 w-72 shrink-0 h-screen text-white flex-col min-h-screen hidden sm:flex">

    <livewire:chat.create-chat-button/>

    <livewire:chat.chat-list/>

    <button @click="sidebarOpen = !sidebarOpen">
        Toggle Sidebar
    </button>


    <livewire:chat.quick-settings/>


</aside>
