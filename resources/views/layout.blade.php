<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Upcinema')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body class="bg-gray-800 text-gray-300">
<nav class="flex space-x-2 py-3 px-1 bg-gray-900 container justify-self-center sticky top-0">
        <a href="/" class="flex-none">Upcinema</a>
        <form class="flex flex-auto bg-white">
            <input type="search" class="flex-auto">
            <button type="submit" class="">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </button>
        </form>
        <div class="flex-none flex space-x-1">
            <a href="/register">Register</a>
            <a href="/login">Login</a>
        </div>
    </nav>

    </header>



    @yield('content')

    <footer class="flex space-x-2 fixed bottom-0 py-3 px-1 bg-gray-900 container justify-self-center">
        <p class="text-center">&copy; 2015 RapidTables.com<p>
    </footer>

    <script>
        $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    </script>
</body>
</html>