@extends('layouts.app')

@section('content')
    <div class="max-w-5xl mx-auto px-4 py-10">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Blog Management</h1>
            <a href="{{ route('admin.blog.create') }}"
                class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">+ Add New Post</a>
        </div>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @forelse ($posts as $post)
            <div class="border-b py-4 flex justify-between items-center">
                <div>
                    <h2 class="font-semibold text-lg">{{ $post->judul }}</h2>
                    <p class="text-sm text-gray-500">{{ $post->created_at->format('d M Y') }}</p>
                </div>
                <div class="space-x-2">
                    <a href="{{ route('admin.blog.edit', $post->id) }}" class="text-blue-600 hover:underline">Edit</a>
                    <form action="{{ route('admin.blog.destroy', $post->id) }}" method="POST" class="inline-block"
                        onsubmit="return confirm('Are you sure you want to delete this post?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline">Delete</button>
                    </form>
                </div>
            </div>
        @empty
            <p>No posts available.</p>
        @endforelse
    </div>
@endsection
