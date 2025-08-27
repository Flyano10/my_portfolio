@extends('layouts.app')

@section('content')
    <!-- HERO SECTION -->
    <style>
    @keyframes spin-border {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    .profile-border-animate {
      position: absolute;
      top: -10px; left: -10px; right: -10px; bottom: -10px;
      border-radius: 9999px;
      border: 4px solid #3b82f6;
      opacity: 0.3;
      z-index: 1;
      animation: spin-border 3s linear infinite;
    }
    @keyframes bounce-scale {
      0%, 100% { transform: scale(1); }
      50% { transform: scale(1.12); }
    }
    .group:hover .profile-bounce {
      animation: bounce-scale 0.5s;
    }
    .tooltip {
      position: absolute;
      bottom: 120%;
      left: 50%;
      transform: translateX(-50%);
      background: #1e293b;
      color: #fff;
      padding: 4px 10px;
      border-radius: 6px;
      font-size: 0.85rem;
      white-space: nowrap;
      opacity: 0;
      pointer-events: none;
      transition: opacity 0.2s;
    }
    .group:hover .tooltip { opacity: 1; }
    @media (max-width: 640px) {
      .profile-border-animate { top: -4px; left: -4px; right: -4px; bottom: -4px; }
      .tooltip { display: none; }
    }
    </style>
    <!-- Background Shape SVG Atas -->
    <div class="absolute top-0 left-0 w-full overflow-hidden pointer-events-none" style="z-index:0;">
      <svg viewBox="0 0 1440 320" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-32 md:h-48">
        <defs>
          <linearGradient id="heroGrad1" x1="0" y1="0" x2="0" y2="1">
            <stop offset="0%" stop-color="#3b82f6" stop-opacity="0.15" />
            <stop offset="100%" stop-color="#fff" stop-opacity="0" />
          </linearGradient>
        </defs>
        <path fill="url(#heroGrad1)" d="M0,64L80,101.3C160,139,320,213,480,218.7C640,224,800,160,960,122.7C1120,85,1280,75,1360,69.3L1440,64L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z" />
      </svg>
        </div>
    <section id="hero" class="relative min-h-screen flex flex-col items-center justify-center bg-white text-blue-900 py-16" data-aos="fade-up">
        <div class="flex flex-col md:flex-row items-center gap-10 md:gap-10 gap-8 w-full max-w-5xl mx-auto px-4">
            <!-- Profile Photo -->
            <div class="flex-shrink-0 group relative mb-6 md:mb-4 flex flex-col items-center">
                <span class="profile-border-animate"></span>
                <div class="absolute inset-0 rounded-full bg-blue-400 opacity-30 blur-2xl animate-pulse z-0"></div>
                <img src="{{ asset('images/rafly.jpg.jpeg') }}" alt="Foto Rafly" class="profile-bounce w-40 h-40 rounded-full shadow-lg border-4 border-blue-200 object-cover relative z-10 transition-transform duration-300 group-hover:scale-110 group-hover:-rotate-3">
            </div>
            <!-- Social Media Icon -->
            <div class="flex justify-center gap-8 mb-8 md:mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="relative group">
                    <a href="https://github.com/raflyjuliano" target="_blank" class="text-blue-600 hover:text-black text-3xl transition-transform duration-200 hover:scale-125 active:scale-110"><i class="fab fa-github"></i></a>
                    <span class="tooltip">GitHub</span>
                </div>
                <div class="relative group">
                    <a href="https://linkedin.com/in/raflyjuliano" target="_blank" class="text-blue-600 hover:text-[#0A66C2] text-3xl transition-transform duration-200 hover:scale-125 active:scale-110"><i class="fab fa-linkedin"></i></a>
                    <span class="tooltip">LinkedIn</span>
                </div>
                <div class="relative group">
                    <a href="mailto:raflyjuliano62@gmail.com" class="text-blue-600 hover:text-[#EA4335] text-3xl transition-transform duration-200 hover:scale-125 active:scale-110"><i class="fas fa-envelope"></i></a>
                    <span class="tooltip">Email</span>
                </div>
            </div>
            <!-- Intro -->
            <div class="text-center md:text-left flex-1 flex flex-col gap-4 md:gap-2">
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-2" data-aos="fade-right" data-aos-delay="300">Halo, Saya Rafly</h1>
                <h2 class="text-xl sm:text-2xl md:text-3xl font-semibold text-blue-600 mb-4" data-aos="fade-right" data-aos-delay="400">Web Developer</h2>
                <p class="text-base sm:text-lg text-blue-800 mb-6" data-aos="fade-right" data-aos-delay="500">Membangun website modern, cepat, dan responsif dengan Laravel & Tailwind CSS.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start mb-6 md:mb-0">
                    <a href="#projects" class="bg-blue-600 hover:bg-blue-700 hover:scale-105 hover:shadow-lg transition-transform duration-200 text-white px-6 py-3 rounded-full font-semibold shadow">Lihat Project</a>
                    <a href="{{ asset('cv/CV-RaflyJuliano..pdf') }}" download class="border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white hover:scale-105 hover:shadow-lg transition-transform duration-200 px-6 py-3 rounded-full font-semibold">Download CV</a>
                </div>
            </div>
        </div>
        <!-- Scroll Down Indicator -->
        <div class="absolute left-1/2 bottom-8 transform -translate-x-1/2 flex flex-col items-center animate-bounce" style="z-index:2;">
          <svg class="w-8 h-8 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
          <span class="text-xs text-blue-400 mt-1">Scroll Down</span>
        </div>
    </section>
    <!-- Background Shape SVG Bawah -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden pointer-events-none" style="z-index:0;">
      <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-24 md:h-32">
            <defs>
          <linearGradient id="heroGrad2" x1="0" y1="0" x2="0" y2="1">
            <stop offset="0%" stop-color="#3b82f6" stop-opacity="0.10" />
            <stop offset="100%" stop-color="#fff" stop-opacity="0" />
                </linearGradient>
            </defs>
        <path fill="url(#heroGrad2)" fill-opacity="1" d="M0,32L60,37.3C120,43,240,53,360,69.3C480,85,600,107,720,112C840,117,960,107,1080,90.7C1200,75,1320,53,1380,42.7L1440,32L1440,120L1380,120C1320,120,1200,120,1080,120C960,120,840,120,720,120C600,120,480,120,360,120C240,120,120,120,60,120L0,120Z" />
        </svg>
    </div>

    <!-- PROJECTS SECTION -->
    <section id="projects" class="py-20 bg-blue-50" data-aos="fade-up">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-blue-900 mb-4">Featured Projects</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-blue-700 mx-auto mb-4"></div>
                <p class="text-lg text-blue-700 max-w-2xl mx-auto">
                    Here are some of my recent projects that showcase my skills and creativity in web development.
                </p>
            </div>
            @if($projects->count() > 0)
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($projects as $project)
                        <div class="group bg-white rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-300 overflow-hidden border border-blue-100">
                            <!-- Project Screenshot with Clickable Link -->
                            <div class="h-48 bg-gradient-to-br from-blue-100 to-blue-200 flex items-center justify-center relative overflow-hidden">
                                @if($project->screenshot)
                                    <img src="{{ Storage::url($project->screenshot) }}" alt="{{ $project->judul }}" 
                                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                @else
                                    <svg class="w-16 h-16 text-blue-400 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                @endif
                                <!-- Overlay with project info and clickable link -->
                                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                    <div class="text-white text-center">
                                        @if($project->demo_url)
                                            <a href="{{ $project->demo_url }}" target="_blank" class="block">
                                                <p class="text-sm font-medium">Click to view live demo</p>
                                            </a>
                                        @elseif($project->github_url)
                                            <a href="{{ $project->github_url }}" target="_blank" class="block">
                                                <p class="text-sm font-medium">Click to view on GitHub</p>
                                            </a>
                                        @else
                                            <p class="text-sm font-medium">Project details</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Project Content -->
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-blue-900 mb-2 group-hover:text-blue-600 transition-colors">
                                    {{ $project->judul }}
                                </h3>
                                <p class="text-blue-700 mb-4 line-clamp-3">{{ $project->deskripsi }}</p>
                                
                                <!-- Tech Stack Badges -->
                                <div class="flex flex-wrap gap-2 mb-4">
                                    @if($project->tech_stack && is_array($project->tech_stack))
                                        @foreach(array_slice($project->tech_stack, 0, 4) as $tech)
                                            <span class="px-3 py-1 bg-blue-100 text-blue-700 text-xs rounded-full font-medium">{{ $tech }}</span>
                                        @endforeach
                                    @else
                                        <span class="px-3 py-1 bg-blue-100 text-blue-700 text-xs rounded-full font-medium">Laravel</span>
                                        <span class="px-3 py-1 bg-blue-100 text-blue-700 text-xs rounded-full font-medium">Tailwind CSS</span>
                                        <span class="px-3 py-1 bg-blue-100 text-blue-700 text-xs rounded-full font-medium">PHP</span>
                                    @endif
                                </div>
                                
                                <!-- Project Links -->
                                <div class="flex gap-2">
                                    @if($project->demo_url)
                                        <a href="{{ $project->demo_url }}" target="_blank" class="flex-1 bg-blue-600 hover:bg-blue-700 text-white text-center py-2 px-4 rounded-lg text-sm font-medium transition-colors duration-200">
                                            <i class="fas fa-external-link-alt mr-2"></i>Live Demo
                                        </a>
                                    @else
                                        <span class="flex-1 bg-gray-300 text-gray-500 text-center py-2 px-4 rounded-lg text-sm font-medium cursor-not-allowed">
                                            <i class="fas fa-external-link-alt mr-2"></i>No Demo
                                        </span>
                                    @endif
                                    
                                    @if($project->github_url)
                                        <a href="{{ $project->github_url }}" target="_blank" class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 text-center py-2 px-4 rounded-lg text-sm font-medium transition-colors duration-200">
                                            <i class="fab fa-github mr-2"></i>GitHub
                                        </a>
                                    @else
                                        <span class="flex-1 bg-gray-300 text-gray-500 text-center py-2 px-4 rounded-lg text-sm font-medium cursor-not-allowed">
                                            <i class="fab fa-github mr-2"></i>No Repo
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <div class="text-center mt-12">
                    <a href="{{ route('projects.index') }}" 
                        class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 hover:scale-105 hover:shadow-lg transition-all duration-200 text-white px-8 py-3 rounded-full font-semibold shadow">
                        <span>View All Projects</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            @else
                <div class="text-center py-12">
                    <div class="w-24 h-24 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-12 h-12 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-blue-800 mb-2">No Projects Yet</h3>
                    <p class="text-blue-600">Projects will be displayed here once added.</p>
                </div>
            @endif
        </div>
        </section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="py-20 bg-white text-blue-900" data-aos="fade-up">
        <div class="max-w-4xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-2">Kontak Saya</h2>
                <p class="text-blue-700">Punya ide atau ingin kerja sama? Kirim pesan lewat form di bawah!</p>
            </div>
            <div class="grid md:grid-cols-2 gap-10">
                <!-- Info Kontak -->
                <div class="space-y-6">
                    <div>
                        <div class="font-semibold">Email</div>
                        <div class="text-blue-700">raflyjuliano62@gmail.com</div>
                            </div>
                            <div>
                        <div class="font-semibold">Lokasi</div>
                        <div class="text-blue-700">Indonesia</div>
                    </div>
                </div>
                <!-- Form Kontak -->
                <form action="{{ route('kontak.store') }}" method="POST" class="space-y-6 bg-blue-50 p-6 rounded-xl shadow">
                    @csrf
                    <div>
                        <label for="nama" class="block text-sm font-medium mb-2">Nama</label>
                        <input type="text" name="nama" id="nama" required class="w-full px-4 py-3 bg-white border border-blue-200 rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-transparent text-blue-900 placeholder-blue-300">
                </div>
                <div>
                        <label for="email" class="block text-sm font-medium mb-2">Email</label>
                        <input type="email" name="email" id="email" required class="w-full px-4 py-3 bg-white border border-blue-200 rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-transparent text-blue-900 placeholder-blue-300">
                </div>
                <div>
                        <label for="pesan" class="block text-sm font-medium mb-2">Pesan</label>
                        <textarea name="pesan" id="pesan" rows="4" required class="w-full px-4 py-3 bg-white border border-blue-200 rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-transparent text-blue-900 placeholder-blue-300"></textarea>
                </div>
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 hover:scale-105 hover:shadow-lg transition-transform duration-200 text-white px-8 py-3 rounded-lg font-semibold shadow">Kirim Pesan</button>
                </form>
            </div>
                </div>
        </section>

        <!-- FOOTER -->
    <footer class="bg-blue-900 text-white py-10">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h3 class="text-2xl font-bold mb-2">Rafly Juliano</h3>
            <p class="text-blue-200 mb-4">Web Developer</p>
            <div class="flex justify-center gap-6 text-2xl mb-6">
                <a href="https://github.com/raflyjuliano" target="_blank" class="hover:text-blue-300 transition"><i class="fab fa-github"></i></a>
                <a href="https://linkedin.com/in/raflyjuliano" target="_blank" class="hover:text-blue-300 transition"><i class="fab fa-linkedin"></i></a>
                <a href="mailto:raflyjuliano62@gmail.com" class="hover:text-blue-300 transition"><i class="fas fa-envelope"></i></a>
            </div>
            <div class="border-t border-blue-700 pt-6">
                <p class="text-blue-200">&copy; {{ date('Y') }} Rafly Juliano. All rights reserved.</p>
                <p class="text-sm text-blue-300 mt-2">Dibuat dengan Laravel & Tailwind CSS</p>
            </div>
            </div>
        </footer>
@endsection

@section('title', 'Home - Rafly Juliano')
@section('meta_description', 'Selamat datang di portfolio Rafly Juliano, web developer.')
@section('og_title', 'Home - Rafly Juliano')
@section('og_description', 'Selamat datang di portfolio Rafly Juliano, web developer.')
