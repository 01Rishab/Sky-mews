@extends('layouts.app')

@section('title', 'Our Story & Aesthetic Vision | Sky Mews Guwahati')

@section('content')
    <!-- Header Banner -->
    <section class="py-20 relative overflow-hidden bg-gradient-to-b from-pink-100/50 via-pink-50/30 to-paper-cream border-b border-pink-200">
        <div class="max-w-7xl mx-auto px-6 text-center relative z-10 reveal-on-scroll">
            <span class="paper-badge mb-3">Behind The Blooms</span>
            <h1 class="font-playfair text-4xl sm:text-6xl font-bold text-stone-900 leading-tight">
                The Sky Mews Story
            </h1>
            <p class="font-sans text-stone-600 text-base sm:text-lg max-w-2xl mx-auto mt-4 leading-relaxed">
                How an inspiration for handcrafted origami paper flowers transformed into Guwahati’s favorite rooftop oasis.
            </p>
        </div>
    </section>

    <!-- Narrative Section with Photos -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-24">
                <div class="space-y-6 reveal-fade-left">
                    <span class="paper-badge">Handmade Craft & Care</span>
                    <h2 class="font-playfair text-3xl sm:text-4xl font-bold text-stone-900 leading-tight">
                        A Sanctuary of Pink Paper Petals & Gentle Light
                    </h2>
                    <p class="font-sans text-stone-600 text-base leading-relaxed">
                        Sky Mews was conceived out of a passion for soft romantic aesthetics and authentic dining. Walking through the doors of our rooftop in Beltola, you are greeted by delicate handcrafted paper floral arches, floating fairy lanterns, and soothing pastel hues that let you leave the city traffic far below.
                    </p>
                    <p class="font-sans text-stone-600 text-base leading-relaxed">
                        Every single corner—from the plush velvet seating booths to the floral paper installation wall—has been individually designed to offer an intimate, artistic backdrop for Guwahati’s community of food lovers and memory makers.
                    </p>
                </div>
                <div class="relative reveal-fade-right">
                    <div class="paper-card p-3 bg-white border-2 border-pink-200 shadow-xl rounded-3xl">
                        <img src="{{ asset('images/about/interior-floral.jpg') }}" alt="Sky Mews Interior Floral Wall" class="w-full h-96 object-cover rounded-2xl">
                    </div>
                </div>
            </div>

            <!-- Second Split -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="order-2 lg:order-1 relative reveal-fade-left">
                    <div class="paper-card p-3 bg-white border-2 border-pink-200 shadow-xl rounded-3xl">
                        <img src="{{ asset('images/about/rooftop-view.jpg') }}" alt="Sky Mews Guwahati Rooftop Sunset View" class="w-full h-96 object-cover rounded-2xl">
                    </div>
                </div>
                <div class="order-1 lg:order-2 space-y-6 reveal-fade-right">
                    <span class="paper-badge">Rooftop Living</span>
                    <h2 class="font-playfair text-3xl sm:text-4xl font-bold text-stone-900 leading-tight">
                        Elevated Dining Over Guwahati's Hills
                    </h2>
                    <p class="font-sans text-stone-600 text-base leading-relaxed">
                        Perched high on Dr Bhabendra Nath Saikia Road in Wireless, Sky Mews offers an open panoramic vantage point where gentle evening breezes meet golden sunset rays.
                    </p>
                    <p class="font-sans text-stone-600 text-base leading-relaxed">
                        Whether celebrating a personal milestone, catching up with friends over dimsums, or spending a quiet afternoon with your favorite book and a rose cooler, Sky Mews gives you a space to slow down and savor the moment.
                    </p>
                    <div class="pt-4">
                        <a href="{{ route('ambiance') }}" class="paper-btn-primary">
                            Explore Rooftop Ambiance →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
