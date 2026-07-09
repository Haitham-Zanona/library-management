@extends('layouts.app')

@section('content')

<div class="container mx-auto mt-3">
    <form action="{{ route('authors.update', $author) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="font-bold mb-2 text-gray-700 block">Name:</label>
            <input type="text" name="name" id="name" value="{{ $author->name }}"
                class="border rounded border-gray-300 w-full py-2 px-3" required>
            @error('name')
            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="bio" class="font-bold mb-2 text-gray-700 block">Bio:</label>
            <textarea name="bio" id="bio"
                class="border rounded border-gray-300 w-full py-2 px-3">{{ $author->bio }}</textarea>
        </div>
        <button type="submit" class="rounded bg-yellow-500 text-white py-2 px-4 hover:bg-yellow-600">Update
            Author</button>
    </form>
</div>

@endsection