@extends('layouts.app')

@section('content')
<!-- HERO SECTION -->
<section class="py-20 bg-gradient-to-br from-blue-50 to-white">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-16" data-aos="fade-up">
            <h1 class="text-4xl md:text-6xl font-bold text-blue-900 mb-4">Skills & Expertise</h1>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-blue-700 mx-auto mb-4"></div>
            <p class="text-xl text-blue-700 max-w-3xl mx-auto">Technical skills and technologies I use to bring ideas to life</p>
        </div>
    </div>
</section>

<!-- MAIN SKILLS SECTION -->
<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-4">
        <!-- Backend Development -->
        <div class="mb-16" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-blue-900 mb-8 text-center">Backend Development</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-blue-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="fab fa-laravel text-2xl text-blue-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-blue-900">Laravel</h3>
                            <p class="text-blue-600">PHP Framework</p>
                        </div>
                    </div>
                    <div class="mb-2 flex justify-between text-sm text-blue-700">
                        <span>Proficiency</span>
                        <span>90%</span>
                    </div>
                    <div class="w-full bg-blue-200 rounded-full h-3">
                        <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-3 rounded-full transition-all duration-1000" style="width: 90%"></div>
                    </div>
                </div>

                <div class="bg-blue-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="fab fa-php text-2xl text-blue-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-blue-900">PHP</h3>
                            <p class="text-blue-600">Server-side Language</p>
                        </div>
                    </div>
                    <div class="mb-2 flex justify-between text-sm text-blue-700">
                        <span>Proficiency</span>
                        <span>85%</span>
                    </div>
                    <div class="w-full bg-blue-200 rounded-full h-3">
                        <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-3 rounded-full transition-all duration-1000" style="width: 85%"></div>
                    </div>
                </div>

                <div class="bg-blue-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-database text-2xl text-blue-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-blue-900">MySQL</h3>
                            <p class="text-blue-600">Database Management</p>
                        </div>
                    </div>
                    <div class="mb-2 flex justify-between text-sm text-blue-700">
                        <span>Proficiency</span>
                        <span>80%</span>
                    </div>
                    <div class="w-full bg-blue-200 rounded-full h-3">
                        <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-3 rounded-full transition-all duration-1000" style="width: 80%"></div>
                    </div>
                </div>

                <div class="bg-blue-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-code text-2xl text-blue-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-blue-900">API Development</h3>
                            <p class="text-blue-600">RESTful APIs</p>
                        </div>
                    </div>
                    <div class="mb-2 flex justify-between text-sm text-blue-700">
                        <span>Proficiency</span>
                        <span>85%</span>
                    </div>
                    <div class="w-full bg-blue-200 rounded-full h-3">
                        <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-3 rounded-full transition-all duration-1000" style="width: 85%"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Frontend Development -->
        <div class="mb-16" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-3xl font-bold text-blue-900 mb-8 text-center">Frontend Development</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-blue-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="fab fa-html5 text-2xl text-blue-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-blue-900">HTML5</h3>
                            <p class="text-blue-600">Markup Language</p>
                        </div>
            </div>
                    <div class="mb-2 flex justify-between text-sm text-blue-700">
                        <span>Proficiency</span>
                        <span>95%</span>
            </div>
                    <div class="w-full bg-blue-200 rounded-full h-3">
                        <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-3 rounded-full transition-all duration-1000" style="width: 95%"></div>
        </div>
            </div>

                <div class="bg-blue-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="fab fa-css3-alt text-2xl text-blue-600"></i>
            </div>
                        <div>
                            <h3 class="text-xl font-bold text-blue-900">CSS3</h3>
                            <p class="text-blue-600">Styling Language</p>
        </div>
            </div>
                    <div class="mb-2 flex justify-between text-sm text-blue-700">
                        <span>Proficiency</span>
                        <span>90%</span>
            </div>
                    <div class="w-full bg-blue-200 rounded-full h-3">
                        <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-3 rounded-full transition-all duration-1000" style="width: 90%"></div>
        </div>
            </div>

                <div class="bg-blue-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="fab fa-js-square text-2xl text-blue-600"></i>
            </div>
                        <div>
                            <h3 class="text-xl font-bold text-blue-900">JavaScript</h3>
                            <p class="text-blue-600">Programming Language</p>
        </div>
            </div>
                    <div class="mb-2 flex justify-between text-sm text-blue-700">
                        <span>Proficiency</span>
                        <span>80%</span>
            </div>
                    <div class="w-full bg-blue-200 rounded-full h-3">
                        <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-3 rounded-full transition-all duration-1000" style="width: 80%"></div>
        </div>
    </div>

                <div class="bg-blue-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="fab fa-css3 text-2xl text-blue-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-blue-900">Tailwind CSS</h3>
                            <p class="text-blue-600">Utility-first CSS</p>
                        </div>
                    </div>
                    <div class="mb-2 flex justify-between text-sm text-blue-700">
                        <span>Proficiency</span>
                        <span>85%</span>
                    </div>
                    <div class="w-full bg-blue-200 rounded-full h-3">
                        <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-3 rounded-full transition-all duration-1000" style="width: 85%"></div>
                    </div>
                </div>
            </div>
            </div>

        <!-- Tools & Version Control -->
        <div class="mb-16" data-aos="fade-up" data-aos-delay="400">
            <h2 class="text-3xl font-bold text-blue-900 mb-8 text-center">Tools & Version Control</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-blue-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="fab fa-git-alt text-2xl text-blue-600"></i>
            </div>
                        <div>
                            <h3 class="text-xl font-bold text-blue-900">Git</h3>
                            <p class="text-blue-600">Version Control</p>
        </div>
            </div>
                    <div class="mb-2 flex justify-between text-sm text-blue-700">
                        <span>Proficiency</span>
                        <span>85%</span>
            </div>
                    <div class="w-full bg-blue-200 rounded-full h-3">
                        <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-3 rounded-full transition-all duration-1000" style="width: 85%"></div>
        </div>
    </div>

                <div class="bg-blue-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="fab fa-github text-2xl text-blue-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-blue-900">GitHub</h3>
                            <p class="text-blue-600">Code Repository</p>
                        </div>
            </div>
                    <div class="mb-2 flex justify-between text-sm text-blue-700">
                        <span>Proficiency</span>
                        <span>90%</span>
            </div>
                    <div class="w-full bg-blue-200 rounded-full h-3">
                        <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-3 rounded-full transition-all duration-1000" style="width: 90%"></div>
        </div>
            </div>

                <div class="bg-blue-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-code text-2xl text-blue-600"></i>
            </div>
                        <div>
                            <h3 class="text-xl font-bold text-blue-900">VS Code</h3>
                            <p class="text-blue-600">Code Editor</p>
        </div>
            </div>
                    <div class="mb-2 flex justify-between text-sm text-blue-700">
                        <span>Proficiency</span>
                        <span>95%</span>
            </div>
                    <div class="w-full bg-blue-200 rounded-full h-3">
                        <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-3 rounded-full transition-all duration-1000" style="width: 95%"></div>
        </div>
    </div>

                <div class="bg-blue-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-box text-2xl text-blue-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-blue-900">Composer</h3>
                            <p class="text-blue-600">PHP Dependency Manager</p>
                </div>
            </div>
                    <div class="mb-2 flex justify-between text-sm text-blue-700">
                        <span>Proficiency</span>
                        <span>80%</span>
                    </div>
                    <div class="w-full bg-blue-200 rounded-full h-3">
                        <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-3 rounded-full transition-all duration-1000" style="width: 80%"></div>
                </div>
            </div>
                </div>
            </div>

        <!-- Soft Skills -->
        <div class="mb-16" data-aos="fade-up" data-aos-delay="600">
            <h2 class="text-3xl font-bold text-blue-900 mb-8 text-center">Soft Skills</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-xl text-center hover:shadow-lg transition-shadow">
                    <div class="w-16 h-16 bg-blue-200 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-lightbulb text-2xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2">Problem Solving</h3>
                    <p class="text-blue-700">Analytical thinking and creative solutions</p>
                </div>

                <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-xl text-center hover:shadow-lg transition-shadow">
                    <div class="w-16 h-16 bg-blue-200 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-users text-2xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2">Team Work</h3>
                    <p class="text-blue-700">Collaboration and communication skills</p>
                </div>

                <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-xl text-center hover:shadow-lg transition-shadow">
                    <div class="w-16 h-16 bg-blue-200 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-rocket text-2xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2">Fast Learning</h3>
                    <p class="text-blue-700">Quick adaptation to new technologies</p>
                </div>
            </div>
            </div>
            </div>
</section>

<!-- CALL TO ACTION -->
<section class="py-20 bg-gradient-to-br from-blue-600 to-blue-800 text-white">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to See My Work?</h2>
        <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
            Check out my projects to see these skills in action. 
            Let's discuss how I can contribute to your next project!
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#projects" class="bg-white text-blue-600 hover:bg-blue-50 px-8 py-3 rounded-full font-semibold shadow-lg hover:shadow-xl transition-all duration-200">
                View Projects
            </a>
            <a href="#contact" class="border-2 border-white text-white hover:bg-white hover:text-blue-600 px-8 py-3 rounded-full font-semibold transition-all duration-200">
                Get In Touch
            </a>
        </div>
            </div>
</section>
@endsection

@section('title', 'Skills & Expertise - Rafly Juliano')
@section('meta_description', 'Technical skills and expertise of Rafly Juliano in web development, including Laravel, PHP, MySQL, and modern frontend technologies.')
@section('og_title', 'Skills & Expertise - Rafly Juliano')
@section('og_description', 'Technical skills and expertise of Rafly Juliano in web development, including Laravel, PHP, MySQL, and modern frontend technologies.')

            <div class="w-full bg-pink-100 rounded-full h-2 mb-2">

                <div class="bg-pink-400 h-2 rounded-full" style="width: 80%"></div>

            </div>

            <ul class="text-xs text-gray-600 space-y-1 mb-2">

                <li><span class="font-semibold text-pink-600">Eloquent ORM</span> &bull; Advanced</li>

                <li><span class="font-semibold text-pink-600">Blade Templates</span> &bull; Advanced</li>

                <li><span class="font-semibold text-pink-600">Authentication</span> &bull; Advanced</li>

                <li><span class="font-semibold text-pink-600">API Development</span> &bull; Intermediate</li>

            </ul>

        </div>

        <!-- Tailwind CSS -->

        <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300 border-t-4 border-cyan-400 overflow-hidden group relative">

            <div class="absolute -top-6 left-1/2 -translate-x-1/2 w-20 h-20 bg-cyan-200 rounded-full blur-2xl opacity-30"></div>

            <div class="flex items-center justify-between mb-4 relative z-10">

                <img src="{{ asset('images/icon/tailwindcss.svg') }}" alt="Tailwind CSS" class="w-14 h-14 object-contain drop-shadow-lg">

                <span class="bg-cyan-100 text-cyan-700 px-3 py-1 rounded-full text-xs font-bold flex items-center gap-1">

                    <svg class="w-4 h-4 inline" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.18c.969 0 1.371 1.24.588 1.81l-3.388 2.46a1 1 0 00-.364 1.118l1.287 3.966c.3.922-.755 1.688-1.54 1.118l-3.388-2.46a1 1 0 00-1.175 0l-3.388 2.46c-.784.57-1.838-.196-1.54-1.118l1.287-3.966a1 1 0 00-.364-1.118L2.045 9.394c-.783-.57-.38-1.81.588-1.81h4.18a1 1 0 00.95-.69l1.286-3.967z"/></svg>

                    Advanced

                </span>

            </div>

            <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-cyan-600 transition-colors">Tailwind CSS</h3>

            <div class="w-full bg-cyan-100 rounded-full h-2 mb-2">

                <div class="bg-cyan-400 h-2 rounded-full" style="width: 80%"></div>

            </div>

            <ul class="text-xs text-gray-600 space-y-1 mb-2">

                <li><span class="font-semibold text-cyan-600">Utility Classes</span> &bull; Advanced</li>

                <li><span class="font-semibold text-cyan-600">Responsive Design</span> &bull; Advanced</li>

                <li><span class="font-semibold text-cyan-600">Custom Configuration</span> &bull; Intermediate</li>

                <li><span class="font-semibold text-cyan-600">Component Building</span> &bull; Advanced</li>

            </ul>

        </div>

        </div>



    <!-- Tools -->

    <h2 class="text-2xl font-bold mb-6 mt-12 flex items-center gap-2 justify-center">

        <span class="bg-sky-100 text-sky-800 px-3 py-1 rounded-full text-sm">Development Tools</span>

    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">

        <!-- Git -->

        <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300 border-t-4 border-orange-400 overflow-hidden group relative">

            <div class="absolute -top-6 left-1/2 -translate-x-1/2 w-20 h-20 bg-orange-200 rounded-full blur-2xl opacity-30"></div>

            <div class="flex items-center justify-between mb-4 relative z-10">

                <img src="{{ asset('images/icon/git.svg') }}" alt="Git" class="w-14 h-14 object-contain drop-shadow-lg">

                <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-xs font-bold flex items-center gap-1">

                    <svg class="w-4 h-4 inline" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.18c.969 0 1.371 1.24.588 1.81l-3.388 2.46a1 1 0 00-.364 1.118l1.287 3.966c.3.922-.755 1.688-1.54 1.118l-3.388-2.46a1 1 0 00-1.175 0l-3.388 2.46c-.784.57-1.838-.196-1.54-1.118l1.287-3.966a1 1 0 00-.364-1.118L2.045 9.394c-.783-.57-.38-1.81.588-1.81h4.18a1 1 0 00.95-.69l1.286-3.967z"/></svg>

                    Advanced

                </span>

            </div>

            <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-orange-600 transition-colors">Git</h3>

            <div class="w-full bg-orange-100 rounded-full h-2 mb-2">

                <div class="bg-orange-400 h-2 rounded-full" style="width: 80%"></div>

            </div>

            <ul class="text-xs text-gray-600 space-y-1 mb-2">

                <li><span class="font-semibold text-orange-600">Branching & Merging</span> &bull; Advanced</li>

                <li><span class="font-semibold text-orange-600">GitHub/GitLab</span> &bull; Advanced</li>

                <li><span class="font-semibold text-orange-600">Collaborative Work</span> &bull; Advanced</li>

            </ul>

        </div>

        <!-- Figma -->

        <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300 border-t-4 border-pink-400 overflow-hidden group relative">

            <div class="absolute -top-6 left-1/2 -translate-x-1/2 w-20 h-20 bg-pink-200 rounded-full blur-2xl opacity-30"></div>

            <div class="flex items-center justify-between mb-4 relative z-10">

                <img src="{{ asset('images/icon/figma.svg') }}" alt="Figma" class="w-14 h-14 object-contain drop-shadow-lg">

                <span class="bg-pink-100 text-pink-700 px-3 py-1 rounded-full text-xs font-bold flex items-center gap-1">

                    <svg class="w-4 h-4 inline" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.18c.969 0 1.371 1.24.588 1.81l-3.388 2.46a1 1 0 00-.364 1.118l1.287 3.966c.3.922-.755 1.688-1.54 1.118l-3.388-2.46a1 1 0 00-1.175 0l-3.388 2.46c-.784.57-1.838-.196-1.54-1.118l1.287-3.966a1 1 0 00-.364-1.118L2.045 9.394c-.783-.57-.38-1.81.588-1.81h4.18a1 1 0 00.95-.69l1.286-3.967z"/></svg>

                    Intermediate

                </span>

            </div>

            <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-pink-600 transition-colors">Figma</h3>

            <div class="w-full bg-pink-100 rounded-full h-2 mb-2">

                <div class="bg-pink-400 h-2 rounded-full" style="width: 60%"></div>

            </div>

            <ul class="text-xs text-gray-600 space-y-1 mb-2">

                <li><span class="font-semibold text-pink-600">Interface Design</span> &bull; Intermediate</li>

                <li><span class="font-semibold text-pink-600">Prototyping</span> &bull; Intermediate</li>

                <li><span class="font-semibold text-pink-600">Design Systems</span> &bull; Basic</li>

            </ul>

    </div>

        <!-- VS Code -->

        <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300 border-t-4 border-indigo-400 overflow-hidden group relative">

            <div class="absolute -top-6 left-1/2 -translate-x-1/2 w-20 h-20 bg-indigo-200 rounded-full blur-2xl opacity-30"></div>

            <div class="flex items-center justify-between mb-4 relative z-10">

                <img src="{{ asset('images/icon/visualstudiocode.svg') }}" alt="VS Code" class="w-14 h-14 object-contain drop-shadow-lg">

                <span class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-xs font-bold flex items-center gap-1">

                    <svg class="w-4 h-4 inline" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.18c.969 0 1.371 1.24.588 1.81l-3.388 2.46a1 1 0 00-.364 1.118l1.287 3.966c.3.922-.755 1.688-1.54 1.118l-3.388-2.46a1 1 0 00-1.175 0l-3.388 2.46c-.784.57-1.838-.196-1.54-1.118l1.287-3.966a1 1 0 00-.364-1.118L2.045 9.394c-.783-.57-.38-1.81.588-1.81h4.18a1 1 0 00.95-.69l1.286-3.967z"/></svg>

                    Advanced

                </span>

            </div>

            <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-indigo-600 transition-colors">VS Code</h3>

            <div class="w-full bg-indigo-100 rounded-full h-2 mb-2">

                <div class="bg-indigo-500 h-2 rounded-full" style="width: 90%"></div>

            </div>

            <ul class="text-xs text-gray-600 space-y-1 mb-2">

                <li><span class="font-semibold text-indigo-600">Extensions</span> &bull; Advanced</li>

                <li><span class="font-semibold text-indigo-600">Debugging</span> &bull; Advanced</li>

                <li><span class="font-semibold text-indigo-600">Git Integration</span> &bull; Advanced</li>

                <li><span class="font-semibold text-indigo-600">Terminal</span> &bull; Advanced</li>

            </ul>

        </div>

    </div>



    <!-- Additional Skills -->

    <div class="mt-16 bg-gradient-to-r from-gray-50 to-blue-50 rounded-2xl p-8">

        <h2 class="text-2xl font-semibold mb-6 text-center">Additional Skills</h2>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">

            <div class="text-center">

                <div class="bg-white rounded-lg p-4 shadow-sm">

                    <h4 class="font-semibold text-gray-800">Database</h4>

                    <p class="text-sm text-gray-600">MySQL, SQLite</p>

                </div>

            </div>

            <div class="text-center">

                <div class="bg-white rounded-lg p-4 shadow-sm">

                    <h4 class="font-semibold text-gray-800">Deployment</h4>

                    <p class="text-sm text-gray-600">Shared Hosting, VPS</p>

                </div>

            </div>

            <div class="text-center">

                <div class="bg-white rounded-lg p-4 shadow-sm">

                    <h4 class="font-semibold text-gray-800">Testing</h4>

                    <p class="text-sm text-gray-600">PHPUnit, Manual Testing</p>

                </div>

            </div>

            <div class="text-center">

                <div class="bg-white rounded-lg p-4 shadow-sm">

                    <h4 class="font-semibold text-gray-800">Soft Skills</h4>

                    <p class="text-sm text-gray-600">Problem Solving, Team Work</p>

                </div>

            </div>

        </div>

    </div>

            </div>

@endsection



            <div class="w-full bg-pink-100 rounded-full h-2 mb-2">

                <div class="bg-pink-400 h-2 rounded-full" style="width: 80%"></div>

            </div>

            <ul class="text-xs text-gray-600 space-y-1 mb-2">

                <li><span class="font-semibold text-pink-600">Eloquent ORM</span> &bull; Advanced</li>

                <li><span class="font-semibold text-pink-600">Blade Templates</span> &bull; Advanced</li>

                <li><span class="font-semibold text-pink-600">Authentication</span> &bull; Advanced</li>

                <li><span class="font-semibold text-pink-600">API Development</span> &bull; Intermediate</li>

            </ul>

        </div>

        <!-- Tailwind CSS -->

        <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300 border-t-4 border-cyan-400 overflow-hidden group relative">

            <div class="absolute -top-6 left-1/2 -translate-x-1/2 w-20 h-20 bg-cyan-200 rounded-full blur-2xl opacity-30"></div>

            <div class="flex items-center justify-between mb-4 relative z-10">

                <img src="{{ asset('images/icon/tailwindcss.svg') }}" alt="Tailwind CSS" class="w-14 h-14 object-contain drop-shadow-lg">

                <span class="bg-cyan-100 text-cyan-700 px-3 py-1 rounded-full text-xs font-bold flex items-center gap-1">

                    <svg class="w-4 h-4 inline" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.18c.969 0 1.371 1.24.588 1.81l-3.388 2.46a1 1 0 00-.364 1.118l1.287 3.966c.3.922-.755 1.688-1.54 1.118l-3.388-2.46a1 1 0 00-1.175 0l-3.388 2.46c-.784.57-1.838-.196-1.54-1.118l1.287-3.966a1 1 0 00-.364-1.118L2.045 9.394c-.783-.57-.38-1.81.588-1.81h4.18a1 1 0 00.95-.69l1.286-3.967z"/></svg>

                    Advanced

                </span>

            </div>

            <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-cyan-600 transition-colors">Tailwind CSS</h3>

            <div class="w-full bg-cyan-100 rounded-full h-2 mb-2">

                <div class="bg-cyan-400 h-2 rounded-full" style="width: 80%"></div>

            </div>

            <ul class="text-xs text-gray-600 space-y-1 mb-2">

                <li><span class="font-semibold text-cyan-600">Utility Classes</span> &bull; Advanced</li>

                <li><span class="font-semibold text-cyan-600">Responsive Design</span> &bull; Advanced</li>

                <li><span class="font-semibold text-cyan-600">Custom Configuration</span> &bull; Intermediate</li>

                <li><span class="font-semibold text-cyan-600">Component Building</span> &bull; Advanced</li>

            </ul>

        </div>

    </div>



    <!-- Tools -->

    <h2 class="text-2xl font-bold mb-6 mt-12 flex items-center gap-2 justify-center">

        <span class="bg-sky-100 text-sky-800 px-3 py-1 rounded-full text-sm">Development Tools</span>

    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">

        <!-- Git -->

        <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300 border-t-4 border-orange-400 overflow-hidden group relative">

            <div class="absolute -top-6 left-1/2 -translate-x-1/2 w-20 h-20 bg-orange-200 rounded-full blur-2xl opacity-30"></div>

            <div class="flex items-center justify-between mb-4 relative z-10">

                <img src="{{ asset('images/icon/git.svg') }}" alt="Git" class="w-14 h-14 object-contain drop-shadow-lg">

                <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-xs font-bold flex items-center gap-1">

                    <svg class="w-4 h-4 inline" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.18c.969 0 1.371 1.24.588 1.81l-3.388 2.46a1 1 0 00-.364 1.118l1.287 3.966c.3.922-.755 1.688-1.54 1.118l-3.388-2.46a1 1 0 00-1.175 0l-3.388 2.46c-.784.57-1.838-.196-1.54-1.118l1.287-3.966a1 1 0 00-.364-1.118L2.045 9.394c-.783-.57-.38-1.81.588-1.81h4.18a1 1 0 00.95-.69l1.286-3.967z"/></svg>

                    Advanced

                </span>

            </div>

            <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-orange-600 transition-colors">Git</h3>

            <div class="w-full bg-orange-100 rounded-full h-2 mb-2">

                <div class="bg-orange-400 h-2 rounded-full" style="width: 80%"></div>

            </div>

            <ul class="text-xs text-gray-600 space-y-1 mb-2">

                <li><span class="font-semibold text-orange-600">Branching & Merging</span> &bull; Advanced</li>

                <li><span class="font-semibold text-orange-600">GitHub/GitLab</span> &bull; Advanced</li>

                <li><span class="font-semibold text-orange-600">Collaborative Work</span> &bull; Advanced</li>

            </ul>

        </div>

        <!-- Figma -->

        <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300 border-t-4 border-pink-400 overflow-hidden group relative">

            <div class="absolute -top-6 left-1/2 -translate-x-1/2 w-20 h-20 bg-pink-200 rounded-full blur-2xl opacity-30"></div>

            <div class="flex items-center justify-between mb-4 relative z-10">

                <img src="{{ asset('images/icon/figma.svg') }}" alt="Figma" class="w-14 h-14 object-contain drop-shadow-lg">

                <span class="bg-pink-100 text-pink-700 px-3 py-1 rounded-full text-xs font-bold flex items-center gap-1">

                    <svg class="w-4 h-4 inline" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.18c.969 0 1.371 1.24.588 1.81l-3.388 2.46a1 1 0 00-.364 1.118l1.287 3.966c.3.922-.755 1.688-1.54 1.118l-3.388-2.46a1 1 0 00-1.175 0l-3.388 2.46c-.784.57-1.838-.196-1.54-1.118l1.287-3.966a1 1 0 00-.364-1.118L2.045 9.394c-.783-.57-.38-1.81.588-1.81h4.18a1 1 0 00.95-.69l1.286-3.967z"/></svg>

                    Intermediate

                </span>

            </div>

            <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-pink-600 transition-colors">Figma</h3>

            <div class="w-full bg-pink-100 rounded-full h-2 mb-2">

                <div class="bg-pink-400 h-2 rounded-full" style="width: 60%"></div>

            </div>

            <ul class="text-xs text-gray-600 space-y-1 mb-2">

                <li><span class="font-semibold text-pink-600">Interface Design</span> &bull; Intermediate</li>

                <li><span class="font-semibold text-pink-600">Prototyping</span> &bull; Intermediate</li>

                <li><span class="font-semibold text-pink-600">Design Systems</span> &bull; Basic</li>

            </ul>

        </div>

        <!-- VS Code -->

        <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300 border-t-4 border-indigo-400 overflow-hidden group relative">

            <div class="absolute -top-6 left-1/2 -translate-x-1/2 w-20 h-20 bg-indigo-200 rounded-full blur-2xl opacity-30"></div>

            <div class="flex items-center justify-between mb-4 relative z-10">

                <img src="{{ asset('images/icon/visualstudiocode.svg') }}" alt="VS Code" class="w-14 h-14 object-contain drop-shadow-lg">

                <span class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-xs font-bold flex items-center gap-1">

                    <svg class="w-4 h-4 inline" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.18c.969 0 1.371 1.24.588 1.81l-3.388 2.46a1 1 0 00-.364 1.118l1.287 3.966c.3.922-.755 1.688-1.54 1.118l-3.388-2.46a1 1 0 00-1.175 0l-3.388 2.46c-.784.57-1.838-.196-1.54-1.118l1.287-3.966a1 1 0 00-.364-1.118L2.045 9.394c-.783-.57-.38-1.81.588-1.81h4.18a1 1 0 00.95-.69l1.286-3.967z"/></svg>

                    Advanced

                </span>

            </div>

            <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-indigo-600 transition-colors">VS Code</h3>

            <div class="w-full bg-indigo-100 rounded-full h-2 mb-2">

                <div class="bg-indigo-500 h-2 rounded-full" style="width: 90%"></div>

            </div>

            <ul class="text-xs text-gray-600 space-y-1 mb-2">

                <li><span class="font-semibold text-indigo-600">Extensions</span> &bull; Advanced</li>

                <li><span class="font-semibold text-indigo-600">Debugging</span> &bull; Advanced</li>

                <li><span class="font-semibold text-indigo-600">Git Integration</span> &bull; Advanced</li>

                <li><span class="font-semibold text-indigo-600">Terminal</span> &bull; Advanced</li>

            </ul>

        </div>

    </div>



    <!-- Additional Skills -->

    <div class="mt-16 bg-gradient-to-r from-gray-50 to-blue-50 rounded-2xl p-8">

        <h2 class="text-2xl font-semibold mb-6 text-center">Additional Skills</h2>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">

            <div class="text-center">

                <div class="bg-white rounded-lg p-4 shadow-sm">

                    <h4 class="font-semibold text-gray-800">Database</h4>

                    <p class="text-sm text-gray-600">MySQL, SQLite</p>

                </div>

            </div>

            <div class="text-center">

                <div class="bg-white rounded-lg p-4 shadow-sm">

                    <h4 class="font-semibold text-gray-800">Deployment</h4>

                    <p class="text-sm text-gray-600">Shared Hosting, VPS</p>

                </div>

            </div>

            <div class="text-center">

                <div class="bg-white rounded-lg p-4 shadow-sm">

                    <h4 class="font-semibold text-gray-800">Testing</h4>

                    <p class="text-sm text-gray-600">PHPUnit, Manual Testing</p>

                </div>

            </div>

            <div class="text-center">

                <div class="bg-white rounded-lg p-4 shadow-sm">

                    <h4 class="font-semibold text-gray-800">Soft Skills</h4>

                    <p class="text-sm text-gray-600">Problem Solving, Team Work</p>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection



            <div class="w-full bg-pink-100 rounded-full h-2 mb-2">

                <div class="bg-pink-400 h-2 rounded-full" style="width: 80%"></div>

            </div>

            <ul class="text-xs text-gray-600 space-y-1 mb-2">

                <li><span class="font-semibold text-pink-600">Eloquent ORM</span> &bull; Advanced</li>

                <li><span class="font-semibold text-pink-600">Blade Templates</span> &bull; Advanced</li>

                <li><span class="font-semibold text-pink-600">Authentication</span> &bull; Advanced</li>

                <li><span class="font-semibold text-pink-600">API Development</span> &bull; Intermediate</li>

            </ul>

        </div>

        <!-- Tailwind CSS -->

        <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300 border-t-4 border-cyan-400 overflow-hidden group relative">

            <div class="absolute -top-6 left-1/2 -translate-x-1/2 w-20 h-20 bg-cyan-200 rounded-full blur-2xl opacity-30"></div>

            <div class="flex items-center justify-between mb-4 relative z-10">

                <img src="{{ asset('images/icon/tailwindcss.svg') }}" alt="Tailwind CSS" class="w-14 h-14 object-contain drop-shadow-lg">

                <span class="bg-cyan-100 text-cyan-700 px-3 py-1 rounded-full text-xs font-bold flex items-center gap-1">

                    <svg class="w-4 h-4 inline" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.18c.969 0 1.371 1.24.588 1.81l-3.388 2.46a1 1 0 00-.364 1.118l1.287 3.966c.3.922-.755 1.688-1.54 1.118l-3.388-2.46a1 1 0 00-1.175 0l-3.388 2.46c-.784.57-1.838-.196-1.54-1.118l1.287-3.966a1 1 0 00-.364-1.118L2.045 9.394c-.783-.57-.38-1.81.588-1.81h4.18a1 1 0 00.95-.69l1.286-3.967z"/></svg>

                    Advanced

                </span>

            </div>

            <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-cyan-600 transition-colors">Tailwind CSS</h3>

            <div class="w-full bg-cyan-100 rounded-full h-2 mb-2">

                <div class="bg-cyan-400 h-2 rounded-full" style="width: 80%"></div>

            </div>

            <ul class="text-xs text-gray-600 space-y-1 mb-2">

                <li><span class="font-semibold text-cyan-600">Utility Classes</span> &bull; Advanced</li>

                <li><span class="font-semibold text-cyan-600">Responsive Design</span> &bull; Advanced</li>

                <li><span class="font-semibold text-cyan-600">Custom Configuration</span> &bull; Intermediate</li>

                <li><span class="font-semibold text-cyan-600">Component Building</span> &bull; Advanced</li>

            </ul>

        </div>

    </div>



    <!-- Tools -->

    <h2 class="text-2xl font-bold mb-6 mt-12 flex items-center gap-2 justify-center">

        <span class="bg-sky-100 text-sky-800 px-3 py-1 rounded-full text-sm">Development Tools</span>

    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">

        <!-- Git -->

        <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300 border-t-4 border-orange-400 overflow-hidden group relative">

            <div class="absolute -top-6 left-1/2 -translate-x-1/2 w-20 h-20 bg-orange-200 rounded-full blur-2xl opacity-30"></div>

            <div class="flex items-center justify-between mb-4 relative z-10">

                <img src="{{ asset('images/icon/git.svg') }}" alt="Git" class="w-14 h-14 object-contain drop-shadow-lg">

                <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-xs font-bold flex items-center gap-1">

                    <svg class="w-4 h-4 inline" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.18c.969 0 1.371 1.24.588 1.81l-3.388 2.46a1 1 0 00-.364 1.118l1.287 3.966c.3.922-.755 1.688-1.54 1.118l-3.388-2.46a1 1 0 00-1.175 0l-3.388 2.46c-.784.57-1.838-.196-1.54-1.118l1.287-3.966a1 1 0 00-.364-1.118L2.045 9.394c-.783-.57-.38-1.81.588-1.81h4.18a1 1 0 00.95-.69l1.286-3.967z"/></svg>

                    Advanced

                </span>

            </div>

            <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-orange-600 transition-colors">Git</h3>

            <div class="w-full bg-orange-100 rounded-full h-2 mb-2">

                <div class="bg-orange-400 h-2 rounded-full" style="width: 80%"></div>

            </div>

            <ul class="text-xs text-gray-600 space-y-1 mb-2">

                <li><span class="font-semibold text-orange-600">Branching & Merging</span> &bull; Advanced</li>

                <li><span class="font-semibold text-orange-600">GitHub/GitLab</span> &bull; Advanced</li>

                <li><span class="font-semibold text-orange-600">Collaborative Work</span> &bull; Advanced</li>

            </ul>

        </div>

        <!-- Figma -->

        <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300 border-t-4 border-pink-400 overflow-hidden group relative">

            <div class="absolute -top-6 left-1/2 -translate-x-1/2 w-20 h-20 bg-pink-200 rounded-full blur-2xl opacity-30"></div>

            <div class="flex items-center justify-between mb-4 relative z-10">

                <img src="{{ asset('images/icon/figma.svg') }}" alt="Figma" class="w-14 h-14 object-contain drop-shadow-lg">

                <span class="bg-pink-100 text-pink-700 px-3 py-1 rounded-full text-xs font-bold flex items-center gap-1">

                    <svg class="w-4 h-4 inline" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.18c.969 0 1.371 1.24.588 1.81l-3.388 2.46a1 1 0 00-.364 1.118l1.287 3.966c.3.922-.755 1.688-1.54 1.118l-3.388-2.46a1 1 0 00-1.175 0l-3.388 2.46c-.784.57-1.838-.196-1.54-1.118l1.287-3.966a1 1 0 00-.364-1.118L2.045 9.394c-.783-.57-.38-1.81.588-1.81h4.18a1 1 0 00.95-.69l1.286-3.967z"/></svg>

                    Intermediate

                </span>

            </div>

            <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-pink-600 transition-colors">Figma</h3>

            <div class="w-full bg-pink-100 rounded-full h-2 mb-2">

                <div class="bg-pink-400 h-2 rounded-full" style="width: 60%"></div>

            </div>

            <ul class="text-xs text-gray-600 space-y-1 mb-2">

                <li><span class="font-semibold text-pink-600">Interface Design</span> &bull; Intermediate</li>

                <li><span class="font-semibold text-pink-600">Prototyping</span> &bull; Intermediate</li>

                <li><span class="font-semibold text-pink-600">Design Systems</span> &bull; Basic</li>

            </ul>

        </div>

        <!-- VS Code -->

        <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300 border-t-4 border-indigo-400 overflow-hidden group relative">

            <div class="absolute -top-6 left-1/2 -translate-x-1/2 w-20 h-20 bg-indigo-200 rounded-full blur-2xl opacity-30"></div>

            <div class="flex items-center justify-between mb-4 relative z-10">

                <img src="{{ asset('images/icon/visualstudiocode.svg') }}" alt="VS Code" class="w-14 h-14 object-contain drop-shadow-lg">

                <span class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-xs font-bold flex items-center gap-1">

                    <svg class="w-4 h-4 inline" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.18c.969 0 1.371 1.24.588 1.81l-3.388 2.46a1 1 0 00-.364 1.118l1.287 3.966c.3.922-.755 1.688-1.54 1.118l-3.388-2.46a1 1 0 00-1.175 0l-3.388 2.46c-.784.57-1.838-.196-1.54-1.118l1.287-3.966a1 1 0 00-.364-1.118L2.045 9.394c-.783-.57-.38-1.81.588-1.81h4.18a1 1 0 00.95-.69l1.286-3.967z"/></svg>

                    Advanced

                </span>

            </div>

            <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-indigo-600 transition-colors">VS Code</h3>

            <div class="w-full bg-indigo-100 rounded-full h-2 mb-2">

                <div class="bg-indigo-500 h-2 rounded-full" style="width: 90%"></div>

            </div>

            <ul class="text-xs text-gray-600 space-y-1 mb-2">

                <li><span class="font-semibold text-indigo-600">Extensions</span> &bull; Advanced</li>

                <li><span class="font-semibold text-indigo-600">Debugging</span> &bull; Advanced</li>

                <li><span class="font-semibold text-indigo-600">Git Integration</span> &bull; Advanced</li>

                <li><span class="font-semibold text-indigo-600">Terminal</span> &bull; Advanced</li>

            </ul>

        </div>

    </div>



    <!-- Additional Skills -->

    <div class="mt-16 bg-gradient-to-r from-gray-50 to-blue-50 rounded-2xl p-8">

        <h2 class="text-2xl font-semibold mb-6 text-center">Additional Skills</h2>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">

            <div class="text-center">

                <div class="bg-white rounded-lg p-4 shadow-sm">

                    <h4 class="font-semibold text-gray-800">Database</h4>

                    <p class="text-sm text-gray-600">MySQL, SQLite</p>

                </div>

            </div>

            <div class="text-center">

                <div class="bg-white rounded-lg p-4 shadow-sm">

                    <h4 class="font-semibold text-gray-800">Deployment</h4>

                    <p class="text-sm text-gray-600">Shared Hosting, VPS</p>

                </div>

            </div>

            <div class="text-center">

                <div class="bg-white rounded-lg p-4 shadow-sm">

                    <h4 class="font-semibold text-gray-800">Testing</h4>

                    <p class="text-sm text-gray-600">PHPUnit, Manual Testing</p>

                </div>

            </div>

            <div class="text-center">

                <div class="bg-white rounded-lg p-4 shadow-sm">

                    <h4 class="font-semibold text-gray-800">Soft Skills</h4>

                    <p class="text-sm text-gray-600">Problem Solving, Team Work</p>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection


