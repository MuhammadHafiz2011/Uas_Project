<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400;1,500&display=swap" 
    rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- customcss -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-primaryLight">
    <nav class="bg-darkBlue px-2.5 lg:px-0 sticky top-0 z-10" x-data="{ sidebar:false }">
        <div class="container flex justify-between items-center py-2">
            <div class="w-[40px] lg:w-[4%]">
                <a href="index.html">
                    <img src="{{ asset('img/logo.png') }}" alt="logo" class="w-full rounded">
                </a>
            </div>
            <div class="hidden lg:flex lg:items-center lg:space-x-5">
                <div>
                </div>
                <div>
                    <a href="{{ url('/register') }}" class="bg-customYellow p-2 text-customBlue flex items-center rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                        </svg>
                        <span class="ml-2">
                            Register
                        </span>
                    </a>
                </div>
                <div>
                    <a href="{{ url('/login') }}" class="bg-lightBlue p-2 text-customBlue rounded">
                        <i class="fa-solid fa-user-plus"></i> <span class="ml-2">Login</span>
                    </a>
                </div>
            </div>

            <button class="border-2 border-customYellow text-customYellow px-3 py-1 lg:hidden" @click="sidebar = !sidebar">
                <i class="fa-solid fa-bars text-xl"></i>
            </button>
        </div>
        <div class="lg:hidden bg-darkBlue w-full h-fit py-3 px-2" x-show="sidebar" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in duration-300 trasnform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full">
            <div class="w-full">
            </div>
            <div class="w-full mt-3">
                <a href="{{ url('/register') }}" class="bg-customYellow p-2 text-customBlue flex items-center justify-center rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                    </svg>
                    <span class="ml-2">
                        Register
                    </span>
                </a>
            </div>
            <div class="w-full mt-3">
                <a href="{{ url('/login') }}" class="bg-lightBlue p-2 text-customBlue rounded flex items-center justify-center rounded">
                    <i class="fa-solid fa-user-plus"></i> <span class="ml-2">Login</span>
                </a>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- custom javascript -->
    <script src="{{ asset('js/main.js') }}" defer></script>

    <!-- tailwindcss config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primaryLight: '#f4f9fc',
                        darkBlue: '#101c42',
                        customYellow: '#f6a530',
                        lightBlue: '#00bbde'
                    },
                    container: {
                        center: true,
                    }
                },
                fontFamily: {
                    body: ['Poppins', 'Roboto', 'sans-serif']
                }
            }
        }
    </script>

    <!-- alpine-js -->
    <script src="https://unpkg.com/alpinejs" defer></script>

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"
        integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
