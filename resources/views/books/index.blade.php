@extends('layouts.app')

@section('content')
<h1 class="font-bold my-3 text-center text-4xl text-gray-600">Books</h1>
<div class="container mx-auto bg-gray-200 py-4 px-3 text-stroke-amber-900">

    <a href="{{ route('books.create') }}"
        class="rounded bg-blue-500 my-2 text-white py-2 px-4 inline-block hover:bg-blue-600">
        Add Book
    </a>
    <table class="border-collapse border border-separate border-gray-400 my-3 w-full table-auto">
        <thead>
            <tr>
                <th>Author</th>
                <th>Title</th>
                <th>Publish date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody class="border border-collapse border-black text-center">
            @foreach ($books as $book)
            <tr>
                <td>{{ $book->author->name }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->publish_date }}</td>
                <td>
                    <a href="{{ route('books.edit', $book) }}"
                        class="rounded bg-yellow-400 text-white py-1 px-3">Edit</a>

                    <form action="{{ route('books.destroy', $book) }}" method="POST" class="inline"
                        onsubmit="return confirm('Are you sure you want to delete this book?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="rounded bg-red-500 text-white py-1 px-3">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection