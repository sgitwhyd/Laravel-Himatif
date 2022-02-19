@extends('layouts.main')

@section('content')
<nav class='container-md mx-auto bg-white shadow-md p-5 relative'>
    <div class='max-w-6xl mx-auto md:px-4'>
        <div class='flex justify-between justify-center items-center'>
            <a href='/'>
                <div class='brand text-2xl font-bold cursor-pointer'>
                    HIMA<span class='text-red-600'>TIF</span>
                </div>
            </a>
            <div class='navbar-links hidden md:flex items-center justify-between w-6/12 text-lg font-normal xl:w-4/12'>
                <div class='nav-link'>
                    <a href='/'>Home</a>
                </div>
                <div class='nav-link'>
                    <a href='/blog'>Blog</a>
                </div>
                <div class='nav-link'>
                    <a href='/about'>About</a>
                </div>
                <a href='/login'
                    class='bg-red-600 py-3 px-9 cursor-pointer text-white font-bold hover:bg-red-500 btn-rounded-oprec'>
                    Oprec
                </a>

            </div>
        </div>
    </div>
</nav>
@endsection