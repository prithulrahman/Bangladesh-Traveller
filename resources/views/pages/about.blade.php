<x-app-layout>
    <!-- Hero Section -->
    <section class="relative min-h-96 bg-gradient-to-r from-blue-600 via-cyan-600 to-blue-600 flex items-center justify-center px-4 sm:px-6 lg:px-8 py-16 sm:py-24">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-20 left-10 w-72 h-72 bg-white rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 right-10 w-96 h-96 bg-white rounded-full blur-3xl"></div>
        </div>
        <div class="relative text-center max-w-4xl">
            <h1 class="text-5xl sm:text-6xl lg:text-7xl font-black text-white drop-shadow-lg mb-6">About Bangladesh Travellers</h1>
            <p class="text-xl sm:text-2xl text-blue-100 mb-4">Transforming how people explore and experience Bangladesh</p>
            <p class="text-lg text-blue-50">Dedicated to showcasing the nation's rich heritage, natural beauty, and vibrant culture to travelers worldwide</p>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div>
                <h2 class="text-4xl font-black text-slate-900 mb-6">Our Story</h2>
                <p class="text-lg text-slate-600 mb-4 leading-relaxed">Bangladesh Travellers was founded with a simple yet powerful vision: to connect people with the authentic beauty and culture of Bangladesh. We believe that every traveller deserves unforgettable experiences, and every destination has a story worth sharing.</p>
                <p class="text-lg text-slate-600 mb-4 leading-relaxed">What started as a passion project has grown into a comprehensive platform serving thousands of travellers from around the world. We're dedicated to promoting sustainable tourism and supporting local communities along the way.</p>
                <p class="text-lg text-slate-600 leading-relaxed">Our team combines years of travel expertise, local knowledge, and technological innovation to create the ultimate travel experience.</p>
            </div>
            <div class="relative">
                <div class="bg-gradient-to-br from-blue-600 to-cyan-600 rounded-2xl p-1">
                    <img src="{{ asset('images/person-traveling-enjoying-their-vacation.jpg') }}" alt="Team" class="rounded-2xl w-full h-96 object-cover">
                </div>
                <div class="absolute -bottom-6 -right-6 bg-white rounded-xl p-6 shadow-xl border border-slate-200 max-w-xs hidden md:block">
                    <p class="text-sm font-semibold text-slate-700">Since 2020</p>
                    <p class="text-3xl font-black text-blue-600">Serving Travellers</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="bg-gradient-to-r from-blue-50 to-cyan-50 py-16 sm:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-slate-900 text-center mb-12">By The Numbers</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <p class="text-5xl font-black text-blue-600 mb-2">10K+</p>
                    <p class="text-lg text-slate-600 font-semibold">Active Members</p>
                </div>
                <div class="text-center">
                    <p class="text-5xl font-black text-blue-600 mb-2">64</p>
                    <p class="text-lg text-slate-600 font-semibold">Districts Covered</p>
                </div>
                <div class="text-center">
                    <p class="text-5xl font-black text-blue-600 mb-2">500+</p>
                    <p class="text-lg text-slate-600 font-semibold">Travel Guides</p>
                </div>
                <div class="text-center">
                    <p class="text-5xl font-black text-blue-600 mb-2">⭐ 4.8</p>
                    <p class="text-lg text-slate-600 font-semibold">User Rating</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values Section -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24">
        <h2 class="text-4xl font-black text-slate-900 text-center mb-12">Our Values</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-white rounded-2xl p-8 border border-slate-200 shadow-lg hover:shadow-xl transition-all duration-300">
                <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-cyan-400 rounded-xl flex items-center justify-center text-2xl mb-6">🌍</div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Authenticity</h3>
                <p class="text-slate-600">We provide genuine, unfiltered experiences that showcase the real Bangladesh beyond tourist stereotypes.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 border border-slate-200 shadow-lg hover:shadow-xl transition-all duration-300">
                <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-cyan-400 rounded-xl flex items-center justify-center text-2xl mb-6">♻️</div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Sustainability</h3>
                <p class="text-slate-600">We're committed to promoting responsible tourism that protects our environment and respects local communities.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 border border-slate-200 shadow-lg hover:shadow-xl transition-all duration-300">
                <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-cyan-400 rounded-xl flex items-center justify-center text-2xl mb-6">🤝</div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Community</h3>
                <p class="text-slate-600">We believe in empowering local guides and supporting communities through fair tourism practices.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 border border-slate-200 shadow-lg hover:shadow-xl transition-all duration-300">
                <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-cyan-400 rounded-xl flex items-center justify-center text-2xl mb-6">💡</div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Innovation</h3>
                <p class="text-slate-600">We continuously improve our platform to provide the best travel planning and discovery experience.</p>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="bg-gradient-to-r from-slate-900 to-slate-950 text-white py-16 sm:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-black text-center mb-12">Our Passionate Team</h2>
            <p class="text-center text-slate-300 max-w-2xl mx-auto mb-12 text-lg">A diverse group of travel enthusiasts, engineers, and storytellers united by a common passion for Bangladesh.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-32 h-32 bg-gradient-to-br from-blue-500 to-cyan-400 rounded-2xl mx-auto mb-4"></div>
                    <h3 class="text-xl font-bold mb-1">Jarif Rahman</h3>
                    <p class="text-slate-400">Founder & CEO</p>
                </div>
                <div class="text-center">
                    <div class="w-32 h-32 bg-gradient-to-br from-blue-500 to-cyan-400 rounded-2xl mx-auto mb-4"></div>
                    <h3 class="text-xl font-bold mb-1">Fatima Khan</h3>
                    <p class="text-slate-400">Head of Travel</p>
                </div>
                <div class="text-center">
                    <div class="w-32 h-32 bg-gradient-to-br from-blue-500 to-cyan-400 rounded-2xl mx-auto mb-4"></div>
                    <h3 class="text-xl font-bold mb-1">Riaz Ahmed</h3>
                    <p class="text-slate-400">Tech Lead</p>
                </div>
                <div class="text-center">
                    <div class="w-32 h-32 bg-gradient-to-br from-blue-500 to-cyan-400 rounded-2xl mx-auto mb-4"></div>
                    <h3 class="text-xl font-bold mb-1">Priya Dey</h3>
                    <p class="text-slate-400">Community Manager</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-gradient-to-r from-blue-600 to-cyan-600 py-16 sm:py-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-black text-white mb-6">Join Our Community</h2>
            <p class="text-xl text-blue-100 mb-8">Become part of thousands of travellers exploring the wonders of Bangladesh</p>
            <a href="/register" class="inline-block bg-white text-blue-600 font-bold py-3 px-8 rounded-lg hover:bg-blue-50 transition-all duration-300 hover:shadow-lg">
                Start Exploring Today
            </a>
        </div>
    </section>
</x-app-layout>