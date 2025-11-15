<x-app-layout>

    <!-- Hero Section -->
    <section class="relative min-h-screen bg-cover bg-center flex flex-col items-center justify-center px-4 sm:px-6 lg:px-8 py-12 sm:py-20 before:absolute before:inset-0 before:bg-black before:opacity-30" style="background-image: url('{{ asset("images/person-traveling-enjoying-their-vacation.jpg") }}');" id="page1">
        <div class="relative z-10 flex flex-col items-center justify-center text-center max-w-4xl">
            <div class="mb-4 sm:mb-6 inline-block">
                <p class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white drop-shadow-lg">Welcome to</p>
                <p class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-black text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300 drop-shadow-lg mt-2">Bangladesh Travellers</p>
            </div>
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white drop-shadow-lg mb-4 sm:mb-6 lg:mb-8">Explore Bangladesh</h1>
            <p class="text-base sm:text-lg md:text-xl text-white drop-shadow-md mb-8 sm:mb-10 lg:mb-12 px-2">Discover the most beautiful and historical destinations across the country</p>
            <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 w-full sm:w-auto">
                <button class="px-6 sm:px-8 lg:px-10 py-3 sm:py-4 text-sm sm:text-base lg:text-lg font-bold border-none rounded-lg bg-gradient-to-r from-blue-600 to-blue-700 text-white cursor-pointer transition-all duration-300 hover:shadow-2xl hover:scale-105 hover:from-blue-700 hover:to-blue-800">🗺️ Explore by District</button>
                <button class="px-6 sm:px-8 lg:px-10 py-3 sm:py-4 text-sm sm:text-base lg:text-lg font-bold border-none rounded-lg bg-gradient-to-r from-cyan-500 to-blue-600 text-white cursor-pointer transition-all duration-300 hover:shadow-2xl hover:scale-105 hover:from-cyan-600 hover:to-blue-700">🌍 Explore by Region</button>
            </div>
        </div>
    </section>

</x-app-layout>