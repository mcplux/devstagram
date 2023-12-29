@extends('layouts.app')

@section('title')
    Login on Devstagram
@endsection

@section('content')
  <div class="md:flex md:justify-center md:gap-10 md:items-center">
    <div class="md:w-1/2">
      <img src="{{ asset('img/login.jpg') }}" alt="Login image">
    </div>

    <div class="md:w-1/3 bg-white p-6 rounded-lg shadow-lg">
      <form method="POST" action="{{ route('login') }}" novalidate>
        @csrf

        @if (session('message'))
        <p class="bg-red-500 text-white my-2 rounded-lg text-sm text-center p-2">
          {{ session('message') }}
        </p>
        @endif

        <div class="mb-5">
          <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
            Email
          </label>
          <input
            type="email"
            id="email"
            name="email"
            placeholder="Your email"
            class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
            value="{{ old('email') }}"
            required
          />
          @error('email')
          <p class="bg-red-500 text-white my-2 rounded-lg text-sm text-center p-2">
            {{ $message }}
          </p>
          @enderror
        </div>

        <div class="mb-5">
          <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
            Password
          </label>
          <input
            type="password"
            id="password"
            name="password"
            placeholder="Your password"
            class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror"
            required
          />
          @error('password')
          <p class="bg-red-500 text-white my-2 rounded-lg text-sm text-center p-2">
            {{ $message }}
          </p>
          @enderror
        </div>

        <input
          type="submit"
          class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
          value="Login"
        />
      </form>
    </div>
  </div>
@endsection
