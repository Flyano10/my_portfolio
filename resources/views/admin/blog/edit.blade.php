@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto px-4 py-10">
        <h1 class="text-2xl font-bold mb-4">Edit Post</h1>

        <form action="{{ route('admin.blog.update', $post->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="judul" class="block font-medium">Title</label>
                <input type="text" name="judul" id="judul" value="{{ $post->judul }}" required
                    class="w-full border border-gray-300 rounded px-4 py-2 mt-1">
            </div>

            <div>
                <label for="konten" class="block font-medium">Content</label>
                <textarea name="konten" id="konten" rows="8" required
                    class="w-full border border-gray-300 rounded px-4 py-2 mt-1">{{ $post->konten }}</textarea>
            </div>

            <div class="text-right">
                <button type="submit"
                    class="bg-indigo-600 text-white px-6 py-2 rounded hover:bg-indigo-700">Update</button>
            </div>
        </form>
    </div>
@endsection
