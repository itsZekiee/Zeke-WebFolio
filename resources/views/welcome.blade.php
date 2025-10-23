<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Z Developers | ZEKE Portfolio</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- Tailwind Play CDN config -->
    <script>
        window.tailwind = {
            config: {
                theme: {
                    extend: {
                        colors: {
                            primary: '#0ea5a4'
                        },
                        fontFamily: {
                            sans: ['Inter', 'ui-sans-serif', 'system-ui', '-apple-system', 'Segoe UI', 'Roboto', 'Helvetica', 'Arial']
                        }
                    }
                }
            }
        }
    </script>
    </head>

<body class="antialiased bg-gray-50 text-gray-800 font-sans">

    <!-- Navigation Section -->
    <header x-data="{ open: false, scrolled: false }"
            @scroll.window="scrolled = (window.scrollY > 10)"
            class="fixed top-0 left-0 w-full z-50 shadow-md transition-all duration-300"
            x-bind:class="scrolled ? 'bg-white/90 backdrop-blur-sm' : 'bg-white'">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">

                <div class="flex-shrink-0">
                    <a href="#home" class="block">
                        <h3 class="text-xl font-bold text-gray-900">
                            Z Developers
                            <span class="block italic text-xs font-normal text-gray-600">by Zekieee</span>
                        </h3>
                    </a>
                </div>

                <nav class="hidden md:flex space-x-8">
                    <a href="#home" class="font-medium text-gray-600 hover:text-primary transition-colors duration-200">Home</a>
                    <a href="#about" class="font-medium text-gray-600 hover:text-primary transition-colors duration-200">About</a>
                    <a href="#project" class="font-medium text-gray-600 hover:text-primary transition-colors duration-200">Project</a>
                    <a href="#contact" class="font-medium text-gray-600 hover:text-primary transition-colors duration-200">Contact</a>
                </nav>

                <div class="md:hidden">
                    <button @click="open = !open" class="text-gray-600 hover:text-primary focus:outline-none">
                        <span class="sr-only">Open main menu</span>
                        <svg x-show="!open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                        <svg x-show="open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>

        <div x-show="open"
             @click.away="open = false"
             class="md:hidden bg-white shadow-lg"
             style="display: none;">
            <div class="pt-2 pb-4 space-y-1">
                <a href="#home" @click="open = false" class="block px-4 py-2 text-base font-medium text-gray-600 hover:bg-gray-100 hover:text-primary">Home</a>
                <a href="#about" @click="open = false" class="block px-4 py-2 text-base font-medium text-gray-600 hover:bg-gray-100 hover:text-primary">About</a>
                <a href="#project" @click="open = false" class="block px-4 py-2 text-base font-medium text-gray-600 hover:bg-gray-100 hover:text-primary">Project</a>
                <a href="#contact" @click="open = false" class="block px-4 py-2 text-base font-medium text-gray-600 hover:bg-gray-100 hover:text-primary">Contact</a>
            </div>
        </div>
    </header>

    <section id="home" class="min-h-screen flex items-center justify-center pt-16">
        <h2 class="text-4xl font-semibold">Home</h2>
    </section>

        <section id="about" class="min-h-screen flex items-center justify-center">
            <h2 class="text-4xl font-semibold">About</h2>
        </section>

        <section id="project" class="min-h-screen flex items-center justify-center">
            <h2 class="text-4xl font-semibold">Project</h2>
        </section>

        <section id="contact" class="min-h-screen flex items-center justify-center">
            <h2 class="text-4xl font-semibold">Contact</h2>
        </section>

        <!-- Footer -->
        <footer class="bg-gradient-to-b from-[#1B1B1B] to-[#003153] text-gray-300 py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">

                <div>
                    <h3 class="text-xl font-bold text-white">
                        Z Developers
                        <span class="block italic text-xs font-normal text-gray-400">by Zekieee</span>
                    </h3>
                    <p class="mt-2 text-gray-400">
                        Crafting digital experiences and building robust software solutions. Passionate about clean code and innovative technology.
                    </p>
                    <div class="mt-4 flex space-x-5">
                        <a href="mailto:your-email@example.com" class="text-gray-400 hover:text-primary transition-colors duration-200" aria-label="Google">
                            <i class="fab fa-google fa-lg"></i>
                        </a>
                        <a href="https://github.com/your-username" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-primary transition-colors duration-200" aria-label="GitHub">
                            <i class="fab fa-github fa-lg"></i>
                        </a>
                        <a href="https://linkedin.com/in/your-profile" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-primary transition-colors duration-200" aria-label="LinkedIn">
                            <i class="fab fa-linkedin fa-lg"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h4 class="text-lg font-semibold text-white">Services</h4>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#" class="hover:text-primary transition-colors duration-200">Web Services</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors duration-200">UI/UX Design</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors duration-200">Software Development</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors duration-200">Consulting</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-semibold text-white">Contact Information</h4>
                    <ul class="mt-4 space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-envelope mt-1 mr-3 w-4 text-center text-primary"></i>
                            <a href="mailto:habee2004@gmail.com" class="hover:text-primary transition-colors duration-200">habee2004@gmail.com</a>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-phone mt-1 mr-3 w-4 text-center text-primary"></i>
                            <span>(+63) 965 201 2720</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-3 w-4 text-center text-primary"></i>
                            <span>Santa Maria, Bulacan, Philippines 3022</span>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="mt-8 pt-8 border-t border-gray-700 text-center">
                <p class="text-sm text-gray-500">
                    &copy; 2025 Z Developers. All rights reserved.
                </p>
            </div>
        </footer>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
