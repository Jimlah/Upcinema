@extends('layout')

@section('content')
    <div class="lg:w-3/12 mx-auto mt-20">
        <h1 class="text-lg text-gray-300 uppercase mb-5 flex justify-center">
            Reset password
        </h1>
        <form action="" method="post">
            <div class="flex justify-center">
                <input type="text" 
                    name="email" 
                    placeholder="Enter your registerd email" 
                    class="w-96 md:w-full mb-4 p-2 outline-none text-white border-b-2 bg-gray-800 focus:bg-gray-600 duration-200 easy-in-out">
            </div>
            <div class="flex justify-center">
                <button type="submit" class="w-96 md:w-full bg-white p-2 text-gray-500 mt-2 rounded">Reset</button>
            </div>
        </form>
        <div class="flex justify-center mt-10">
            <a href="/register">Don't have an account? Sign Up</a>
        </div>
        
    </div>
@endsection('content')