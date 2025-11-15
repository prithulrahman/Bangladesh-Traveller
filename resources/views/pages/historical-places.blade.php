<x-app-layout>
    <!-- Hero Section -->
    <section class="relative min-h-96 bg-gradient-to-r from-blue-600 via-cyan-600 to-blue-600 flex items-center justify-center px-4 sm:px-6 lg:px-8 py-16 sm:py-24">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-20 left-10 w-72 h-72 bg-white rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 right-10 w-96 h-96 bg-white rounded-full blur-3xl"></div>
        </div>
        <div class="relative text-center max-w-4xl">
            <h1 class="text-5xl sm:text-6xl lg:text-7xl font-black text-white drop-shadow-lg mb-6">Historical Places of Bangladesh</h1>
            <p class="text-xl sm:text-2xl text-blue-100 mb-4">Journey through millennia of rich cultural heritage</p>
            <p class="text-lg text-blue-50">Explore the ancient wonders and monuments that tell the story of Bangladesh through centuries</p>
        </div>
    </section>

    <!-- Search & Filter Section -->
    <section class="bg-slate-50 py-8 sm:py-12 border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row gap-4 sm:items-center sm:justify-between">
                <div class="flex-1 max-w-md">
                    <input type="text" placeholder="Search historical places..." class="w-full px-4 py-3 border-2 border-slate-200 rounded-lg focus:outline-none focus:border-blue-600 transition-all duration-300">
                </div>
                <select class="px-4 py-3 border-2 border-slate-200 rounded-lg focus:outline-none focus:border-blue-600 transition-all duration-300 bg-white">
                    <option>All Periods</option>
                    <option>Ancient (3000 BC - 1200 AD)</option>
                    <option>Medieval (1200 - 1757)</option>
                    <option>British Era (1757 - 1947)</option>
                    <option>Modern (1947 - Present)</option>
                </select>
            </div>
        </div>
    </section>

    <!-- Historical Places Grid -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Place Card 1 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border border-slate-200 hover:border-blue-600">
                <div class="h-56 bg-gradient-to-br from-blue-600 to-cyan-600 flex items-center justify-center text-6xl">🏛️</div>
                <div class="p-8">
                    <div class="inline-block bg-blue-100 text-blue-700 text-xs font-bold px-3 py-1 rounded-full mb-4">Ancient Period</div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-3">Nalanda University Ruins</h3>
                    <p class="text-slate-600 mb-4">Located in Bihar (formerly part of ancient Bengal), this prestigious center of learning existed from the 5th to 12th century. A UNESCO World Heritage Site that attracted scholars from across Asia.</p>
                    <div class="flex items-center gap-2 text-sm text-slate-500 mb-4">
                        <span>📍 Nalanda, Bihar</span>
                    </div>
                    <a href="#" class="inline-block text-blue-600 font-semibold hover:text-blue-700 transition-colors duration-300">Learn More →</a>
                </div>
            </div>

            <!-- Place Card 2 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border border-slate-200 hover:border-blue-600">
                <div class="h-56 bg-gradient-to-br from-blue-600 to-cyan-600 flex items-center justify-center text-6xl">🕌</div>
                <div class="p-8">
                    <div class="inline-block bg-blue-100 text-blue-700 text-xs font-bold px-3 py-1 rounded-full mb-4">Medieval Period</div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-3">Sixty Dome Mosque (Shat Gombuj Masjid)</h3>
                    <p class="text-slate-600 mb-4">Built in 1442 in Bagerhat, this architectural marvel features 60 domes and represents a unique blend of Islamic and Bengali architecture during the Mughal era.</p>
                    <div class="flex items-center gap-2 text-sm text-slate-500 mb-4">
                        <span>📍 Bagerhat, Khulna</span>
                    </div>
                    <a href="#" class="inline-block text-blue-600 font-semibold hover:text-blue-700 transition-colors duration-300">Learn More →</a>
                </div>
            </div>

            <!-- Place Card 3 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border border-slate-200 hover:border-blue-600">
                <div class="h-56 bg-gradient-to-br from-blue-600 to-cyan-600 flex items-center justify-center text-6xl">🗿</div>
                <div class="p-8">
                    <div class="inline-block bg-blue-100 text-blue-700 text-xs font-bold px-3 py-1 rounded-full mb-4">Ancient Period</div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-3">Paharpur Buddhist Monastery</h3>
                    <p class="text-slate-600 mb-4">Dating back to the 8th century, this UNESCO World Heritage Site in Naogaon showcases the architectural brilliance of the Pala Empire and Buddhist influence in Bengal.</p>
                    <div class="flex items-center gap-2 text-sm text-slate-500 mb-4">
                        <span>📍 Naogaon, Rajshahi</span>
                    </div>
                    <a href="#" class="inline-block text-blue-600 font-semibold hover:text-blue-700 transition-colors duration-300">Learn More →</a>
                </div>
            </div>

            <!-- Place Card 4 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border border-slate-200 hover:border-blue-600">
                <div class="h-56 bg-gradient-to-br from-blue-600 to-cyan-600 flex items-center justify-center text-6xl">⛩️</div>
                <div class="p-8">
                    <div class="inline-block bg-blue-100 text-blue-700 text-xs font-bold px-3 py-1 rounded-full mb-4">Medieval Period</div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-3">Mahasthangarh Fort</h3>
                    <p class="text-slate-600 mb-4">One of Bangladesh's oldest fortified cities (3rd century BC), located in Jaipurhat. An archaeological treasure with remains of ancient palaces, temples, and administrative buildings.</p>
                    <div class="flex items-center gap-2 text-sm text-slate-500 mb-4">
                        <span>📍 Jaipurhat, Bogra</span>
                    </div>
                    <a href="#" class="inline-block text-blue-600 font-semibold hover:text-blue-700 transition-colors duration-300">Learn More →</a>
                </div>
            </div>

            <!-- Place Card 5 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border border-slate-200 hover:border-blue-600">
                <div class="h-56 bg-gradient-to-br from-blue-600 to-cyan-600 flex items-center justify-center text-6xl">🏰</div>
                <div class="p-8">
                    <div class="inline-block bg-blue-100 text-blue-700 text-xs font-bold px-3 py-1 rounded-full mb-4">British Era</div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-3">Lalbagh Fort</h3>
                    <p class="text-slate-600 mb-4">A stunning 17th-century Mughal fort in Dhaka that served as the residence of Mughal governors. Features intricate architecture, mosques, and beautiful gardens.</p>
                    <div class="flex items-center gap-2 text-sm text-slate-500 mb-4">
                        <span>📍 Dhaka</span>
                    </div>
                    <a href="#" class="inline-block text-blue-600 font-semibold hover:text-blue-700 transition-colors duration-300">Learn More →</a>
                </div>
            </div>

            <!-- Place Card 6 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border border-slate-200 hover:border-blue-600">
                <div class="h-56 bg-gradient-to-br from-blue-600 to-cyan-600 flex items-center justify-center text-6xl">🕌</div>
                <div class="p-8">
                    <div class="inline-block bg-blue-100 text-blue-700 text-xs font-bold px-3 py-1 rounded-full mb-4">Medieval Period</div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-3">Star Mosque (Tara Masjid)</h3>
                    <p class="text-slate-600 mb-4">Built in 1784, this 18th-century mosque in Dhaka is famous for its distinctive star-shaped ceiling decorations and intricate tilework representing Islamic geometric art.</p>
                    <div class="flex items-center gap-2 text-sm text-slate-500 mb-4">
                        <span>📍 Dhaka</span>
                    </div>
                    <a href="#" class="inline-block text-blue-600 font-semibold hover:text-blue-700 transition-colors duration-300">Learn More →</a>
                </div>
            </div>
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-12">
            <button class="bg-gradient-to-r from-blue-600 to-cyan-600 text-white font-bold py-3 px-8 rounded-lg hover:from-blue-700 hover:to-cyan-700 transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/50">
                Load More Places
            </button>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="bg-gradient-to-r from-slate-900 to-slate-950 text-white py-16 sm:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-black text-center mb-16">Bangladesh Through the Ages</h2>
            <div class="space-y-8">
                <div class="flex gap-8 items-start">
                    <div class="flex-shrink-0 w-24 text-center">
                        <div class="text-3xl font-black text-cyan-400">3000 BC</div>
                        <p class="text-slate-400 text-sm">Ancient Times</p>
                    </div>
                    <div class="flex-1 border-l-4 border-cyan-600 pl-8 py-4">
                        <h3 class="text-xl font-bold mb-2">Vedic Period & Early Kingdoms</h3>
                        <p class="text-slate-300">The region was known as Gauda and Vanga, home to early republics and kingdoms. Mahasthangarh represents this era.</p>
                    </div>
                </div>

                <div class="flex gap-8 items-start">
                    <div class="flex-shrink-0 w-24 text-center">
                        <div class="text-3xl font-black text-cyan-400">500-1200</div>
                        <p class="text-slate-400 text-sm">Medieval</p>
                    </div>
                    <div class="flex-1 border-l-4 border-cyan-600 pl-8 py-4">
                        <h3 class="text-xl font-bold mb-2">Pala & Sena Empires</h3>
                        <p class="text-slate-300">The Pala Empire made Bengal a center of Buddhist learning. Universities like Nalanda and Paharpur became world-renowned. The Sena dynasty later brought Hindu culture and Lalbagh was built.</p>
                    </div>
                </div>

                <div class="flex gap-8 items-start">
                    <div class="flex-shrink-0 w-24 text-center">
                        <div class="text-3xl font-black text-cyan-400">1200-1750</div>
                        <p class="text-slate-400 text-sm">Mughal Era</p>
                    </div>
                    <div class="flex-1 border-l-4 border-cyan-600 pl-8 py-4">
                        <h3 class="text-xl font-bold mb-2">Islamic Sultanates & Mughal Rule</h3>
                        <p class="text-slate-300">Islamic architecture flourished with mosques like the Sixty Dome Mosque and Star Mosque. The Mughal period saw incredible architectural achievements and cultural development.</p>
                    </div>
                </div>

                <div class="flex gap-8 items-start">
                    <div class="flex-shrink-0 w-24 text-center">
                        <div class="text-3xl font-black text-cyan-400">1757-1947</div>
                        <p class="text-slate-400 text-sm">Colonial Era</p>
                    </div>
                    <div class="flex-1 border-l-4 border-cyan-600 pl-8 py-4">
                        <h3 class="text-xl font-bold mb-2">British Rule & Renaissance</h3>
                        <p class="text-slate-300">The British colonial period brought new architecture and education. The Bengal Renaissance saw a cultural and intellectual revival that shaped modern Bangladesh.</p>
                    </div>
                </div>

                <div class="flex gap-8 items-start">
                    <div class="flex-shrink-0 w-24 text-center">
                        <div class="text-3xl font-black text-cyan-400">1947-Present</div>
                        <p class="text-slate-400 text-sm">Modern Era</p>
                    </div>
                    <div class="flex-1 border-l-4 border-cyan-600 pl-8 py-4">
                        <h3 class="text-xl font-bold mb-2">Independence & Nation Building</h3>
                        <p class="text-slate-300">Bangladesh emerged as an independent nation in 1971. Today, the country continues to preserve its heritage while building a modern future.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-gradient-to-r from-blue-600 to-cyan-600 py-16 sm:py-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-black text-white mb-6">Ready to Explore?</h2>
            <p class="text-xl text-blue-100 mb-8">Plan your historical tour and discover the wonders of Bangladesh with our expert guides</p>
            <a href="/register" class="inline-block bg-white text-blue-600 font-bold py-3 px-8 rounded-lg hover:bg-blue-50 transition-all duration-300 hover:shadow-lg">
                Start Your Journey
            </a>
        </div>
    </section>
</x-app-layout>