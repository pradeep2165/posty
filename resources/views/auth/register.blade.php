@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action="{{route('register')}}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="Your name"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>
                <div class="mb-4">
                    <label for="username" class="sr-only">User Name</label>
                    <input type="text" name="username" id="username" placeholder="Your User Name"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="Your Email"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Choose Password"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>
                <div class="mb-4">
                    <label for="confirm password" class="sr-only">Password again</label>
                    <input type="password" name="password" id="password_confirmation" placeholder="Repeat Your Password"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
            </form>
        </div>
    </div>
@endsection