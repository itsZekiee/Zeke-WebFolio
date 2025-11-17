<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Zeke WebFolio</title>

    {{-- Custom Style --}}
    @vite('resources/css/app.css')
    {{-- Remix Icons CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">

</head>

<body class="min-h-screen antialiased">
<!-- Header / Navigation -->
<header class="sticky top-0 z-50 glass-effect">
    <div class="max-w-7xl mx-auto px-6 py-5 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <img src="{{ asset('assets/Z-Developers Logo (Circle).png') }}" alt="Zeke Logo" class="w-12 h-12 rounded-2xl object-cover">
            <div class="text-white">
                <div class="font-bold tracking-tight text-base">Z DEVELOPERS</div>
                <div class="text-xs text-white/50">by Zekieee</div>
            </div>
        </div>

        <nav class="hidden md:flex items-center justify-center flex-1">
            <ul class="flex gap-12 text-sm font-medium text-white/70">
                <li><a href="#home" class="hover:text-white transition-colors">Home</a></li>
                <li><a href="#about" class="hover:text-white transition-colors">About</a></li>
                <li><a href="#services" class="hover:text-white transition-colors">Services</a></li>
                <li><a href="#projects" class="hover:text-white transition-colors">Projects</a></li>
                <li><a href="#contact" class="hover:text-white transition-colors">Contact</a></li>
            </ul>
        </nav>

        <div class="hidden md:flex items-center gap-4">
            <a href="#contact" class="btn-primary">Let's Talk</a>
        </div>

        <div class="md:hidden">
            <button class="p-2 rounded-xl glass-effect">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>
</header>

<main id="home" class="relative z-10">
    <!-- Home Section -->
    <section class="min-h-[95vh] max-w-7xl mx-auto px-6 flex flex-col-reverse lg:flex-row items-center gap-16 pt-12">
        <div class="w-full lg:w-1/2">
            <div class="max-w-2xl">
                <div class="badge mb-6">
                    <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                    Available for freelance
                </div>

                <h1 class="hero-title mb-6">
                    <span class="block text-white mb-2">Building Digital</span>
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-[#B07CF0] via-[#923CB5] to-[#6C2EB5]">
                        Experiences That Matter
                    </span>
                </h1>

                <p class="hero-subheading mb-10 max-w-xl">
                    Junior Front-End Developer with 6+ years crafting scalable web solutions and custom applications.
                    Specializing in clean architecture and strategic digital products.
                </p>

                <div class="flex items-center gap-4 mb-12">
                    <a href="#contact" class="btn-primary">Start a Project</a>
                    <a href="{{ asset('assets/CV Resume.pdf') }}" class="btn-secondary" target="_blank" rel="noopener noreferrer">
                        View Resume
                    </a>
                </div>

                <div class="flex items-center gap-4">
                    <a class="social-icon" href="mailto:habee2004@gmail.com" aria-label="Email" target="_blank" rel="noopener noreferrer">
                        <i class="ri-mail-line text-lg text-white/70"></i>
                    </a>
                    <a class="social-icon" href="https://www.linkedin.com/in/your-profile" aria-label="LinkedIn" target="_blank" rel="noopener noreferrer">
                        <i class="ri-linkedin-box-fill text-lg text-white/70"></i>
                    </a>
                    <a class="social-icon" href="https://github.com/itsZekiee" aria-label="GitHub" target="_blank" rel="noopener noreferrer">
                        <i class="ri-github-fill text-lg text-white/70"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="w-full lg:w-1/2 flex justify-center lg:justify-end">
            <div class="portrait-frame w-[340px] h-[460px] floating">
                <img src="{{ asset('assets/profileOne.jpg') }}" alt="Zeke portrait" class="w-full h-full object-cover">
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="min-h-[95vh] max-w-7xl mx-auto px-6 flex flex-col justify-center py-20">
        <div class="w-full">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Left Column - Image -->
                <div class="order-2 lg:order-1">
                    <div class="relative">
                        <div class="portrait-frame w-full max-w-[500px] h-[600px] mx-auto lg:mx-0">
                            <img src="{{ asset('assets/profileTwo.jpg') }}" alt="Zeke profile" class="w-full h-full object-cover">
                        </div>
                        <!-- Decorative element -->
                        <div class="absolute -bottom-6 -right-6 w-48 h-48 bg-gradient-to-br from-[#923CB5]/20 to-[#6C2EB5]/20 rounded-3xl -z-10 hidden lg:block"></div>
                    </div>
                </div>

                <!-- Right Column - Content -->
                <div class="order-1 lg:order-2">
                    <div class="section-tag">ABOUT ME</div>
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">
                        Passionate About
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-[#B07CF0] to-[#923CB5]">
                        Crafting Solutions
                    </span>
                    </h2>

                    <div class="space-y-4 text-white/70 leading-relaxed mb-8">
                        <p>
                            I am a highly motivated developer and strategic problem-solver, bringing six years of practical,
                            project-focused freelance experience to the table. While specializing in front-end development
                            (HTML/CSS, JavaScript, Angular), I possess valuable cross-functional skills.
                        </p>
                        <p>
                            My expertise extends to backend development with PHP, Laravel, and MySQL, along with
                            object-oriented programming using Java and C#. I am comfortable working across Windows and Linux
                            environments and actively apply my foundational knowledge in web exploitation to build more
                            secure applications.
                        </p>
                    </div>

                    <!-- Tech Stack -->
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold text-white mb-4">Core Technologies</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="badge">HTML/CSS</span>
                            <span class="badge">JavaScript</span>
                            <span class="badge">Angular</span>
                            <span class="badge">PHP</span>
                            <span class="badge">Laravel</span>
                            <span class="badge">MySQL</span>
                            <span class="badge">Java</span>
                            <span class="badge">C#</span>
                        </div>
                    </div>

                    <!-- Platforms -->
                    <div class="mb-10">
                        <h3 class="text-lg font-semibold text-white mb-4">Platforms</h3>
                        <div class="flex flex-wrap gap-2">
                        <span class="badge">
                            <i class="ri-windows-fill"></i>
                            Windows
                        </span>
                            <span class="badge">
                            <i class="ri-terminal-box-line"></i>
                            Linux
                        </span>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <a href="#contact" class="btn-primary">Get In Touch</a>
                        <a href="#projects" class="btn-secondary">View Projects</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="min-h-[95vh] max-w-7xl mx-auto px-6 flex flex-col justify-center py-20">
        <div class="w-full">
            <div class="max-w-3xl mb-16">
                <div class="section-tag">SERVICES</div>
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">What I Do Best</h2>
                <p class="text-lg text-white/60 leading-relaxed">
                    Delivering end-to-end digital solutions from concept to deployment,
                    with a focus on performance and user experience.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                <div class="service-card active">
                    <div class="flex items-start justify-between mb-4">
                        <div class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-[#B07CF0] to-[#923CB5]">01</div>
                        <i class="ri-arrow-right-up-line text-2xl text-white/40"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Responsive &amp; Dynamic Website</h3>
                    <p class="text-white/60 leading-relaxed">
                        Modern, mobile-first websites that adapt seamlessly to every device.
                        Fast, interactive UIs combined with server-side optimizations for reliable production performance.
                    </p>
                </div>

                <div class="service-card">
                    <div class="flex items-start justify-between mb-4">
                        <div class="text-3xl font-bold text-white/30">02</div>
                        <i class="ri-arrow-right-up-line text-2xl text-white/40"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">UI/UX</h3>
                    <p class="text-white/60 leading-relaxed">
                        User-centered interfaces and interaction design focused on clarity, accessibility, and conversion.
                        Wireframes, prototypes, and visual polish to create delightful user experiences.
                    </p>
                </div>

                <div class="service-card">
                    <div class="flex items-start justify-between mb-4">
                        <div class="text-3xl font-bold text-white/30">03</div>
                        <i class="ri-arrow-right-up-line text-2xl text-white/40"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Software Developement build in C# C and Java Kotlin</h3>
                    <p class="text-white/60 leading-relaxed">
                        Robust desktop and backend solutions built with C\#, C, Java and Kotlin.
                        Emphasis on maintainable architecture, strong typing, and reliable performance for enterprise and custom tools.
                    </p>
                </div>

                <div class="service-card">
                    <div class="flex items-start justify-between mb-4">
                        <div class="text-3xl font-bold text-white/30">04</div>
                        <i class="ri-arrow-right-up-line text-2xl text-white/40"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">System Consultation</h3>
                    <p class="text-white/60 leading-relaxed">
                        Expert analysis and strategic guidance to evaluate, design, and optimize your systems.
                        Services include architecture reviews, performance tuning, security assessments, integration planning,
                        and a practical roadmap to align technology with business objectives.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="min-h-[95vh] max-w-7xl mx-auto px-6 flex flex-col justify-center py-20">
        <div class="w-full">
            <div class="max-w-3xl mb-16">
                <div class="section-tag">PORTFOLIO</div>
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">Selected Works</h2>
                <p class="text-lg text-white/60 leading-relaxed">
                    A showcase of recent projects that demonstrate technical expertise and creative problem-solving.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <a href="https://github.com/itsZekiee/Secure-Vote-Ph-Capstone-Project.git" target="_blank" rel="noopener noreferrer"
                   class="project-card group">
                    <div class="aspect-[4/3] overflow-hidden bg-gradient-to-br from-purple-900/20 to-blue-900/20">
                        <img src="{{ asset('assets/project-card(4).jpg') }}" alt="Secure Vote" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-xs font-medium text-[#923CB5]">Voting Platform</span>
                            <i class="ri-arrow-right-up-line text-white/40 group-hover:text-[#923CB5] transition-colors"></i>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2">Secure Vote</h3>
                        <p class="text-sm text-white/50 leading-relaxed">
                            Blockchain-based secure voting system with real-time results.
                        </p>
                    </div>
                </a>

                <a href="https://github.com/itsZekiee/Makoo-Cafe-Website.git" target="_blank" rel="noopener noreferrer"
                   class="project-card group">
                    <div class="aspect-[4/3] overflow-hidden bg-gradient-to-br from-amber-900/20 to-orange-900/20">
                        <img src="{{ asset('assets/project-card(3).jpg') }}" alt="Makoo Cafe" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-xs font-medium text-[#923CB5]">Restaurant</span>
                            <i class="ri-arrow-right-up-line text-white/40 group-hover:text-[#923CB5] transition-colors"></i>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2">Makoo Cafe</h3>
                        <p class="text-sm text-white/50 leading-relaxed">
                            Modern cafe website with online ordering system.
                        </p>
                    </div>
                </a>

                <a href="https://github.com/itsZekiee/Bote-by-BeanHe-E-Commerce-Website.git" target="_blank" rel="noopener noreferrer"
                   class="project-card group">
                    <div class="aspect-[4/3] overflow-hidden bg-gradient-to-br from-green-900/20 to-teal-900/20">
                        <img src="{{ asset('assets/project-card(2).jpg') }}" alt="Bote by BeanHe" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-xs font-medium text-[#923CB5]">E-Commerce</span>
                            <i class="ri-arrow-right-up-line text-white/40 group-hover:text-[#923CB5] transition-colors"></i>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2">Bote by BeanHe</h3>
                        <p class="text-sm text-white/50 leading-relaxed">
                            Full-featured online store with payment integration.
                        </p>
                    </div>
                </a>

                <a href="https://github.com/itsZekiee/Medical-Appointment-Website.git" target="_blank" rel="noopener noreferrer"
                   class="project-card group">
                    <div class="aspect-[4/3] overflow-hidden bg-gradient-to-br from-blue-900/20 to-indigo-900/20">
                        <img src="{{ asset('assets/project-card(1).jpg') }}" alt="Medical Appointment" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-xs font-medium text-[#923CB5]">Healthcare</span>
                            <i class="ri-arrow-right-up-line text-white/40 group-hover:text-[#923CB5] transition-colors"></i>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2">Medical Portal</h3>
                        <p class="text-sm text-white/50 leading-relaxed">
                            Patient booking system with calendar integration.
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="min-h-[95vh] max-w-7xl mx-auto px-6 flex flex-col justify-center py-20">
        <div class="w-full">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Left Column - Contact Info -->
                <div>
                    <div class="section-tag">GET IN TOUCH</div>
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">
                        Let's Build
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-[#B07CF0] to-[#923CB5]">
                        Something Together
                    </span>
                    </h2>

                    <p class="text-lg text-white/60 leading-relaxed mb-8">
                        Have a project in mind or just want to chat? I'm always open to discussing new opportunities,
                        creative ideas, or partnerships.
                    </p>

                    <!-- Contact Details -->
                    <div class="space-y-6 mb-10">
                        <div class="flex items-start gap-4">
                            <div class="social-icon">
                                <i class="ri-mail-line text-lg text-white/70"></i>
                            </div>
                            <div>
                                <h3 class="text-white font-semibold mb-1">Email</h3>
                                <a href="mailto:habee2004@gmail.com" class="text-white/60 hover:text-[#923CB5] transition-colors">
                                    habee2004@gmail.com
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="social-icon">
                                <i class="ri-map-pin-line text-lg text-white/70"></i>
                            </div>
                            <div>
                                <h3 class="text-white font-semibold mb-1">Location</h3>
                                <p class="text-white/60">Santa Maria, Bulacan, Philippines</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="social-icon">
                                <i class="ri-time-line text-lg text-white/70"></i>
                            </div>
                            <div>
                                <h3 class="text-white font-semibold mb-1">Response Time</h3>
                                <p class="text-white/60">Within 24 hours</p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Links -->
                    <div>
                        <h3 class="text-white font-semibold mb-4">Follow Me</h3>
                        <div class="flex items-center gap-3">
                            <a class="social-icon" href="mailto:habee2004@gmail.com" aria-label="Email" target="_blank" rel="noopener noreferrer">
                                <i class="ri-mail-line text-lg text-white/70"></i>
                            </a>
                            <a class="social-icon" href="https://www.linkedin.com/in/your-profile" aria-label="LinkedIn" target="_blank" rel="noopener noreferrer">
                                <i class="ri-linkedin-box-fill text-lg text-white/70"></i>
                            </a>
                            <a class="social-icon" href="https://github.com/itsZekiee" aria-label="GitHub" target="_blank" rel="noopener noreferrer">
                                <i class="ri-github-fill text-lg text-white/70"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Contact Form -->
                <div class="glass-effect rounded-2xl p-8">
                    <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
                        @csrf

                        <div>
                            <label for="name" class="block text-sm font-medium text-white/80 mb-2">Your Name</label>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                class="input-field"
                                placeholder="John Doe"
                                required
                            >
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-white/80 mb-2">Email Address</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                class="input-field"
                                placeholder="john@example.com"
                                required
                            >
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-white/80 mb-2">Subject</label>
                            <input
                                type="text"
                                id="subject"
                                name="subject"
                                class="input-field"
                                placeholder="Project Inquiry"
                                required
                            >
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-white/80 mb-2">Message</label>
                            <textarea
                                id="message"
                                name="message"
                                class="input-field"
                                placeholder="Tell me about your project..."
                                required
                            ></textarea>
                        </div>

                        <button type="submit" class="btn-primary w-full flex items-center justify-center gap-2">
                            <span>Send Message</span>
                            <i class="ri-send-plane-fill"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="border-t border-white/5 py-8">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('assets/Z-Developers Logo (Circle).png') }}" alt="Zeke Logo" class="w-10 h-10 rounded-xl object-cover">
                    <div class="text-white/60 text-sm">
                        © 2025 Z Developers. All rights reserved.
                    </div>
                </div>

                <nav class="flex flex-wrap items-center gap-4 text-sm">
                    <a href="/docs" class="text-white/60 hover:text-white transition-colors">Documentation</a>
                    <a href="/consulting-pricing" class="text-white/60 hover:text-white transition-colors">Consultation Pricing</a>
                    <a href="#" class="text-white/60 hover:text-white transition-colors">Privacy Policy</a>
                </nav>
            </div>
        </div>
    </footer>
</main>
</body>
</html>
