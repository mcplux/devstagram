@extends('layouts.app')

@section('title')
  Profile - {{ $user->username }}
@endsection

@section('content')
  <div class="flex justify-center">
    <div class="w-full md:w-2/3 lg:w-1/2 flex flex-col md:flex-row items-center">
      <div class="w-2/3 lg:w-1/2 px-5">
        <img src="{{ asset('img/user.svg') }}" alt="User image">
      </div>

      <div class="md:w-2/3 lg:w-1/2 px-5 flex flex-col items-center md:justify-center py-10 md:py-0">
        <p class="text-gray-700 text-2xl mb-5">{{ $user->username }}</p>
        <p class="text-gray-800 text-sm mb-3 font-bold">
          Followers: <span class="font-normal">0</span>
        </p>
        <p class="text-gray-800 text-sm mb-3 font-bold">
          Following: <span class="font-normal">0</span>
        </p>
        <p class="text-gray-800 text-sm mb-3 font-bold">
          Posts: <span class="font-normal">0</span>
        </p>
      </div>
    </div>
  </div>
@endsection
