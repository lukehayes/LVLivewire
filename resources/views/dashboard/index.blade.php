@extends('dashboard.layout')


@section('dashboard-main')
    <h4>Dashboard</h4>

    <nav class='container mx-auto py-4'>
        <a href="{{ url('logout') }}" class='bg-indigo-500 text-white p-2 rounded'>Logout</a>
    </nav>

    <p>Some excellent content should go here.</p>

@endsection()
