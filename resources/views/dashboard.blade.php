<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-cyan-50 py-8 sm:py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Welcome Section -->
            <div class="mb-8 sm:mb-12">
                <h1 class="text-3xl sm:text-4xl font-black text-slate-900 mb-2">Welcome back, Traveller! 👋</h1>
                <p class="text-slate-600 text-base sm:text-lg font-medium">Ready to explore the beauty of Bangladesh?</p>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8 sm:mb-12">
                <!-- Completed Trips -->
                <div class="bg-gradient-to-br from-blue-100 to-blue-50 rounded-3xl border-2 border-blue-300 p-6 sm:p-8 shadow-xl hover:shadow-2xl transition-all duration-300">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-slate-800 font-bold text-sm">Completed Trips</h3>
                        <span class="text-3xl">✈️</span>
                    </div>
                    <p class="text-3xl sm:text-4xl font-black text-blue-600 mb-1">8</p>
                    <p class="text-slate-600 text-xs sm:text-sm font-medium">Unforgettable journeys</p>
                </div>

                <!-- Saved Places -->
                <div class="bg-gradient-to-br from-amber-100 to-amber-50 rounded-3xl border-2 border-amber-300 p-6 sm:p-8 shadow-xl hover:shadow-2xl transition-all duration-300">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-slate-800 font-bold text-sm">Saved Places</h3>
                        <span class="text-3xl">⭐</span>
                    </div>
                    <p class="text-3xl sm:text-4xl font-black text-amber-600 mb-1">23</p>
                    <p class="text-slate-600 text-xs sm:text-sm font-medium">Destinations to visit</p>
                </div>

                <!-- Reviews Posted -->
                <div class="bg-gradient-to-br from-green-100 to-green-50 rounded-3xl border-2 border-green-300 p-6 sm:p-8 shadow-xl hover:shadow-2xl transition-all duration-300">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-slate-800 font-bold text-sm">Reviews Posted</h3>
                        <span class="text-3xl">📝</span>
                    </div>
                    <p class="text-3xl sm:text-4xl font-black text-green-600 mb-1">12</p>
                    <p class="text-slate-600 text-xs sm:text-sm font-medium">Experiences shared</p>
                </div>

                <!-- Reward Points -->
                <div class="bg-gradient-to-br from-purple-100 to-purple-50 rounded-3xl border-2 border-purple-300 p-6 sm:p-8 shadow-xl hover:shadow-2xl transition-all duration-300">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-slate-800 font-bold text-sm">Reward Points</h3>
                        <span class="text-3xl">🏆</span>
                    </div>
                    <p class="text-3xl sm:text-4xl font-black text-purple-600 mb-1">2450</p>
                    <p class="text-slate-600 text-xs sm:text-sm font-medium">Redeem amazing offers</p>
                </div>
            </div>

            <!-- Featured Destinations -->
            <div class="mb-8 sm:mb-12">
                <h2 class="text-2xl sm:text-3xl font-black text-slate-900 mb-6">Featured Destinations for You</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Sundarbans -->
                    <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                        <div class="relative h-48 bg-gradient-to-br from-green-300 to-green-500 flex items-center justify-center overflow-hidden">
                            <span class="text-7xl">🐅</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-black text-slate-900 mb-2">The Sundarbans</h3>
                            <p class="text-slate-600 text-sm font-medium mb-4">World's largest mangrove forest with Bengal tigers and diverse wildlife</p>
                            <div class="flex items-center justify-between">
                                <span class="text-yellow-500 font-bold">⭐ 4.8</span>
                                <a href="{{ route('historical-places') }}" class="px-4 py-2 bg-gradient-to-r from-blue-600 to-cyan-600 text-white font-bold rounded-lg hover:from-blue-700 hover:to-cyan-700 transition-all text-sm">Explore</a>
                            </div>
                        </div>
                    </div>

                    <!-- Cox's Bazar -->
                    <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                        <div class="relative h-48 bg-gradient-to-br from-blue-300 to-cyan-400 flex items-center justify-center overflow-hidden">
                            <span class="text-7xl">🏖️</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-black text-slate-900 mb-2">Cox's Bazar</h3>
                            <p class="text-slate-600 text-sm font-medium mb-4">World's longest sea beach with pristine sand and golden sunsets</p>
                            <div class="flex items-center justify-between">
                                <span class="text-yellow-500 font-bold">⭐ 4.9</span>
                                <a href="{{ route('historical-places') }}" class="px-4 py-2 bg-gradient-to-r from-blue-600 to-cyan-600 text-white font-bold rounded-lg hover:from-blue-700 hover:to-cyan-700 transition-all text-sm">Explore</a>
                            </div>
                        </div>
                    </div>

                    <!-- Dhaka City -->
                    <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                        <div class="relative h-48 bg-gradient-to-br from-orange-300 to-red-400 flex items-center justify-center overflow-hidden">
                            <span class="text-7xl">🏛️</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-black text-slate-900 mb-2">Dhaka City</h3>
                            <p class="text-slate-600 text-sm font-medium mb-4">Historic monuments, vibrant culture, and incredible street food scene</p>
                            <div class="flex items-center justify-between">
                                <span class="text-yellow-500 font-bold">⭐ 4.6</span>
                                <a href="{{ route('historical-places') }}" class="px-4 py-2 bg-gradient-to-r from-blue-600 to-cyan-600 text-white font-bold rounded-lg hover:from-blue-700 hover:to-cyan-700 transition-all text-sm">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Upcoming Bookings -->
            <div class="mb-8 sm:mb-12">
                <h2 class="text-2xl sm:text-3xl font-black text-slate-900 mb-6">Your Upcoming Bookings</h2>
                <div class="space-y-4">
                    <!-- Booking 1 -->
                    <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-lg hover:shadow-xl transition-all duration-300">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                            <div>
                                <h3 class="text-lg font-bold text-slate-900 mb-1">Sundarbans Adventure Tour</h3>
                                <p class="text-slate-600 text-sm mb-2">📅 December 15-18, 2025 • 4 Days</p>
                                <p class="text-slate-700 text-sm font-medium">5 travelers • Luxury Package</p>
                            </div>
                            <div class="flex flex-col gap-2 sm:items-end">
                                <p class="text-2xl font-black text-blue-600">৳ 45,000</p>
                                <button class="px-6 py-2 bg-gradient-to-r from-blue-600 to-cyan-600 text-white font-bold rounded-lg hover:from-blue-700 hover:to-cyan-700 transition-all text-sm">View Details</button>
                            </div>
                        </div>
                    </div>

                    <!-- Booking 2 -->
                    <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-lg hover:shadow-xl transition-all duration-300">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                            <div>
                                <h3 class="text-lg font-bold text-slate-900 mb-1">Cox's Bazar Beach Escape</h3>
                                <p class="text-slate-600 text-sm mb-2">📅 January 5-7, 2026 • 3 Days</p>
                                <p class="text-slate-700 text-sm font-medium">2 travelers • Standard Package</p>
                            </div>
                            <div class="flex flex-col gap-2 sm:items-end">
                                <p class="text-2xl font-black text-cyan-600">৳ 28,500</p>
                                <button class="px-6 py-2 bg-gradient-to-r from-blue-600 to-cyan-600 text-white font-bold rounded-lg hover:from-blue-700 hover:to-cyan-700 transition-all text-sm">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Browse Destinations -->
                <div class="bg-white rounded-2xl border border-slate-200 p-6 sm:p-8 shadow-lg hover:shadow-xl transition-all duration-300 cursor-pointer group">
                    <div class="text-5xl mb-4">🗺️</div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Browse Destinations</h3>
                    <p class="text-slate-600 text-sm mb-4">Discover hidden gems across Bangladesh</p>
                    <a href="{{ route('historical-places') }}" class="inline-flex items-center text-blue-600 font-bold hover:text-blue-700 transition-all group-hover:gap-2 gap-1">
                        Explore Now →
                    </a>
                </div>

                <!-- View Services -->
                <div class="bg-white rounded-2xl border border-slate-200 p-6 sm:p-8 shadow-lg hover:shadow-xl transition-all duration-300 cursor-pointer group">
                    <div class="text-5xl mb-4">🎫</div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Our Services</h3>
                    <p class="text-slate-600 text-sm mb-4">Hotels, transport, guides, and more</p>
                    <a href="{{ route('services') }}" class="inline-flex items-center text-blue-600 font-bold hover:text-blue-700 transition-all group-hover:gap-2 gap-1">
                        Learn More →
                    </a>
                </div>

                <!-- Get in Touch -->
                <div class="bg-white rounded-2xl border border-slate-200 p-6 sm:p-8 shadow-lg hover:shadow-xl transition-all duration-300 cursor-pointer group">
                    <div class="text-5xl mb-4">💬</div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Get in Touch</h3>
                    <p class="text-slate-600 text-sm mb-4">Have questions? Contact our team</p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center text-blue-600 font-bold hover:text-blue-700 transition-all group-hover:gap-2 gap-1">
                        Contact Us →
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
