@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto px-4 py-10">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Project List</h1>
            <a href="{{ route('projects.create') }}"
                class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700 transition">
                + Add Project
            </a>
        </div>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="space-y-4">
            @forelse ($projects as $project)
                <div class="p-4 border border-gray-300 rounded shadow-sm">
                    <h2 class="text-xl font-semibold">{{ $project->judul }}</h2>
                    <p class="text-gray-600">{{ $project->deskripsi }}</p>

                    <div class="mt-3 flex gap-3">
                        <a href="{{ route('projects.edit', $project->id) }}"
                            class="text-indigo-600 hover:underline">Edit</a>

                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this project?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Delete</button>
                        </form>
                    </div>
                </div>
            @empty
                <p>No projects available.</p>
            @endforelse
        </div>
    </div>
@endsection
