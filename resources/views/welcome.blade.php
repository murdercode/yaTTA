<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    @vite('resources/css/app.css')

</head>

<body class="antialiased">
<div class="flex min-h-screen flex-col">

    <div class="mx-auto flex w-full items-start">

        <aside class="sticky top-8 w-72 shrink-0 bg-gray-800 h-screen text-white flex-col min-h-screen hidden sm:flex">

            {{--Chat List--}}
                <livewire:chat.chat-list />

                {{--Stats--}}
                <div class="space-y-2 p-4">
                    {{--Model in using--}}
                    <div class="flex justify-between">
                        <div class="text-sm">Using <strong>GPT-4</strong></div>

                        <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </a>

                    </div>

                    {{--Bar--}}
                    <div class="h-[8px] rounded-lg bg-gray-200">
                        <div class="h-full rounded-lg bg-gradient-to-r from-rose-400 to-pink-500 w-[10%]"></div>
                    </div>
                    {{--Numbers--}}
                    <div class="flex justify-between text-xs ">
                        <div>0,00006€</div>
                        <div class="text-gray-400">100 tokens used</div>
                    </div>
                </div>


        </aside>

        <main class="w-full">

            <livewire:chat-ui lazy />

        </main>

    </div>
</div>

</body>
</html>
