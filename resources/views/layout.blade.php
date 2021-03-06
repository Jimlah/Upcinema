<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Upcinema')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body class="text-gray-300 bg-gray-800 "> 
    <nav class="flex flex-wrap items-center justify-between px-2 py-4 space-x-2 bg-gray-900 md:space-x-16">

        <a href="/" class="flex-none">Upcinema</a>
        <form class="flex text-gray-900 bg-white md:flex-none md:w-4/12">
            <input type="search" name="search" id="search" class="flex-auto h-8 p-2 outline-none ">
            <button type="submit" class="">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </button>
        </form>
        <div id="app"></div>
        <div class="flex items-center flex-none space-x-1">
            @if((Auth::user()))
            <div>Hey {{$username}}</div>
            <a href="/logout" class="p-1 border-2 border-gray-700 rounded-md hover:text-gray-500">Logout</a>
            @else
                <a href="/register" class="p-1 border-2 border-gray-700 rounded-md hover:text-gray-500">Register</a>
                <a href="/login" class="p-2 bg-gray-800 rounded-md hover:bg-gray-700">Login</a>
            @endif
            
            
        </div>
    </nav>
    <section class="mb-12">

@yield('content')


    </section>
    <footer class="fixed inset-x-0 bottom-0 z-50 flex flex-wrap w-full px-2 py-4 bg-gray-900 spacex-2 px-auto">
        <p class="mx-auto text-center">&copy; 2021 Samuel & Abdullahi</p>
    </footer>
</body>
</html>