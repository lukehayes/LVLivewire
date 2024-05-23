@extends('login.layout')

@section('login-form')
<div class='my-3 h-40 rounded max-w-lg'>

    <form action="/login" method="POST" class='bg-white p-10'>

        @csrf

        <div class="mb-4">
            <label for="Username" class='block font-bold mb-2 '>Username</label>
            <input type="text" name='email' placeholder="Username" class='w-full border shadow py-2 px-4'>
        </div>

        <div class="mb-4">
            <label for="Password" class='block font-bold mb-2'>Password</label>
            <input type="password" name='password' placeholder="password" class='border shadow w-full py-2 px-4'>
        </div>

        <div class="mt-4">
            <input type="submit" value='Login' class='w-full block bg-indigo-500 text-white rounded p-2 hover:bg-indigo-700'>
        </div>

    </form>

</div>
@endsection
