<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Sky Mews Cafe & Rooftop | Guwahati')</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Sacramento&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'pink-primary': '#f06292',
                        'pink-soft': '#fce4ec',
                        'pink-blush': '#f8bbd0',
                        'pink-rose': '#e91e63',
                        'pink-deep': '#ad1457',
                        'paper-cream': '#fcf8f5',
                        'paper-border': '#f3d4dc',
                    },
                    fontFamily: {
                        'playfair': ['"Playfair Display"', 'Georgia', 'serif'],
                        'script': ['"Sacramento"', 'cursive'],
                        'sans': ['"Plus Jakarta Sans"', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <link rel="stylesheet" href="{{ asset('css/papercut-theme.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-paper-cream text-stone-800 antialiased selection:bg-pink-blush selection:text-pink-deep">

    <!-- Paper Cut Ribbon Bar -->
    <div class="h-2.5 bg-gradient-to-r from-pink-300 via-pink-400 to-rose-400 relative overflow-hidden">
        <div class="absolute inset-0 opacity-40 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:8px_8px]"></div>
    </div>

    <!-- Sticky Navigation with Active States -->
    <nav class="paper-nav">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="w-12 h-12 bg-white rounded-full border-2 border-pink-blush shadow-md flex items-center justify-center p-1.5 transform group-hover:rotate-12 transition-transform duration-300">
                    <x-paper-flower class="w-full h-full" />
                </div>
                <div>
                    <span class="font-playfair text-2xl font-bold tracking-tight text-pink-deep block leading-tight">Sky Mews</span>
                    <span class="font-sans text-xs uppercase tracking-widest text-pink-400 font-semibold block">Cafe & Rooftop • Guwahati</span>
                </div>
            </a>

            <!-- Desktop Links for Every Tab -->
            <div class="hidden lg:flex items-center gap-7 font-sans text-sm font-medium">
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">Our Story</a>
                <a href="{{ route('ambiance') }}" class="nav-link {{ request()->routeIs('ambiance') ? 'active' : '' }}">Rooftop Ambiance</a>
                <a href="{{ route('menu') }}" class="nav-link {{ request()->routeIs('menu') ? 'active' : '' }}">Artisanal Menu</a>
                <a href="{{ route('instagram') }}" class="nav-link {{ request()->routeIs('instagram') ? 'active' : '' }}">Instagram Feed</a>
                <a href="{{ route('reviews') }}" class="nav-link {{ request()->routeIs('reviews') ? 'active' : '' }}">Reviews</a>
                <a href="{{ route('book') }}" class="paper-btn-primary !py-2.5 !px-5 text-xs tracking-wide">
                    <i class="fa-regular fa-calendar-check mr-1.5"></i> Book Table
                </a>
            </div>

            <!-- Mobile Hamburger Button -->
            <button id="mobile-menu-btn" class="lg:hidden text-pink-deep p-2 text-2xl focus:outline-none" aria-label="Toggle Navigation">
                <i class="fa-solid fa-bars-staggered"></i>
            </button>
        </div>

        <!-- Mobile Drawer -->
        <div id="mobile-menu" class="hidden lg:hidden bg-white/95 backdrop-blur-md border-b border-pink-100 px-6 py-4 space-y-3 font-sans font-medium text-sm">
            <a href="{{ route('home') }}" class="block py-2 text-stone-700 hover:text-pink-rose {{ request()->routeIs('home') ? 'text-pink-deep font-bold' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="block py-2 text-stone-700 hover:text-pink-rose {{ request()->routeIs('about') ? 'text-pink-deep font-bold' : '' }}">Our Story</a>
            <a href="{{ route('ambiance') }}" class="block py-2 text-stone-700 hover:text-pink-rose {{ request()->routeIs('ambiance') ? 'text-pink-deep font-bold' : '' }}">Rooftop Ambiance</a>
            <a href="{{ route('menu') }}" class="block py-2 text-stone-700 hover:text-pink-rose {{ request()->routeIs('menu') ? 'text-pink-deep font-bold' : '' }}">Artisanal Menu</a>
            <a href="{{ route('instagram') }}" class="block py-2 text-stone-700 hover:text-pink-rose {{ request()->routeIs('instagram') ? 'text-pink-deep font-bold' : '' }}">Instagram Feed</a>
            <a href="{{ route('reviews') }}" class="block py-2 text-stone-700 hover:text-pink-rose {{ request()->routeIs('reviews') ? 'text-pink-deep font-bold' : '' }}">Guest Reviews</a>
            <a href="{{ route('book') }}" class="block paper-btn-primary text-center !py-2.5 mt-2">Book Table Now</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="mt-28 bg-white relative border-t border-pink-200">
        <!-- Floating Floral Accents in Footer -->
        <div class="absolute -top-7 left-10 hidden sm:block">
            <x-paper-flower class="w-14 h-14 floating-petal opacity-85" />
        </div>
        <div class="absolute -top-8 right-16 hidden sm:block">
            <x-paper-branch class="w-16 h-16 floating-petal-slow opacity-85" />
        </div>

        <div class="max-w-7xl mx-auto px-6 pt-16 pb-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-pink-50 rounded-full flex items-center justify-center p-1 border border-pink-200">
                            <x-paper-flower class="w-full h-full" />
                        </div>
                        <h4 class="font-playfair text-xl font-bold text-pink-deep">Sky Mews</h4>
                    </div>
                    <p class="font-sans text-sm text-stone-600 leading-relaxed">
                        Guwahati's dreamiest rooftop cafe, wrapped in delicate pastel florals, handcrafted paper origami aesthetics, and panoramic sky lounge views.
                    </p>
                    <div class="flex items-center gap-3 pt-2">
                        <a href="https://www.instagram.com/skymews.ghy?lqvp=a2h2ZmU2YnJnajcz" target="_blank" class="w-9 h-9 rounded-full bg-pink-100 text-pink-rose flex items-center justify-center hover:bg-pink-rose hover:text-white transition-all shadow-sm">
                            <i class="fa-brands fa-instagram text-lg"></i>
                        </a>
                        <a href="https://wa.me/919864000000" target="_blank" class="w-9 h-9 rounded-full bg-pink-100 text-pink-rose flex items-center justify-center hover:bg-pink-rose hover:text-white transition-all shadow-sm">
                            <i class="fa-brands fa-whatsapp text-lg"></i>
                        </a>
                        <a href="https://maps.google.com" target="_blank" class="w-9 h-9 rounded-full bg-pink-100 text-pink-rose flex items-center justify-center hover:bg-pink-rose hover:text-white transition-all shadow-sm">
                            <i class="fa-solid fa-location-dot"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h5 class="font-playfair text-lg font-bold text-stone-800 mb-4 border-b border-pink-100 pb-2">Explore Pages</h5>
                    <ul class="font-sans text-sm space-y-2.5 text-stone-600">
                        <li><a href="{{ route('home') }}" class="hover:text-pink-rose transition-colors">✦ Homepage</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-pink-rose transition-colors">✦ Our Story & Design</a></li>
                        <li><a href="{{ route('ambiance') }}" class="hover:text-pink-rose transition-colors">✦ Rooftop Ambiance & Photo Spots</a></li>
                        <li><a href="{{ route('menu') }}" class="hover:text-pink-rose transition-colors">✦ Artisanal Food & Drinks Menu</a></li>
                        <li><a href="{{ route('instagram') }}" class="hover:text-pink-rose transition-colors">✦ Instagram Live Wall (@skymews.ghy)</a></li>
                        <li><a href="{{ route('reviews') }}" class="hover:text-pink-rose transition-colors">✦ Guest Reviews & Ratings</a></li>
                    </ul>
                </div>

                <div>
                    <h5 class="font-playfair text-lg font-bold text-stone-800 mb-4 border-b border-pink-100 pb-2">Cafe Hours & Location</h5>
                    <p class="font-sans text-sm text-stone-600 mb-2 font-semibold text-pink-deep">
                        <i class="fa-regular fa-clock text-pink-rose mr-1.5"></i> Daily: 12:30 PM – 11:00 PM
                    </p>
                    <p class="font-sans text-sm text-stone-600 leading-relaxed">
                        <i class="fa-solid fa-location-dot text-pink-rose mr-1.5"></i> Dr Bhabendra Nath Saikia Road, Wireless, Beltola, Guwahati, Assam 781028
                    </p>
                    <div class="mt-4 p-3 bg-pink-50/70 border border-pink-200 rounded-xl text-xs text-stone-600">
                        <span class="font-semibold text-pink-rose">Sunset Hour:</span> 4:30 PM – 6:30 PM for magical golden rooftop lights.
                    </div>
                </div>

                <div>
                    <h5 class="font-playfair text-lg font-bold text-stone-800 mb-4 border-b border-pink-100 pb-2">Connect with Us</h5>
                    <p class="font-sans text-sm text-stone-600 mb-3">
                        Tag your cafe reels & photos with <span class="font-semibold text-pink-rose">#SkyMewsGuwahati</span> to be featured on our social wall!
                    </p>
                    <a href="https://www.instagram.com/skymews.ghy?lqvp=a2h2ZmU2YnJnajcz" target="_blank" class="paper-btn-outline w-full text-center text-sm py-2">
                        <i class="fa-brands fa-instagram"></i> Follow @skymews.ghy
                    </a>
                </div>
            </div>

            <div class="mt-12 pt-6 border-t border-pink-100 flex flex-col sm:flex-row items-center justify-between text-xs text-stone-500 font-sans">
                <p>© {{ date('Y') }} Sky Mews Cafe & Restaurant. Handcrafted with love & floral paper-cut design.</p>
                <p class="mt-2 sm:mt-0 flex items-center gap-1">
                    Made for Guwahati's foodies & dreamers <span class="text-pink-rose">♥</span>
                </p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/cafe-app.js') }}"></script>
</body>
</html>
