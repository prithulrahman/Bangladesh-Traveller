<!-- Admin Sidebar -->
<aside class="w-64 bg-slate-900 text-white min-h-screen shadow-lg">
    <div class="p-6">
        <!-- Logo -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold text-white">Admin Menu</h2>
        </div>

        <!-- Navigation Menu -->
        <nav class="space-y-2">
            <!-- Dashboard -->
            <a href="{{ route('dashboard') }}" 
               class="flex items-center space-x-3 px-4 py-3 rounded-lg transition {{ request()->routeIs('dashboard') ? 'bg-blue-600' : 'hover:bg-slate-800' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-3m0 0l7-4 7 4M5 9v10a1 1 0 001 1h12a1 1 0 001-1V9m-9 11l4-4m0 0l4 4m-4-4V3"></path>
                </svg>
                <span>Dashboard</span>
            </a>

            <!-- Buses Management -->
            <div class="space-y-1">
                <button class="w-full flex items-center justify-between px-4 py-3 rounded-lg hover:bg-slate-800 transition group" 
                        onclick="toggleSubmenu(this)">
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m7.773-4.773a10 10 0 11-14.146 0l1.414-1.414a8 8 0 1111.314 0l-1.414 1.414z"></path>
                        </svg>
                        <span>Buses</span>
                    </div>
                    <svg class="w-4 h-4 transform transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </button>
                <div class="submenu hidden pl-4 space-y-1">
                    <a href="#" class="flex items-center space-x-3 px-4 py-2 rounded-lg text-sm hover:bg-slate-800 transition">
                        <span class="w-2 h-2 bg-blue-400 rounded-full"></span>
                        <span>All Buses</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-4 py-2 rounded-lg text-sm hover:bg-slate-800 transition">
                        <span class="w-2 h-2 bg-blue-400 rounded-full"></span>
                        <span>Add New Bus</span>
                    </a>
                </div>
            </div>

            <!-- Routes Management -->
            <div class="space-y-1">
                <button class="w-full flex items-center justify-between px-4 py-3 rounded-lg hover:bg-slate-800 transition group" 
                        onclick="toggleSubmenu(this)">
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        <span>Routes</span>
                    </div>
                    <svg class="w-4 h-4 transform transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </button>
                <div class="submenu hidden pl-4 space-y-1">
                    <a href="#" class="flex items-center space-x-3 px-4 py-2 rounded-lg text-sm hover:bg-slate-800 transition">
                        <span class="w-2 h-2 bg-blue-400 rounded-full"></span>
                        <span>All Routes</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-4 py-2 rounded-lg text-sm hover:bg-slate-800 transition">
                        <span class="w-2 h-2 bg-blue-400 rounded-full"></span>
                        <span>Add New Route</span>
                    </a>
                </div>
            </div>

            <!-- Divisions Management -->
            <div class="space-y-1">
                <button class="w-full flex items-center justify-between px-4 py-3 rounded-lg hover:bg-slate-800 transition group" 
                        onclick="toggleSubmenu(this)">
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        </svg>
                        <span>Divisions</span>
                    </div>
                    <svg class="w-4 h-4 transform transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </button>
                <div class="submenu hidden pl-4 space-y-1">
                    <a href="#" class="flex items-center space-x-3 px-4 py-2 rounded-lg text-sm hover:bg-slate-800 transition">
                        <span class="w-2 h-2 bg-blue-400 rounded-full"></span>
                        <span>All Divisions</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-4 py-2 rounded-lg text-sm hover:bg-slate-800 transition">
                        <span class="w-2 h-2 bg-blue-400 rounded-full"></span>
                        <span>Add New Division</span>
                    </a>
                </div>
            </div>

            <!-- Districts Management -->
            <div class="space-y-1">
                <button class="w-full flex items-center justify-between px-4 py-3 rounded-lg hover:bg-slate-800 transition group" 
                        onclick="toggleSubmenu(this)">
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.553-.894L9 7.882m0 0l6-3.882m-6 3.882L9 3m6 3.882l5.447-2.724A1 1 0 0121 5.618v10.764a1 1 0 01-1.553.894L15 16.118m0 0l-6 3.882m6-3.882l6 3.882"></path>
                        </svg>
                        <span>Districts</span>
                    </div>
                    <svg class="w-4 h-4 transform transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </button>
                <div class="submenu hidden pl-4 space-y-1">
                    <a href="#" class="flex items-center space-x-3 px-4 py-2 rounded-lg text-sm hover:bg-slate-800 transition">
                        <span class="w-2 h-2 bg-blue-400 rounded-full"></span>
                        <span>All Districts</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-4 py-2 rounded-lg text-sm hover:bg-slate-800 transition">
                        <span class="w-2 h-2 bg-blue-400 rounded-full"></span>
                        <span>Add New District</span>
                    </a>
                </div>
            </div>

            <!-- Users Management -->
            <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-slate-800 transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 8.048M7 18H5a2 2 0 00-2 2v1h14v-1a2 2 0 00-2-2h-2m4-11a4 4 0 11-8 0m8 0a4 4 0 00-8 0m6 11h6"></path>
                </svg>
                <span>Users</span>
            </a>

            <!-- Settings -->
            <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-slate-800 transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <span>Settings</span>
            </a>
        </nav>
    </div>
</aside>

<script>
function toggleSubmenu(button) {
    const submenu = button.nextElementSibling;
    const icon = button.querySelector('svg:last-child');
    
    submenu.classList.toggle('hidden');
    icon.classList.toggle('rotate-180');
}
</script>