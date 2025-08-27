@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-8">
    <div class="bg-white rounded-lg shadow-lg p-6">
        <h1 class="text-3xl font-bold text-gray-900 mb-6">Edit Project</h1>
        
        <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')
            
            <!-- Project Title -->
            <div>
                <label for="judul" class="block text-sm font-medium text-gray-700 mb-2">Project Title</label>
                <input type="text" name="judul" id="judul" required 
                    value="{{ $project->judul }}"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    placeholder="Enter project title">
            </div>
            
            <!-- Project Description -->
            <div>
                <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                <textarea name="deskripsi" id="deskripsi" rows="4" required 
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    placeholder="Describe your project...">{{ $project->deskripsi }}</textarea>
            </div>
            
            <!-- Screenshot Upload -->
            <div>
                <label for="screenshot" class="block text-sm font-medium text-gray-700 mb-2">Project Screenshot</label>
                @if($project->screenshot)
                    <div class="mb-2">
                        <p class="text-sm text-gray-600">Current screenshot: {{ $project->screenshot }}</p>
                    </div>
                @endif
                <input type="file" name="screenshot" id="screenshot" accept="image/*"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <p class="text-sm text-gray-500 mt-1">Upload JPG, PNG, or JPEG (max 2MB). Leave empty to keep current image.</p>
            </div>
            
            <!-- Demo URL -->
            <div>
                <label for="demo_url" class="block text-sm font-medium text-gray-700 mb-2">Live Demo URL</label>
                <input type="url" name="demo_url" id="demo_url" 
                    value="{{ $project->demo_url }}"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    placeholder="https://demo-project.com">
                <p class="text-sm text-gray-500 mt-1">Optional: Link to live demo of your project</p>
            </div>
            
            <!-- GitHub URL -->
            <div>
                <label for="github_url" class="block text-sm font-medium text-gray-700 mb-2">GitHub Repository</label>
                <input type="url" name="github_url" id="github_url" 
                    value="{{ $project->github_url }}"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    placeholder="https://github.com/username/project">
                <p class="text-sm text-gray-500 mt-1">Optional: Link to source code repository</p>
            </div>
            
            <!-- Tech Stack -->
            <div>
                <label for="tech_stack" class="block text-sm font-medium text-gray-700 mb-2">Tech Stack</label>
                <input type="text" name="tech_stack" id="tech_stack" 
                    value="{{ is_array($project->tech_stack) ? implode(', ', $project->tech_stack) : $project->tech_stack }}"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    placeholder="Laravel, Tailwind CSS, PHP, MySQL">
                <p class="text-sm text-gray-500 mt-1">Separate technologies with commas</p>
            </div>
            
            <!-- Action Buttons -->
            <div class="flex gap-4 pt-4">
                <button type="submit" 
                    class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition-colors">
                    Update Project
                </button>
                <a href="{{ route('projects.index') }}" 
                    class="bg-gray-300 hover:bg-gray-400 text-gray-700 px-6 py-3 rounded-lg font-medium transition-colors">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
