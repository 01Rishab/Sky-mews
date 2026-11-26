@extends('layouts.app')

@section('title', 'Artisanal Food & Drinks Menu | Sky Mews Guwahati')

@section('content')
    <!-- Header Banner -->
    <section class="py-20 relative overflow-hidden bg-gradient-to-b from-pink-100/50 via-pink-50/30 to-paper-cream border-b border-pink-200">
        <div class="max-w-7xl mx-auto px-6 text-center relative z-10 reveal-on-scroll">
            <span class="paper-badge mb-3">Multi-Cuisine Excellence</span>
            <h1 class="font-playfair text-4xl sm:text-6xl font-bold text-stone-900 leading-tight">
                The Artisanal Menu
            </h1>
            <p class="font-sans text-stone-600 text-base sm:text-lg max-w-2xl mx-auto mt-4 leading-relaxed">
                From handcrafted beetroot dimsums to rose coolers and rich North Indian tandoor gravies.
            </p>

            <!-- Interactive Category Filter Tabs -->
            <div class="pt-8 flex flex-wrap items-center justify-center gap-2">
                @foreach($categories as $cat)
                    <button class="menu-tab-btn {{ $loop->first ? 'active' : '' }}" data-category="{{ $cat['id'] }}">
                        {{ $cat['name'] }}
                    </button>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Menu Items Grid with Photos -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8" id="menu-items-grid">
                @foreach($menuItems as $item)
                    <div class="menu-item-card paper-card p-6 bg-white flex flex-col sm:flex-row gap-5 items-center justify-between reveal-on-scroll" data-category="{{ $item['category'] }}">
                        
                        <!-- Food / Drink Image -->
                        <div class="w-full sm:w-36 h-36 rounded-2xl overflow-hidden flex-shrink-0 border border-pink-200 relative group">
                            <img src="{{ asset($item['image']) }}" alt="{{ $item['name'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            @if($item['is_chef_special'])
                                <span class="absolute top-2 left-2 bg-pink-deep text-white text-[10px] font-bold px-2 py-0.5 rounded-full shadow-xs">
                                    Special
                                </span>
                            @endif
                        </div>

                        <!-- Item Information -->
                        <div class="flex-1 text-center sm:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-1">
                                <h4 class="font-playfair text-lg font-bold text-stone-900">
                                    {{ $item['name'] }}
                                </h4>
                                <span class="font-playfair text-lg font-bold text-pink-deep">
                                    {{ $item['price'] }}
                                </span>
                            </div>

                            <p class="font-sans text-xs text-stone-600 mt-2 leading-relaxed">
                                {{ $item['description'] }}
                            </p>

                            <div class="mt-3 flex items-center justify-center sm:justify-start gap-2">
                                <span class="inline-block bg-pink-100 text-pink-deep font-sans text-[11px] font-semibold px-2.5 py-0.5 rounded-full">
                                    {{ $item['tag'] }}
                                </span>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>

            <!-- Average Pricing & Details -->
            <div class="mt-16 text-center reveal-zoom-in">
                <div class="inline-block paper-card-cutout bg-white px-8 py-6 max-w-xl mx-auto text-sm font-sans text-stone-700">
                    <h5 class="font-playfair text-lg font-bold text-pink-deep mb-1">Dining Information</h5>
                    <p class="text-xs text-stone-600">
                        Average cost is ₹1,000 for two people. All ingredients are freshly sourced daily. Halal and vegetarian options prepared in dedicated sections.
                    </p>
                    <div class="mt-4">
                        <a href="{{ route('book') }}" class="paper-btn-primary !py-2 !px-6 text-xs">
                            Reserve A Table For Dining
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
