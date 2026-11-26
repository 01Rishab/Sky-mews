@extends('layouts.app')

@section('title', 'Book A Table & Rooftop Booth | Sky Mews Guwahati')

@section('content')
    <!-- Header Banner -->
    <section class="py-20 relative overflow-hidden bg-gradient-to-b from-pink-100/50 via-pink-50/30 to-paper-cream border-b border-pink-200">
        <div class="max-w-7xl mx-auto px-6 text-center relative z-10 reveal-on-scroll">
            <span class="paper-badge mb-3">Direct Concierge</span>
            <h1 class="font-playfair text-4xl sm:text-6xl font-bold text-stone-900 leading-tight">
                Reserve Your Table
            </h1>
            <p class="font-sans text-stone-600 text-base sm:text-lg max-w-2xl mx-auto mt-4 leading-relaxed">
                Secure your rooftop booth or floral table. Instant confirmation via WhatsApp & SMS.
            </p>
        </div>
    </section>

    <!-- Reservation Form Section -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                
                <!-- Info Column -->
                <div class="lg:col-span-5 space-y-6 reveal-fade-left">
                    <div class="paper-card p-6 bg-white border border-pink-200 rounded-3xl">
                        <h3 class="font-playfair text-xl font-bold text-stone-900 mb-4 pb-2 border-b border-pink-100">
                            Reservation Benefits
                        </h3>
                        <ul class="font-sans text-sm space-y-3 text-stone-600">
                            <li><i class="fa-solid fa-check text-pink-rose mr-2"></i> Guaranteed sunset skyline seating</li>
                            <li><i class="fa-solid fa-check text-pink-rose mr-2"></i> Complimentary floral table decor setup</li>
                            <li><i class="fa-solid fa-check text-pink-rose mr-2"></i> Priority service during peak weekend hours</li>
                            <li><i class="fa-solid fa-check text-pink-rose mr-2"></i> Custom celebration cakes arranged on request</li>
                        </ul>
                    </div>

                    <div class="paper-card p-6 bg-white border border-pink-200 rounded-3xl space-y-3 font-sans text-sm text-stone-600">
                        <h4 class="font-playfair text-lg font-bold text-stone-900">Cafe Address</h4>
                        <p>
                            <i class="fa-solid fa-location-dot text-pink-rose mr-2"></i>
                            Dr Bhabendra Nath Saikia Road, Wireless, Beltola, Guwahati, Assam 781028
                        </p>
                        <p>
                            <i class="fa-regular fa-clock text-pink-rose mr-2"></i>
                            Daily 12:30 PM to 11:00 PM
                        </p>
                        <p>
                            <i class="fa-brands fa-whatsapp text-pink-rose mr-2"></i>
                            Direct WhatsApp: +91 98640 00000
                        </p>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="lg:col-span-7 reveal-fade-right">
                    <div class="paper-card-cutout bg-white">
                        <div class="text-center mb-6">
                            <h3 class="font-playfair text-2xl font-bold text-stone-900">Table Booking Request</h3>
                            <p class="font-sans text-xs text-stone-500 mt-1">Please fill in your details below</p>
                        </div>

                        <!-- Success Alert Message -->
                        <div id="reservation-success" class="hidden mb-6 p-4 rounded-xl bg-pink-100/80 border border-pink-300 text-pink-deep text-sm font-sans flex items-center gap-3">
                            <i class="fa-solid fa-circle-check text-xl"></i>
                            <div>
                                <p class="font-bold">Reservation Request Sent!</p>
                                <p class="text-xs">We have received your table request. Our team at Sky Mews will contact you shortly.</p>
                            </div>
                        </div>

                        <form id="reservation-form" action="{{ route('reserve') }}" method="POST" class="space-y-4 font-sans text-sm">
                            @csrf
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-stone-700 font-medium mb-1">Your Full Name</label>
                                    <input type="text" name="guest_name" required placeholder="e.g. Priya Sharma" class="w-full px-4 py-2.5 rounded-xl border border-pink-200 focus:outline-none focus:border-pink-500 focus:ring-2 focus:ring-pink-200">
                                </div>
                                <div>
                                    <label class="block text-stone-700 font-medium mb-1">Phone / WhatsApp</label>
                                    <input type="tel" name="phone" required placeholder="e.g. +91 98765 43210" class="w-full px-4 py-2.5 rounded-xl border border-pink-200 focus:outline-none focus:border-pink-500 focus:ring-2 focus:ring-pink-200">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                                <div>
                                    <label class="block text-stone-700 font-medium mb-1">Date</label>
                                    <input type="date" name="date" required value="{{ date('Y-m-d') }}" class="w-full px-4 py-2.5 rounded-xl border border-pink-200 focus:outline-none focus:border-pink-500 focus:ring-2 focus:ring-pink-200">
                                </div>
                                <div>
                                    <label class="block text-stone-700 font-medium mb-1">Preferred Time</label>
                                    <select name="time" required class="w-full px-4 py-2.5 rounded-xl border border-pink-200 focus:outline-none focus:border-pink-500 focus:ring-2 focus:ring-pink-200 bg-white">
                                        <option value="12:30 PM">12:30 PM (Lunch)</option>
                                        <option value="02:00 PM">02:00 PM</option>
                                        <option value="04:30 PM" selected>04:30 PM (Sunset Golden Hour)</option>
                                        <option value="06:30 PM">06:30 PM (Evening Lights)</option>
                                        <option value="08:00 PM">08:00 PM (Dinner)</option>
                                        <option value="09:30 PM">09:30 PM (Late Night)</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-stone-700 font-medium mb-1">Number of Guests</label>
                                    <select name="guests" required class="w-full px-4 py-2.5 rounded-xl border border-pink-200 focus:outline-none focus:border-pink-500 focus:ring-2 focus:ring-pink-200 bg-white">
                                        <option value="2">2 Guests (Couple Table)</option>
                                        <option value="4" selected>3 - 4 Guests</option>
                                        <option value="6">5 - 6 Guests</option>
                                        <option value="10">7 - 10 Guests (Party)</option>
                                        <option value="15">10+ Guests (Celebration)</option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <label class="block text-stone-700 font-medium mb-1">Seating Choice</label>
                                <div class="grid grid-cols-2 gap-3">
                                    <label class="flex items-center gap-2 p-3 border border-pink-200 rounded-xl cursor-pointer hover:bg-pink-50/50">
                                        <input type="radio" name="seating" value="rooftop" checked class="text-pink-600 focus:ring-pink-400">
                                        <span class="text-xs font-semibold">Open Rooftop Lounge</span>
                                    </label>
                                    <label class="flex items-center gap-2 p-3 border border-pink-200 rounded-xl cursor-pointer hover:bg-pink-50/50">
                                        <input type="radio" name="seating" value="floral_booth" class="text-pink-600 focus:ring-pink-400">
                                        <span class="text-xs font-semibold">Floral Paper-Art Booth</span>
                                    </label>
                                </div>
                            </div>

                            <div>
                                <label class="block text-stone-700 font-medium mb-1">Special Occasion / Dietary Notes</label>
                                <textarea name="notes" rows="2" placeholder="Birthday cake arrangement, anniversary celebration, candlelight setup..." class="w-full px-4 py-2.5 rounded-xl border border-pink-200 focus:outline-none focus:border-pink-500 focus:ring-2 focus:ring-pink-200"></textarea>
                            </div>

                            <button type="submit" class="paper-btn-primary w-full !py-3.5 mt-2">
                                <i class="fa-solid fa-paper-plane mr-2"></i> Confirm Table Request
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
