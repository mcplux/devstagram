@extends('layouts.app')

@section('title')
  Create a new post
@endsection

@section('content')
  <div class="md:flex items-center">
    <div class="md:w-1/2 px-10">
      <form id="dropzone" class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col  justify-center items-center"></form>
    </div>
    <div class="md:w-1/2 p-10 bg-white rounded-lg shadow-lg mt-10 md:mt-0">
      <form method="POST" action="" novalidate>
        @csrf
        <div class="mb-5">
          <label for="title" class="mb-2 block uppercase text-gray-500 font-bold">
            Title
          </label>
          <input
            type="text"
            id="title"
            name="title"
            placeholder="Post title"
            class="border p-3 w-full rounded-lg @error('title') border-red-500 @enderror"
            value="{{ old('title') }}"
            required
          />
          @error('title')
          <p class="bg-red-500 text-white my-2 rounded-lg text-sm text-center p-2">
            {{ $message }}
          </p>
          @enderror
        </div>

        <div class="mb-5">
          <label for="description" class="mb-2 block uppercase text-gray-500 font-bold">
            Description
          </label>
          <textarea
            id="description"
            name="description"
            placeholder="Post description"
            class="border p-3 w-full rounded-lg @error('description') border-red-500 @enderror"
            required
          >{{ old('description') }}</textarea>
          @error('description')
          <p class="bg-red-500 text-white my-2 rounded-lg text-sm text-center p-2">
            {{ $message }}
          </p>
          @enderror
        </div>

        <input
          type="submit"
          class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
          value="Post"
        />
      </form>
    </div>
  </div>
@endsection
