@extends('layouts.app')

@section('title', 'Instagram Live Feed & Moments | Sky Mews Guwahati')

@section('content')
    <!-- Header Banner -->
    <section class="py-20 relative overflow-hidden bg-gradient-to-b from-pink-100/50 via-pink-50/30 to-paper-cream border-b border-pink-200">
        <div class="max-w-7xl mx-auto px-6 text-center relative z-10 reveal-on-scroll">
            <span class="paper-badge mb-3">Social Gallery</span>
            <h1 class="font-playfair text-4xl sm:text-6xl font-bold text-stone-900 leading-tight">
                Instagram Feed: <span class="text-pink-deep italic">@skymews.ghy</span>
            </h1>
            <p class="font-sans text-stone-600 text-base sm:text-lg max-w-2xl mx-auto mt-4 leading-relaxed">
                Explore the latest customer reels, food snaps, and sunset golden hour highlights from Guwahati's favorite cafe.
            </p>
            <div class="pt-6">
                <a href="https://www.instagram.com/skymews.ghy?lqvp=a2h2ZmU2YnJnajcz" target="_blank" class="paper-btn-primary">
                    <i class="fa-brands fa-instagram text-lg mr-2"></i> Open Instagram Profile
                </a>
            </div>
        </div>
    </section>

    <!-- Polaroid Gallery Grid -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($instaPosts as $post)
                    <div class="polaroid-frame reveal-on-scroll" style="--rot: {{ $post['rot'] }};">
                        <div class="h-64 rounded-md overflow-hidden relative border border-pink-200/80 group">
                            <img src="{{ asset($post['image']) }}" alt="{{ $post['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            
                            <div class="absolute top-3 right-3 bg-white/90 backdrop-blur-xs px-2.5 py-1 rounded-full text-xs font-sans text-rose-500 font-semibold shadow-xs flex items-center gap-1">
                                <i class="fa-solid fa-heart"></i> {{ $post['likes'] }}
                            </div>

                            <span class="absolute bottom-3 left-3 bg-black/60 backdrop-blur-xs text-white text-[11px] font-sans font-semibold px-2.5 py-1 rounded-full">
                                {{ $post['category'] }}
                            </span>
                        </div>

                        <div class="pt-4 px-2">
                            <h4 class="font-playfair text-base font-bold text-stone-800">{{ $post['title'] }}</h4>
                            <p class="font-sans text-xs text-stone-600 mt-1 line-clamp-3 leading-relaxed">
                                {{ $post['caption'] }}
                            </p>
                            <div class="mt-4 pt-2 border-t border-pink-100 flex items-center justify-between text-xs text-stone-400 font-sans">
                                <span>{{ $post['tag'] }}</span>
                                <a href="https://www.instagram.com/skymews.ghy?lqvp=a2h2ZmU2YnJnajcz" target="_blank" class="text-pink-deep hover:underline font-semibold">
                                    View Post →
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Tag Banner -->
            <div class="mt-20 text-center reveal-zoom-in">
                <div class="paper-card p-10 bg-gradient-to-r from-pink-100/70 via-rose-50 to-pink-100/70 max-w-2xl mx-auto border-2 border-pink-200">
                    <i class="fa-brands fa-instagram text-4xl text-pink-deep mb-3"></i>
                    <h3 class="font-playfair text-2xl font-bold text-stone-900 mb-2">Want to be Featured on Our Page?</h3>
                    <p class="font-sans text-xs sm:text-sm text-stone-600 mb-6">
                        Post your reel or story at Sky Mews and tag <span class="font-bold text-pink-deep">@skymews.ghy</span> with hashtag <span class="font-bold text-pink-deep">#SkyMewsGuwahati</span>. We repost the best creators every week!
                    </p>
                    <a href="https://www.instagram.com/skymews.ghy?lqvp=a2h2ZmU2YnJnajcz" target="_blank" class="paper-btn-primary">
                        Tag Us in Your Post
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
