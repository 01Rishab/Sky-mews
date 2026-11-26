@extends('layouts.app')

@section('title', 'Sky Mews Cafe & Rooftop | Guwahati')

@section('content')
    <!-- Hero Section -->
    <header class="relative pt-12 pb-24 md:py-28 overflow-hidden">
        <!-- Floating Floral Paper Elements -->
        <div class="absolute -top-10 left-5 md:left-20 opacity-80 pointer-events-none">
            <x-paper-flower class="w-24 h-24 md:w-36 md:h-36 floating-petal" />
        </div>
        <div class="absolute top-1/3 -right-8 md:right-16 opacity-75 pointer-events-none">
            <x-paper-branch class="w-28 h-28 md:w-44 md:h-44 floating-petal-slow" />
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Left Column: Typography & Story -->
                <div class="lg:col-span-7 space-y-6 text-center lg:text-left reveal-fade-left">
                    <div class="inline-flex items-center gap-2 paper-badge">
                        <i class="fa-solid fa-sparkles text-pink-500"></i>
                        <span>Guwahati's Premier Rooftop Cafe & Lounge</span>
                    </div>

                    <h1 class="font-playfair text-4xl sm:text-6xl lg:text-7xl font-bold tracking-tight text-stone-900 leading-[1.12]">
                        Where Petals, Flavors & <span class="text-pink-deep italic font-normal font-script text-5xl sm:text-7xl lg:text-8xl">Sky</span> Collide.
                    </h1>

                    <p class="font-sans text-stone-600 text-base sm:text-lg max-w-xl mx-auto lg:mx-0 leading-relaxed">
                        Step into a floral paper-art wonderland situated high above Dr Bhabendra Nath Saikia Road, Wireless, Beltola. Indulge in artisanal coolers, authentic Pan-Asian dimsums, and rich North Indian tandoor delicacies with breathtaking sunset sky views.
                    </p>

                    <!-- CTA Buttons -->
                    <div class="pt-4 flex flex-wrap items-center justify-center lg:justify-start gap-4">
                        <a href="{{ route('menu') }}" class="paper-btn-primary">
                            <i class="fa-solid fa-book-open"></i> Explore Full Menu
                        </a>
                        <a href="{{ route('book') }}" class="paper-btn-outline">
                            <i class="fa-regular fa-calendar-check"></i> Book A Table
                        </a>
                        <a href="https://www.instagram.com/skymews.ghy?lqvp=a2h2ZmU2YnJnajcz" target="_blank" class="paper-btn-outline !px-4 text-pink-rose" title="Follow us on Instagram">
                            <i class="fa-brands fa-instagram text-xl"></i>
                        </a>
                    </div>

                    <!-- Mini Highlights Badges -->
                    <div class="pt-6 grid grid-cols-3 gap-4 border-t border-pink-200/80 max-w-lg mx-auto lg:mx-0 text-stone-700">
                        <div class="text-center lg:text-left">
                            <span class="block font-playfair text-2xl font-bold text-pink-deep">4.8 ★</span>
                            <span class="block font-sans text-xs text-stone-500 uppercase tracking-wider">Top Rated Ambience</span>
                        </div>
                        <div class="text-center lg:text-left">
                            <span class="block font-playfair text-2xl font-bold text-pink-deep">Rooftop</span>
                            <span class="block font-sans text-xs text-stone-500 uppercase tracking-wider">Panoramic Sky View</span>
                        </div>
                        <div class="text-center lg:text-left">
                            <span class="block font-playfair text-2xl font-bold text-pink-deep">Multi</span>
                            <span class="block font-sans text-xs text-stone-500 uppercase tracking-wider">Asian & Indian Cuisine</span>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Real Generated Rooftop Photo Card -->
                <div class="lg:col-span-5 relative flex justify-center reveal-fade-right">
                    <div class="absolute -top-6 -right-6 w-full h-full bg-pink-200/50 rounded-3xl -rotate-3 border border-pink-300/40 pointer-events-none"></div>
                    <div class="absolute -bottom-4 -left-4 w-full h-full bg-rose-100/60 rounded-3xl rotate-3 border border-pink-300/40 pointer-events-none"></div>

                    <!-- Main Hero Paper Card -->
                    <div class="paper-card p-4 md:p-6 bg-white relative z-10 w-full max-w-md border-2 border-pink-200 shadow-2xl rounded-3xl">
                        <!-- Top Tag -->
                        <div class="flex items-center justify-between pb-3 px-2 border-b border-pink-100">
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 rounded-full bg-pink-400 animate-ping"></span>
                                <span class="font-sans text-xs font-bold text-pink-deep uppercase tracking-wider">Now Welcoming Guests</span>
                            </div>
                            <span class="font-sans text-xs text-stone-400">Wireless, Beltola</span>
                        </div>

                        <!-- Real Generated Sunset Rooftop Image -->
                        <div class="my-4 relative rounded-2xl overflow-hidden border border-pink-200 shadow-md group">
                            <img src="{{ asset('images/hero/rooftop-sunset.jpg') }}" alt="Sky Mews Rooftop Cafe Guwahati" class="w-full h-64 object-cover transform group-hover:scale-105 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-stone-950/70 via-transparent to-transparent flex flex-col justify-end p-4 text-white">
                                <span class="font-sans text-xs uppercase tracking-widest text-pink-300 font-semibold">Sky Lounge Sunset</span>
                                <h4 class="font-playfair text-xl font-bold">Panoramic Guwahati Skyline</h4>
                            </div>
                        </div>

                        <!-- Direct Instagram Profile Link -->
                        <a href="https://www.instagram.com/skymews.ghy?lqvp=a2h2ZmU2YnJnajcz" target="_blank" class="block p-3 rounded-xl bg-pink-50/80 border border-pink-200 hover:bg-pink-100/70 transition-colors group">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-amber-400 via-rose-500 to-purple-600 p-0.5">
                                    <div class="w-full h-full bg-white rounded-full flex items-center justify-center">
                                        <i class="fa-brands fa-instagram text-pink-600 text-lg"></i>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h5 class="font-sans text-xs font-bold text-stone-800 group-hover:text-pink-deep flex items-center gap-1.5">
                                        @skymews.ghy
                                        <i class="fa-solid fa-arrow-up-right-from-square text-[10px] text-stone-400"></i>
                                    </h5>
                                    <p class="font-sans text-[11px] text-stone-500">Official Instagram • Stories, Reels & Events</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <!-- Interactive Story Preview Section -->
    <section class="py-20 relative bg-white/70 backdrop-blur-sm border-y border-pink-200/70">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="reveal-fade-left">
                    <span class="paper-badge mb-3">Our Identity</span>
                    <h2 class="font-playfair text-3xl sm:text-5xl font-bold text-stone-900 leading-tight">
                        Handcrafted Blooms & Romantic Skies
                    </h2>
                    <p class="font-sans text-stone-600 text-base leading-relaxed mt-4">
                        Nestled in Beltola, Guwahati, Sky Mews is an artistic haven where layered paper floral sculptures meet open-air rooftop views. Whether it’s golden hour coffee, intimate date nights, or vibrant celebration dinners with friends, every detail is crafted to enchant your senses.
                    </p>
                    <div class="pt-6">
                        <a href="{{ route('about') }}" class="paper-btn-primary">
                            Discover Our Full Story →
                        </a>
                    </div>
                </div>

                <div class="relative reveal-fade-right">
                    <div class="rounded-3xl overflow-hidden border-2 border-pink-200 shadow-xl paper-card p-3 bg-white">
                        <img src="{{ asset('images/gallery/photo-corner.jpg') }}" alt="Sky Mews Photo Corner" class="w-full h-80 object-cover rounded-2xl">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Menu Highlights with Photos -->
    <section class="py-24 relative">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-14 gap-6 reveal-on-scroll">
                <div>
                    <span class="paper-badge mb-3">Signature Offerings</span>
                    <h2 class="font-playfair text-3xl sm:text-5xl font-bold text-stone-900">
                        Featured From Our Kitchen
                    </h2>
                    <p class="font-sans text-stone-600 text-base max-w-xl mt-2">
                        Handmade dimsums, artisanal flower coolers, and aromatic tandoori skewers.
                    </p>
                </div>
                <div>
                    <a href="{{ route('menu') }}" class="paper-btn-primary">
                        View Entire Menu →
                    </a>
                </div>
            </div>

            <!-- Featured Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="paper-card overflow-hidden bg-white reveal-on-scroll delay-100">
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/menu/pink-dimsums.jpg') }}" alt="Pink Truffle Dimsums" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-3 left-3 bg-white/90 backdrop-blur-xs text-pink-deep text-xs font-semibold px-3 py-1 rounded-full shadow-xs">
                            Pan-Asian Signature
                        </span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-2">
                            <h4 class="font-playfair text-xl font-bold text-stone-900">Pink Truffle Dimsums</h4>
                            <span class="font-playfair text-lg font-bold text-pink-deep">₹360</span>
                        </div>
                        <p class="font-sans text-xs text-stone-600 leading-relaxed mb-4">
                            Translucent beetroot-tinted dumpling wrappers stuffed with crushed edamame, truffle oil, and water chestnuts.
                        </p>
                        <a href="{{ route('menu') }}" class="font-sans text-xs text-pink-rose font-semibold hover:underline">
                            Explore Pan-Asian Section →
                        </a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="paper-card overflow-hidden bg-white reveal-on-scroll delay-200">
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/menu/drinks-blossom.jpg') }}" alt="Rose Petal Lychee Cooler" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-3 left-3 bg-white/90 backdrop-blur-xs text-pink-deep text-xs font-semibold px-3 py-1 rounded-full shadow-xs">
                            Signature Mocktail
                        </span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-2">
                            <h4 class="font-playfair text-xl font-bold text-stone-900">Rose Lychee Cooler</h4>
                            <span class="font-playfair text-lg font-bold text-pink-deep">₹240</span>
                        </div>
                        <p class="font-sans text-xs text-stone-600 leading-relaxed mb-4">
                            Fresh pink lychee, Bulgarian rose water, sparkling effervescence, and organic edible rose petals.
                        </p>
                        <a href="{{ route('menu') }}" class="font-sans text-xs text-pink-rose font-semibold hover:underline">
                            Explore Beverages Section →
                        </a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="paper-card overflow-hidden bg-white reveal-on-scroll delay-300">
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/hero/rooftop-sunset.jpg') }}" alt="Rooftop Kebab Special" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-3 left-3 bg-white/90 backdrop-blur-xs text-pink-deep text-xs font-semibold px-3 py-1 rounded-full shadow-xs">
                            North Indian
                        </span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-2">
                            <h4 class="font-playfair text-xl font-bold text-stone-900">Dhungar Murgh Tikka</h4>
                            <span class="font-playfair text-lg font-bold text-pink-deep">₹460</span>
                        </div>
                        <p class="font-sans text-xs text-stone-600 leading-relaxed mb-4">
                            Charcoal-smoked chicken thighs marinated in hand-ground spices, Greek yoghurt, and Kashmiri deghi chili.
                        </p>
                        <a href="{{ route('menu') }}" class="font-sans text-xs text-pink-rose font-semibold hover:underline">
                            Explore Tandoori Section →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Instagram Feed Polaroid Preview -->
    <section class="py-20 bg-pink-50/50 border-t border-pink-200/70">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-14 reveal-on-scroll">
                <span class="paper-badge mb-3">Live Feed</span>
                <h2 class="font-playfair text-3xl sm:text-5xl font-bold text-stone-900">
                    Moments From <span class="text-pink-deep italic">@skymews.ghy</span>
                </h2>
                <p class="font-sans text-stone-600 text-sm mt-2">
                    Recent stories, customer clicks, and rooftop sunsets straight from our Instagram.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($instaPosts as $post)
                    <div class="polaroid-frame reveal-on-scroll" style="--rot: {{ $post['rot'] }};">
                        <div class="h-56 rounded-md overflow-hidden relative border border-pink-200/80">
                            <img src="{{ asset($post['image']) }}" alt="{{ $post['title'] }}" class="w-full h-full object-cover">
                            <div class="absolute top-2 right-2 bg-white/90 px-2 py-0.5 rounded-full text-[11px] font-sans text-rose-500 font-semibold shadow-xs flex items-center gap-1">
                                <i class="fa-solid fa-heart"></i> {{ $post['likes'] }}
                            </div>
                        </div>
                        <div class="pt-3 px-1">
                            <h4 class="font-playfair text-sm font-bold text-stone-800">{{ $post['title'] }}</h4>
                            <p class="font-sans text-[11px] text-stone-500 mt-1 line-clamp-2">{{ $post['caption'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('instagram') }}" class="paper-btn-outline">
                    View Complete Instagram Gallery →
                </a>
            </div>
        </div>
    </section>

    <!-- Instant Reservation CTA Banner -->
    <section class="py-20 relative bg-white">
        <div class="max-w-5xl mx-auto px-6 text-center reveal-zoom-in">
            <div class="paper-card-cutout bg-gradient-to-tr from-pink-50 via-white to-pink-100 p-10 md:p-14">
                <span class="paper-badge mb-3">Reserve Today</span>
                <h2 class="font-playfair text-3xl sm:text-5xl font-bold text-stone-900 mb-4">
                    Planning a Special Date or Celebration?
                </h2>
                <p class="font-sans text-stone-600 text-base max-w-xl mx-auto mb-8 leading-relaxed">
                    Reserve Guwahati’s dreamiest rooftop spot in advance. Perfect for anniversaries, birthdays, and sunset date nights.
                </p>
                <div class="flex flex-wrap items-center justify-center gap-4">
                    <a href="{{ route('book') }}" class="paper-btn-primary">
                        <i class="fa-regular fa-calendar-check"></i> Book Your Table
                    </a>
                    <a href="https://wa.me/919864000000" target="_blank" class="paper-btn-outline">
                        <i class="fa-brands fa-whatsapp text-lg text-emerald-600"></i> WhatsApp Concierge
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
