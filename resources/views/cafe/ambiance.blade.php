@extends('layouts.app')

@section('title', 'Rooftop Ambiance & Photo Spots | Sky Mews Guwahati')

@section('content')
    <!-- Header Banner -->
    <section class="py-20 relative overflow-hidden bg-gradient-to-b from-pink-100/50 via-pink-50/30 to-paper-cream border-b border-pink-200">
        <div class="max-w-7xl mx-auto px-6 text-center relative z-10 reveal-on-scroll">
            <span class="paper-badge mb-3">Rooftop Lounge & Aesthetics</span>
            <h1 class="font-playfair text-4xl sm:text-6xl font-bold text-stone-900 leading-tight">
                The Sky Mews Ambiance
            </h1>
            <p class="font-sans text-stone-600 text-base sm:text-lg max-w-2xl mx-auto mt-4 leading-relaxed">
                Discover our signature floral arches, cozy fairy-lit booths, and breathtaking sunset skyline views.
            </p>
        </div>
    </section>

    <!-- Ambiance Showcase Grid -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-6">
            
            <!-- Ambiance Feature 1 -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center mb-20">
                <div class="lg:col-span-7 reveal-fade-left">
                    <div class="paper-card p-3 bg-white border-2 border-pink-200 shadow-xl rounded-3xl overflow-hidden group">
                        <img src="{{ asset('images/hero/rooftop-sunset.jpg') }}" alt="Sky Mews Sunset Rooftop" class="w-full h-[400px] object-cover rounded-2xl group-hover:scale-105 transition-transform duration-700">
                    </div>
                </div>
                <div class="lg:col-span-5 space-y-4 reveal-fade-right">
                    <span class="paper-badge">Golden Hour Experience</span>
                    <h3 class="font-playfair text-2xl sm:text-3xl font-bold text-stone-900">
                        Open-Sky Sunset Lounge
                    </h3>
                    <p class="font-sans text-stone-600 text-sm leading-relaxed">
                        Between 4:30 PM and 6:30 PM, the sky above Guwahati turns into shades of warm gold and purple. Our open-air seating area is adorned with delicate pergolas and cascading lights that mirror the twilight sky.
                    </p>
                    <ul class="font-sans text-xs space-y-2 text-stone-600 pt-2">
                        <li><i class="fa-solid fa-check text-pink-rose mr-2"></i> Breezy open rooftop seating</li>
                        <li><i class="fa-solid fa-check text-pink-rose mr-2"></i> Cozy plush velvet pink cushions</li>
                        <li><i class="fa-solid fa-check text-pink-rose mr-2"></i> Perfect for evening couples and dates</li>
                    </ul>
                </div>
            </div>

            <!-- Ambiance Feature 2 -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center mb-20">
                <div class="lg:col-span-5 order-2 lg:order-1 space-y-4 reveal-fade-left">
                    <span class="paper-badge">Viral Photo Spots</span>
                    <h3 class="font-playfair text-2xl sm:text-3xl font-bold text-stone-900">
                        The Signature Floral Paper Wall
                    </h3>
                    <p class="font-sans text-stone-600 text-sm leading-relaxed">
                        Crafted specifically for social media and treasured memories. Our floral installation blends paper origami roses and glowing warm white neon signage into an unforgettable photo booth.
                    </p>
                    <ul class="font-sans text-xs space-y-2 text-stone-600 pt-2">
                        <li><i class="fa-solid fa-check text-pink-rose mr-2"></i> Studio-grade soft ambient illumination</li>
                        <li><i class="fa-solid fa-check text-pink-rose mr-2"></i> Ideal for birthday reels & portrait sessions</li>
                        <li><i class="fa-solid fa-check text-pink-rose mr-2"></i> Tag #SkyMewsGuwahati to get featured</li>
                    </ul>
                </div>
                <div class="lg:col-span-7 order-1 lg:order-2 reveal-fade-right">
                    <div class="paper-card p-3 bg-white border-2 border-pink-200 shadow-xl rounded-3xl overflow-hidden group">
                        <img src="{{ asset('images/gallery/photo-corner.jpg') }}" alt="Sky Mews Floral Paper Installation" class="w-full h-[400px] object-cover rounded-2xl group-hover:scale-105 transition-transform duration-700">
                    </div>
                </div>
            </div>

            <!-- CTA -->
            <div class="text-center pt-8">
                <a href="{{ route('book') }}" class="paper-btn-primary">
                    Book Your Rooftop Table Now →
                </a>
            </div>

        </div>
    </section>
@endsection
