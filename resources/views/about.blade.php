@extends('layouts.app')

@section('content')
<!-- HERO SECTION -->
<section class="py-20 bg-gradient-to-br from-blue-50 to-white">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-16" data-aos="fade-up">
            <h1 class="text-4xl md:text-6xl font-bold text-blue-900 mb-4">About Me</h1>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-blue-700 mx-auto mb-4"></div>
            <p class="text-xl text-blue-700 max-w-3xl mx-auto">Passionate web developer ready to contribute to meaningful projects</p>
        </div>
    </div>
</section>

<!-- MAIN CONTENT -->
<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- PHOTO & PERSONAL INFO -->
            <div class="space-y-8" data-aos="fade-right">
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-blue-600 rounded-2xl blur-xl opacity-20"></div>
                    <img src="{{ asset('images/rafly.jpg.jpeg') }}" alt="Rafly Juliano" class="relative w-80 h-80 mx-auto rounded-2xl shadow-2xl object-cover">
                </div>
                
                <div class="text-center lg:text-left">
                    <h2 class="text-3xl font-bold text-blue-900 mb-2">Rafly Juliano</h2>
                    <p class="text-xl text-blue-600 mb-4">Web Developer</p>
                    <div class="flex justify-center lg:justify-start gap-4">
                        <a href="https://github.com/raflyjuliano" target="_blank" class="text-blue-600 hover:text-black text-2xl transition"><i class="fab fa-github"></i></a>
                        <a href="https://linkedin.com/in/raflyjuliano" target="_blank" class="text-blue-600 hover:text-[#0A66C2] text-2xl transition"><i class="fab fa-linkedin"></i></a>
                        <a href="mailto:raflyjuliano62@gmail.com" class="text-blue-600 hover:text-[#EA4335] text-2xl transition"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>

            <!-- STORY & SKILLS -->
            <div class="space-y-8" data-aos="fade-left">
                <!-- My Story -->
                <div>
                    <h3 class="text-2xl font-bold text-blue-900 mb-4">My Story</h3>
                    <p class="text-blue-800 leading-relaxed mb-4">
                        I am a passionate web developer who creates websites that are not only beautiful, 
                        but also functional and user-friendly. With experience in Laravel and Tailwind CSS, 
                        I'm ready to contribute to challenging development projects.
                    </p>
                    <p class="text-blue-800 leading-relaxed">
                        I'm open to various opportunities - whether it's internships, freelance projects, or full-time positions. 
                        I believe that with solid skills and a passion for learning, I can provide significant value 
                        to development teams and the projects I work on.
                    </p>
                </div>

                <!-- Key Skills -->
                <div>
                    <h3 class="text-2xl font-bold text-blue-900 mb-4">Key Skills</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-blue-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-blue-800 mb-2">Backend Development</h4>
                            <p class="text-blue-700 text-sm">Laravel, PHP, MySQL, API Development</p>
                        </div>
                        <div class="bg-blue-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-blue-800 mb-2">Frontend Development</h4>
                            <p class="text-blue-700 text-sm">HTML, CSS, JavaScript, Tailwind CSS</p>
                        </div>
                        <div class="bg-blue-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-blue-800 mb-2">Tools & Version Control</h4>
                            <p class="text-blue-700 text-sm">Git, GitHub, VS Code, Composer</p>
                        </div>
                        <div class="bg-blue-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-blue-800 mb-2">Soft Skills</h4>
                            <p class="text-blue-700 text-sm">Problem Solving, Team Work, Fast Learning</p>
                        </div>
    </div>
        </div>

                <!-- Goals -->
                <div>
                    <h3 class="text-2xl font-bold text-blue-900 mb-4">Goals & Aspirations</h3>
                    <p class="text-blue-800 leading-relaxed mb-4">
                        I am committed to continuously learning and developing my skills in web development. 
                        My goal is to become a proficient full-stack developer and contribute to 
                        projects that have a positive impact on society.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CALL TO ACTION -->
<section class="py-20 bg-gradient-to-br from-blue-600 to-blue-800 text-white">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Work Together?</h2>
        <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
            I'm ready to contribute to development projects and take on challenging opportunities. 
            Let's discuss how I can help with your project!
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#contact" class="bg-white text-blue-600 hover:bg-blue-50 px-8 py-3 rounded-full font-semibold shadow-lg hover:shadow-xl transition-all duration-200">
                Get In Touch
            </a>
            <a href="{{ asset('cv/CV-RaflyJuliano..pdf') }}" download class="border-2 border-white text-white hover:bg-white hover:text-blue-600 px-8 py-3 rounded-full font-semibold transition-all duration-200">
                Download CV
            </a>
        </div>
    </div>
</section>
@endsection

@section('title', 'About Me - Rafly Juliano')
@section('meta_description', 'About Rafly Juliano, a passionate web developer ready to contribute to meaningful development projects.')
@section('og_title', 'About Me - Rafly Juliano')
@section('og_description', 'About Rafly Juliano, a passionate web developer ready to contribute to meaningful development projects.')
