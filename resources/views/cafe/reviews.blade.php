@extends('layouts.app')

@section('title', 'Guest Reviews & Experiences | Sky Mews Guwahati')

@section('content')
    <!-- Header Banner -->
    <section class="py-20 relative overflow-hidden bg-gradient-to-b from-pink-100/50 via-pink-50/30 to-paper-cream border-b border-pink-200">
        <div class="max-w-7xl mx-auto px-6 text-center relative z-10 reveal-on-scroll">
            <span class="paper-badge mb-3">Customer Love</span>
            <h1 class="font-playfair text-4xl sm:text-6xl font-bold text-stone-900 leading-tight">
                Guest Reviews & Ratings
            </h1>
            <p class="font-sans text-stone-600 text-base sm:text-lg max-w-2xl mx-auto mt-4 leading-relaxed">
                See what guests say about the ambiance, rooftop views, and culinary delights at Sky Mews Beltola.
            </p>
        </div>
    </section>

    <!-- Reviews Grid -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-6">
            
            <!-- Overall Score Card -->
            <div class="max-w-xl mx-auto mb-16 paper-card p-8 bg-white text-center border-2 border-pink-200 reveal-zoom-in">
                <span class="font-playfair text-5xl font-bold text-pink-deep block">4.8 / 5.0</span>
                <div class="text-amber-400 text-lg my-2">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p class="font-sans text-xs text-stone-500 uppercase tracking-widest font-semibold">
                    Based on 150+ reviews across Google, District & Zomato
                </p>
            </div>

            <!-- Review Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach($reviews as $rev)
                    <div class="paper-card p-6 bg-white flex flex-col justify-between reveal-on-scroll">
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-pink-100 text-pink-deep font-bold flex items-center justify-center font-sans text-sm border border-pink-200">
                                        {{ $rev['avatar'] }}
                                    </div>
                                    <div>
                                        <h4 class="font-playfair text-base font-bold text-stone-900">{{ $rev['name'] }}</h4>
                                        <span class="font-sans text-[11px] text-stone-400">{{ $rev['date'] }}</span>
                                    </div>
                                </div>
                                <span class="bg-pink-50 text-pink-deep text-[11px] font-sans font-semibold px-2.5 py-0.5 rounded-full border border-pink-200">
                                    {{ $rev['tag'] }}
                                </span>
                            </div>

                            <div class="text-amber-400 text-xs mb-3">
                                @for($i = 0; $i < $rev['rating']; $i++)
                                    <i class="fa-solid fa-star"></i>
                                @endfor
                            </div>

                            <p class="font-sans text-xs sm:text-sm text-stone-600 leading-relaxed italic">
                                "{{ $rev['text'] }}"
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Review CTA -->
            <div class="text-center mt-16 reveal-on-scroll">
                <a href="{{ route('book') }}" class="paper-btn-primary">
                    Experience Sky Mews Yourself → Book Table
                </a>
            </div>

        </div>
    </section>
@endsection
