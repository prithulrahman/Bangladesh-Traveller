<!-- Admin Navbar -->
<nav class="bg-white shadow-md border-b border-slate-200">
    <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo/Brand -->
            <div class="flex items-center">
                <a href="{{ route('dashboard') }}" class="text-xl font-bold text-slate-800">
                    Bangladesh Traveller Admin
                </a>
            </div>

            <!-- Center Navigation Items (Optional) -->
            <div class="hidden md:flex space-x-8">
                <a href="{{ route('dashboard') }}" class="text-slate-600 hover:text-slate-900 transition">
                    Dashboard
                </a>
            </div>

            <!-- Right Side Items -->
            <div class="flex items-center space-x-6">
                <!-- Notifications -->
                <button class="relative text-slate-600 hover:text-slate-900">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                    </svg>
                    <span class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-white transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">3</span>
                </button>

                <!-- User Profile Dropdown -->
                <div class="relative group">
                    <button class="flex items-center space-x-2 text-slate-600 hover:text-slate-900">
                        <img src="https://via.placeholder.com/32" alt="User" class="w-8 h-8 rounded-full">
                        <span class="hidden sm:inline text-sm">{{ Auth::user()->name ?? 'Admin' }}</span>
                    </button>
                    
                    <!-- Dropdown Menu -->
                    <div class="absolute right-0 w-48 mt-0 bg-white rounded-lg shadow-xl hidden group-hover:block z-50">
                        <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-100">Profile</a>
                        <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-100">Settings</a>
                        <hr class="my-1">
                        <form method="POST" action="{{ route('logout') }}" class="block">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 text-sm text-slate-700 hover:bg-slate-100">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>