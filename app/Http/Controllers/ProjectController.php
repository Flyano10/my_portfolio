<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'screenshot' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'demo_url' => 'nullable|url',
            'github_url' => 'nullable|url',
            'tech_stack' => 'nullable|string'
        ]);

        $data = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'demo_url' => $request->demo_url,
            'github_url' => $request->github_url,
        ];

        // Handle screenshot upload
        if ($request->hasFile('screenshot')) {
            $path = $request->file('screenshot')->store('projects', 'public');
            $data['screenshot'] = $path;
        }

        // Handle tech stack
        if ($request->tech_stack) {
            $data['tech_stack'] = array_map('trim', explode(',', $request->tech_stack));
        }

        Project::create($data);

        return redirect()->route('projects.index')->with('success', 'Project added successfully!');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'screenshot' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'demo_url' => 'nullable|url',
            'github_url' => 'nullable|url',
            'tech_stack' => 'nullable|string'
        ]);

        $data = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'demo_url' => $request->demo_url,
            'github_url' => $request->github_url,
        ];

        // Handle screenshot upload
        if ($request->hasFile('screenshot')) {
            // Delete old screenshot if exists
            if ($project->screenshot) {
                Storage::disk('public')->delete($project->screenshot);
            }
            $path = $request->file('screenshot')->store('projects', 'public');
            $data['screenshot'] = $path;
        }

        // Handle tech stack
        if ($request->tech_stack) {
            $data['tech_stack'] = array_map('trim', explode(',', $request->tech_stack));
        }

        $project->update($data);

        return redirect()->route('projects.index')->with('success', 'Project updated successfully!');
    }

    public function destroy(Project $project)
    {
        // Delete screenshot if exists
        if ($project->screenshot) {
            Storage::disk('public')->delete($project->screenshot);
        }
        
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}
