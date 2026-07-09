@extends('layouts.app')


@section('content')
<h1 class="font-bold my-3 text-center text-4xl text-gray-600">Authors</h1>
<div class="container mx-auto bg-gray-200 py-4 px-3 text-stroke-amber-900">

    <a href="{{ route('authors.create') }}"
        class="rounded bg-blue-500 my-2 text-white py-2 px-4 inline-block hover:bg-blue-600">
        Add Author
    </a>
    <table class="border-collapse border border-separate border-gray-400 my-3 w-full table-auto">
        <thead>
            <tr>
                <th>Name</th>
                <th>bio</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody class="border border-collapse border-black text-center">
            @foreach ($authors as $author)
            <tr>
                <td>{{ $author->name }}</td>
                <td>{{ $author->bio }}</td>
                <td>
                    <a href="{{ route('authors.edit', $author) }}"
                        class="rounded bg-yellow-400 text-white py-1 px-3">Edit</a>

                    <form action="{{ route('authors.destroy', $author) }}" method="POST" class="inline"
                        onsubmit="return confirm('Are you sure you want to delete this author?')">
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