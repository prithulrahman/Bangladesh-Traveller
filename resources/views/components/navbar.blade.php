<div>
    <!-- Navbar -->
    <nav class="sticky top-0 z-50 flex items-center justify-between bg-white shadow-lg px-4 sm:px-6 lg:px-8 py-3 sm:py-2 border-b border-blue-100">
        <a href="{{ route('home') }}">
            <div class="flex items-center gap-2 sm:gap-4">
                <img src="{{ asset("images/BDTravellers.png") }}" alt="Logo" class="w-12 h-10 sm:w-20 sm:h-14 object-cover rounded-lg shadow-md">
                <div class="hidden sm:block">
                    <h1 class="text-lg sm:text-2xl font-bold text-blue-600">Bangladesh Travellers</h1>
                    <p class="text-xs text-slate-500 font-medium">Explore Your Journey</p>
                </div>
            </div>
        </a>
        
        <!-- Desktop Navigation -->
        <div class="hidden lg:flex gap-6 xl:gap-8 items-center">
            <a href="{{ route('home') }}" class="text-slate-700 text-sm lg:text-base font-medium no-underline transition-all duration-300 hover:text-blue-600 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-blue-600 after:transition-all after:duration-300 hover:after:w-full">Home</a>
            <a href="{{ route('historical-places') }}" class="text-slate-700 text-sm lg:text-base font-medium no-underline transition-all duration-300 hover:text-blue-600 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-blue-600 after:transition-all after:duration-300 hover:after:w-full">Historical Places</a>
            <a href="{{ route('about') }}" class="text-slate-700 text-sm lg:text-base font-medium no-underline transition-all duration-300 hover:text-blue-600 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-blue-600 after:transition-all after:duration-300 hover:after:w-full">About Us</a>
            <a href="{{ route('services') }}" class="text-slate-700 text-sm lg:text-base font-medium no-underline transition-all duration-300 hover:text-blue-600 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-blue-600 after:transition-all after:duration-300 hover:after:w-full">Services</a>
            <a href="{{ route('contact') }}" class="text-slate-700 text-sm lg:text-base font-medium no-underline transition-all duration-300 hover:text-blue-600 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-blue-600 after:transition-all after:duration-300 hover:after:w-full">Contact Us</a>
        </div>
        <!-- Right Section -->
        <div class="flex gap-1.5 sm:gap-2 lg:gap-3 items-center">
            <!-- Reward Points Counter -->
            <div class="hidden lg:flex items-center gap-2 bg-gradient-to-r from-amber-50 to-yellow-50 px-3 lg:px-4 py-2 rounded-full border border-yellow-200 cursor-pointer transition-all duration-300 hover:shadow-md hover:border-yellow-400">
                <span class="text-base lg:text-lg">⭐</span>
                <span class="font-bold text-yellow-600 text-xs lg:text-sm min-w-6" id="rewardPoints">0</span>
                <span class="text-xs text-yellow-700 font-semibold">Points</span>
            </div>
            
            @auth
                <!-- User Profile Logo -->
                <div class="relative cursor-pointer group">
                    <img src="{{ asset('storage/' . Auth::user()->profile_picture_path) }}" alt="User Profile" class="w-9 h-9 sm:w-11 sm:h-11 rounded-full border-2 border-blue-300 transition-all duration-300 object-cover shadow-sm group-hover:shadow-lg group-hover:border-blue-500" id="profileImg" />
                    <div class="absolute top-12 sm:top-14 right-0 bg-white rounded-lg shadow-xl z-50 overflow-hidden opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 min-w-44 sm:min-w-48 border border-slate-200">
                        <a href="{{ route('dashboard') }}" class="block px-4 sm:px-5 py-2.5 sm:py-3 text-slate-700 no-underline text-xs sm:text-sm font-medium transition-all duration-300 hover:bg-blue-50 hover:text-blue-600 border-l-4 border-transparent hover:border-l-blue-600">🏠 Dashboard</a>
                        <a href="{{ route('profile.view') }}" class="block px-4 sm:px-5 py-2.5 sm:py-3 text-slate-700 no-underline text-xs sm:text-sm font-medium transition-all duration-300 hover:bg-blue-50 hover:text-blue-600 border-l-4 border-transparent hover:border-l-blue-600">👤 View Profile</a>
                        <a href="{{ route('profile.edit') }}" class="block px-4 sm:px-5 py-2.5 sm:py-3 text-slate-700 no-underline text-xs sm:text-sm font-medium transition-all duration-300 hover:bg-blue-50 hover:text-blue-600 border-l-4 border-transparent hover:border-l-blue-600">⚙️ Settings</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left block px-4 sm:px-5 py-2.5 sm:py-3 text-red-600 no-underline text-xs sm:text-sm font-medium transition-all duration-300 hover:bg-red-50 border-l-4 border-transparent hover:border-l-red-600 border-t border-slate-200">🚪 Logout</button>
                        </form>
                        {{-- <a href="#logout" class="block px-4 sm:px-5 py-2.5 sm:py-3 text-red-600 no-underline text-xs sm:text-sm font-medium transition-all duration-300 hover:bg-red-50 border-l-4 border-transparent hover:border-l-red-600 border-t border-slate-200">🚪 Logout</a> --}}
                    </div>
                </div>
            @else
                @if (Request::routeIs('login'))
                    <a href="{{ route('login') }}"><button class="px-3 sm:px-6 py-1.5 sm:py-2 text-xs sm:text-sm font-semibold border-none rounded-lg bg-blue-600 text-white cursor-pointer transition-all duration-300 hover:bg-blue-700 shadow-md hover:shadow-lg">Login</button></a>
                    <a href="{{ route('register') }}"><button class="hidden sm:inline px-3 sm:px-4 py-1.5 sm:py-2 text-xs sm:text-sm font-semibold border-none rounded-lg bg-white text-blue-600 border-2 border-blue-600 cursor-pointer transition-all duration-300 hover:bg-blue-50">Register</button></a>
                @else
                    <a href="{{ route('login') }}"><button class="hidden sm:inline px-3 sm:px-4 py-1.5 sm:py-2 text-xs sm:text-sm font-semibold border-none rounded-lg bg-white text-blue-600 border-2 border-blue-600 cursor-pointer transition-all duration-300 hover:bg-blue-50">Login</button></a>
                    <a href="{{ route('register') }}"><button class="px-3 sm:px-6 py-1.5 sm:py-2 text-xs sm:text-sm font-semibold border-none rounded-lg bg-blue-600 text-white cursor-pointer transition-all duration-300 hover:bg-blue-700 shadow-md hover:shadow-lg">Register</button></a>
                @endif
            @endauth

            <!-- Mobile Menu Button -->
            <button id="mobileMenuBtn" class="lg:hidden flex flex-col gap-1.5 p-1.5 rounded-lg hover:bg-slate-100 transition-all duration-300">
                <span class="w-5 h-0.5 bg-slate-700 transition-all duration-300"></span>
                <span class="w-5 h-0.5 bg-slate-700 transition-all duration-300"></span>
                <span class="w-5 h-0.5 bg-slate-700 transition-all duration-300"></span>
            </button>
            
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden lg:hidden fixed top-20 left-0 right-0 bg-white shadow-lg border-b border-blue-100 z-40">
        <div class="flex flex-col">
            <a href="index.html" class="px-6 py-3 text-slate-700 text-base font-medium no-underline transition-all duration-300 border-b border-slate-100 hover:bg-blue-50 hover:text-blue-600">🏠 Home</a>
            <a href="{{ route('historical-places') }}" class="px-6 py-3 text-slate-700 text-base font-medium no-underline transition-all duration-300 border-b border-slate-100 hover:bg-blue-50 hover:text-blue-600">🏛️ Historical Places</a>
            <a href="{{ route('about') }}" class="px-6 py-3 text-slate-700 text-base font-medium no-underline transition-all duration-300 border-b border-slate-100 hover:bg-blue-50 hover:text-blue-600">ℹ️ About Us</a>
            <a href="{{ route('services') }}" class="px-6 py-3 text-slate-700 text-base font-medium no-underline transition-all duration-300 border-b border-slate-100 hover:bg-blue-50 hover:text-blue-600">⭐ Services</a>
            <a href="{{ route('contact') }}" class="px-6 py-3 text-slate-700 text-base font-medium no-underline transition-all duration-300 border-b border-slate-100 hover:bg-blue-50 hover:text-blue-600">📞 Contact Us</a>
            <div class="px-6 py-3 flex gap-2">
                <a href="Signup.html" class="flex-1"><button class="w-full px-4 py-2 text-sm font-semibold border-none rounded-lg bg-white text-blue-600 border-2 border-blue-600 cursor-pointer transition-all duration-300 hover:bg-blue-50">Sign up</button></a>
            </div>
        </div>
    </div>
</div>