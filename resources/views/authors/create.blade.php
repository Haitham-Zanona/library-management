@extends('layouts.app')

@section('content')

<div class="container mx-auto mt-3">
    <form action="{{ route('authors.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="font-bold mb-2 text-gray-700 block">Name:</label>
            <input type="text" name="name" id="name" class="border rounded border-gray-300 w-full py-2 px-3" required>
            @error('name')
            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="bio" class="font-bold mb-2 text-gray-700 block">Bio:</label>
            <textarea name="bio" id="bio" class="border rounded border-gray-300 w-full py-2 px-3"></textarea>
        </div>
        <button type="submit" class="rounded bg-blue-500 text-white py-2 px-4 hover:bg-blue-600">Add Author</button>
    </form>
</div>

@endsection