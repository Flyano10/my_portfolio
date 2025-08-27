@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto px-4 py-10">
        <h1 class="text-3xl font-bold mb-2">{{ $post->judul }}</h1>
        <p class="text-sm text-gray-500 mb-4">{{ $post->created_at->format('d M Y') }}</p>

        <div class="prose max-w-none">
            {!! nl2br(e($post->konten)) !!}
        </div>

        <a href="{{ route('blog.index') }}" class="inline-block mt-6 text-indigo-600 hover:underline">← Kembali ke Blog</a>
    </div>
@endsection
