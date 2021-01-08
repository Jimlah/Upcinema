@extends('layout')

@section('content')
    <div class="lg:w-3/12 mx-auto mt-20">
        <h1 class="text-lg text-gray-300 uppercase mb-5 flex justify-center">
            Create an account
        </h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif
        <form action="/register" method="post">
            @csrf
            <div class="flex justify-center">
                <input type="text" 
                    name="username" 
                    placeholder="Username" 
                    class="w-96 md:w-full mb-4 p-2 outline-none text-white border-b-2 bg-gray-800 focus:bg-gray-600 duration-200 easy-in-out rounded">
            </div>
            <div class="flex justify-center">
                <input 
                    
                    type="text" 
                    name="email" 
                    placeholder="Email" 
                    class="w-96 md:w-full mb-4 p-2 outline-none text-white border-b-2 bg-gray-800 focus:bg-gray-600 duration-200 easy-in-out rounded">
            </div>
            <div class="flex justify-center">
                <input 
                    type="password" 
                    name="password" 
                    placeholder="Password" 
                    class="w-96 md:w-full mb-4 p-2 outline-none text-white border-b-2 bg-gray-800 focus:bg-gray-600 duration-200 easy-in-out rounded"> 
            </div>
            <div class="flex justify-center">
                <input 
                    type="password" 
                    name="password2" 
                    placeholder="Confirm password" 
                    class="w-96 md:w-full mb-4 p-2 outline-none text-white border-b-2 bg-gray-800 focus:bg-gray-600 duration-200 easy-in-out rounded"> 
            </div>
            <div class="flex justify-center">
                <button type="submit" class="w-96 md:w-full bg-white p-2 text-gray-500 mt-2 rounded">Create Account</button>
            </div>
           
        </form>
        <div class="flex justify-center mt-10">
            <a href="/login">Already have an account?</a>
        </div>
        
    </div>
@endsection