@extends('layouts.app')

@section('title')
    Sign up on Devstagram
@endsection

@section('content')
  <div class="md:flex md:justify-center md:gap-10 md:items-center">
    <div class="md:w-1/2">
      <img src="{{ asset('img/register.jpg') }}" alt="RegisterImage">
    </div>

    <div class="md:w-1/3 bg-white p-6 rounded-lg shadow-lg">
      <form method="POST" action="{{ route('register') }}" novalidate>
        @csrf
        <div class="mb-5">
          <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
            Name
          </label>
          <input
            type="text"
            id="name"
            name="name"
            placeholder="Your name"
            class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
            value="{{ old('name') }}"
            required
          />
          @error('name')
          <p class="bg-red-500 text-white my-2 rounded-lg text-sm text-center p-2">
            {{ $message }}
          </p>
          @enderror
        </div>

        <div class="mb-5">
          <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
            Username
          </label>
          <input
            type="text"
            id="username"
            name="username"
            placeholder="Create an username"
            class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
            value="{{ old('username') }}"
            required
          />
          @error('username')
          <p class="bg-red-500 text-white my-2 rounded-lg text-sm text-center p-2">
            {{ $message }}
          </p>
          @enderror
        </div>

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
            placeholder="Create a password"
            class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror"
            value="{{ old('password') }}"
            required
          />
          @error('password')
          <p class="bg-red-500 text-white my-2 rounded-lg text-sm text-center p-2">
            {{ $message }}
          </p>
          @enderror
        </div>

        <div class="mb-5">
          <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
            Repeat Password
          </label>
          <input
            type="text"
            id="password_confirmation"
            name="password_confirmation"
            placeholder="Enter your password again"
            class="border p-3 w-full rounded-lg"
            required
          />
        </div>

        <input
          type="submit"
          class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
        />
      </form>
    </div>
  </div>
@endsection
