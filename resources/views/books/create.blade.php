@extends('layouts.app')

@section('content')

<div class="container mx-auto mt-3">
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="title" class="font-bold mb-2 text-gray-700 block">Title:</label>
            <input type="text" name="title" id="title" class="border rounded border-gray-300 w-full py-2 px-3" required>
            @error('title')
            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="author" class="font-bold mb-2 text-gray-700 block">Author:</label>
            <select name="author_id">
                @foreach ($authors as $author)
                <option value="{{ $author->id }}">{{ $author->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="category_id" class="font-bold mb-2 text-gray-700 block">Categories:</label>
            @foreach ($categories as $category)
            <input type="checkbox" name="categories[]" value="{{ $category->id }}">
            {{ $category->name }}
            @endforeach
        </div>
        <div class="mb-4">
            <label for="publish_date" class="font-bold mb-2 text-gray-700 block">Publish Date:</label>
            <input type="date" name="publish_date" id="publish_date"
                class="border rounded border-gray-300 w-full py-2 px-3">
        </div>
        <button type="submit" class="rounded bg-blue-500 text-white py-2 px-4 hover:bg-blue-600">Add Book</button>
    </form>
</div>
@endsection