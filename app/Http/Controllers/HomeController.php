<?php

namespace App\Http\Controllers;

use App\Models\Project;

class HomeController extends Controller
{
    // Halaman Beranda
    public function index()
    {
        $projects = Project::all();
        return view('home', compact('projects'));
    }

    // Halaman Tentang Saya
    public function about()
    {
        return view('about');
    }
}
