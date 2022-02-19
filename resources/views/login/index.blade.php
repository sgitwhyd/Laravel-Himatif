<!-- component -->
<!-- Code block starts -->
@extends('layouts.main')
@section('content')
<dh-component>
  <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
  <div
    class="h-screen flex items-center transition duration-150 ease-in-out z-10 absolute top-0 right-0 bottom-0 left-0">
    <div role="alert" class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
      <div class="relative py-8 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">
        <div class="w-full flex justify-center text-gray-600 mb-3">
          <!-- <i data-feather="slack"></i> -->
          <img src="/img/HIMATIF1.png" alt="logo-himatif" width="80" height="80">
        </div>

        @if(session()->has('success'))
        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
          role="alert">
          {{ session('success') }}
        </div>
        @endif

        @if(session()->has('error'))
        <div class="flex bg-red-100 rounded-lg p-4 mb-4 text-sm text-red-700" role="alert">
          <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
              clip-rule="evenodd"></path>
          </svg>
          <div>
            {{ session('error') }}
          </div>
        </div>
        @endif

        <form method="post" action="{{ url('/auth/login') }}">
          @csrf
          <label for="email" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Email</label>
          <div class="relative mb-5 mt-2">
            <!-- <div class="absolute right-0 text-gray-600 flex items-center pr-3 h-full cursor-pointer">
              <i data-feather="mail"></i>
            </div> -->
            <input id="email" name="email"
              class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
              placeholder="Email" value="{{ old('email') }}" required autofocus />
            @error('email')
            <div class=" mt-2 text-sm text-red-600 dark:text-red-500">
              {{ $message }}
            </div>
            @enderror
          </div>
          <label for="password" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Password</label>
          <div class="relative mb-2 mt-2">
            <!-- <div class="absolute right-0 text-gray-600 flex items-center pr-3 h-full cursor-pointer">
              <i data-feather="lock"></i>
            </div> -->
            <input id="password" name="password" type='password'
              class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
              placeholder="Password" />
            @error('password')
            <div class="mt-2 text-sm text-red-600 dark:text-red-500">
              {{ $message }}
            </div>
            @enderror
          </div>
          <p class="mb-3 text-sm text-gray-500 dark:text-gray-400">Dont have account ? <a href="{{ route('register') }}"
              class="font-medium text-blue-600 hover:underline dark:text-blue-500">Register Now</a>.</p>
          <div class="flex items-center justify-start w-full">
            <button
              class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</dh-component>
@endsection
<!-- Code block ends -->