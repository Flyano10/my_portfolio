@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto px-4 py-10">
        <h1 class="text-3xl font-bold mb-6">Blog & Artikel</h1>

        @forelse($posts as $post)
            <div class="mb-6 border-b pb-4">
                <h2 class="text-xl font-semibold">{{ $post->judul }}</h2>
                <p class="text-gray-600 text-sm">{{ $post->created_at->format('d M Y') }}</p>
                <a href="{{ route('blog.show', $post->id) }}" class="text-indigo-600 hover:underline">Baca Selengkapnya</a>
            </div>
        @empty
            <p>Belum ada artikel.</p>
        @endforelse
    </div>
@endsection
