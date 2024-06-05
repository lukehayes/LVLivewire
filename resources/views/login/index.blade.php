@extends('login.layout')

@section('login-form')

<div class='max-w-xl mx-auto py-8'>

    <a href="#" class="flex justify-center items-center dark:text-white my-10">
        <img class="w-16 h-16 mr-2 text-red" src="https://img.icons8.com/?size=100&id=33605&format=png&color=000000 alt="logo">
    </a>

    <form action="/login" method="POST" class='bg-white p-10'>

        <div class="p-6 space-y-2 md:space-y-6 sm:p-8">
            <h3 class="text-xl font-bold leading-tight tracking-tight text-gray-900">
                Sign in to your account
            </h3>
        </div>

        @csrf

        <div class="mb-4">

            @if($errors->any())

                @foreach($errors->all() as $error)
                    <p class='block bg-red-200 p-4 m-2'> {{$error}} </p>
                @endforeach()

            @endif()

            <label for="Username" class='block font-bold mb-2 '>Username</label>
            <input type="text" name='email' placeholder="Username" class='w-full border shadow py-2 px-4'>
        </div>

        <div class="mb-4">
            <label for="Password" class='block font-bold mb-2'>Password</label>
            <input type="password" name='password' placeholder="Password" class='border shadow w-full py-2 px-4'>
        </div>

        <div class="mt-4">
            <input type="submit" value='Login' class='w-full block bg-indigo-500 text-white rounded p-2 hover:bg-indigo-700'>
        </div>

    </form>

</div>
@endsection
