@extends('layouts.app')

@section('title')
  Your account
@endsection

@section('content')
  <div class="flex justify-center">
    <div class="w-full md:w-2/3 lg:w-1/2 md:flex">
      <div class="md:w-2/3 lg:w-1/2 px-5">
        <img src="{{ asset('img/user.svg') }}" alt="User image">
      </div>

      <div class="md:w-2/3 lg:w-1/2 px-5">
        <p class="text-gray-700 text-2xl">{{ auth()->user()->username }}</p>
      </div>
    </div>
  </div>
@endsection
