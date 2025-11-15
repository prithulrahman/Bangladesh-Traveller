<x-app-layout title="Profile">
    <div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-cyan-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <!-- Profile Card -->
            <div class="bg-white rounded-3xl border border-slate-200 shadow-xl overflow-hidden">
                <div class="flex flex-col lg:flex-row gap-8 p-8 lg:p-12">
                    <!-- Left Section: Avatar & Basic Info -->
                    <div class="lg:w-72 flex flex-col gap-6 items-start">
                        <!-- Avatar -->
                        <div class="w-full">
                            @if(Auth::user()->profile_picture)
                                <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="Profile Picture" class="w-full aspect-[9/11] rounded-2xl object-cover border border-slate-300 shadow-lg">
                            @else
                                <div class="w-full aspect-[9/11] rounded-2xl bg-gradient-to-br from-blue-600 to-cyan-600 flex items-center justify-center shadow-lg border border-slate-300">
                                    <span class="text-6xl font-black text-white">{{ substr(Auth::user()->first_name, 0, 1) }}</span>
                                </div>
                            @endif
                        </div>

                        <!-- Name Block -->
                        <div class="w-full">
                            <h1 class="text-2xl lg:text-3xl font-black text-slate-900 leading-tight">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h1>
                            <p class="text-slate-600 text-lg mt-2">{{ Auth::user()->username }}</p>
                        </div>

                        <!-- Edit Button -->
                        <a href="{{ route('profile.edit') }}" class="w-full bg-gradient-to-r from-blue-600 to-cyan-600 text-white font-bold py-3 rounded-xl hover:from-blue-700 hover:to-cyan-700 transition-all duration-200 text-center shadow-lg">
                            Edit Profile
                        </a>
                    </div>

                    <!-- Right Section: Details -->
                    <div class="flex-1 space-y-8">
                        <!-- Personal & Account Section -->
                        <div>
                            <h2 class="text-xl font-bold text-slate-900 mb-6 pb-3 border-b border-slate-300">Personal & Account</h2>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <!-- Full Name -->
                                <div>
                                    <label class="text-xs font-semibold text-slate-600 uppercase tracking-wide">Full Name</label>
                                    <div class="mt-2 px-4 py-3 bg-slate-50 border border-slate-300 rounded-lg text-slate-900 font-semibold">{{ Auth::user()->name }} {{ Auth::user()->last_name }}</div>
                                </div>

                                <!-- Username -->
                                <div>
                                    <label class="text-xs font-semibold text-slate-600 uppercase tracking-wide">Username</label>
                                    <div class="mt-2 px-4 py-3 bg-slate-50 border border-slate-300 rounded-lg text-slate-900 font-semibold">{{ Auth::user()->username }}</div>
                                </div>

                                <!-- Email -->
                                <div>
                                    <label class="text-xs font-semibold text-slate-600 uppercase tracking-wide">Email</label>
                                    <div class="mt-2 px-4 py-3 bg-slate-50 border border-slate-300 rounded-lg text-slate-900 font-semibold break-all">{{ Auth::user()->email }}</div>
                                </div>

                                <!-- Phone -->
                                <div>
                                    <label class="text-xs font-semibold text-slate-600 uppercase tracking-wide">Phone</label>
                                    <div class="mt-2 px-4 py-3 bg-slate-50 border border-slate-300 rounded-lg text-slate-900 font-semibold">{{ Auth::user()->phone ?? 'Not provided' }}</div>
                                </div>

                                <!-- Date of Birth -->
                                <div>
                                    <label class="text-xs font-semibold text-slate-600 uppercase tracking-wide">Date of Birth</label>
                                    <div class="mt-2 px-4 py-3 bg-slate-50 border border-slate-300 rounded-lg text-slate-900 font-semibold">{{ Auth::user()->dob ? Auth::user()->dob->format('Y-m-d') : 'Not provided' }}</div>
                                </div>

                                <!-- Account Created -->
                                <div>
                                    <label class="text-xs font-semibold text-slate-600 uppercase tracking-wide">Member Since</label>
                                    <div class="mt-2 px-4 py-3 bg-slate-50 border border-slate-300 rounded-lg text-slate-900 font-semibold">{{ Auth::user()->created_at->format('M d, Y') }}</div>
                                </div>
                            </div>
                        </div>

                        <!-- Bio Section -->
                        <div>
                            <h2 class="text-xl font-bold text-slate-900 mb-4">About</h2>
                            <div class="px-6 py-4 bg-slate-50 border border-slate-300 rounded-lg">
                                <p class="text-slate-700 leading-relaxed">{{ Auth::user()->bio ?? 'No bio added yet.' }}</p>
                            </div>
                        </div>

                        <!-- Account Stats -->
                        <div>
                            <h2 class="text-xl font-bold text-slate-900 mb-6 pb-3 border-b border-slate-300">Account Stats</h2>
                            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                                <div class="bg-gradient-to-br from-blue-100 to-cyan-100 border border-blue-300 rounded-lg p-4 text-center">
                                    <div class="text-2xl font-black text-blue-600">{{ Auth::user()->bookings_count ?? 0 }}</div>
                                    <div class="text-xs text-slate-700 mt-2">Total Bookings</div>
                                </div>
                                <div class="bg-gradient-to-br from-blue-100 to-cyan-100 border border-blue-300 rounded-lg p-4 text-center">
                                    <div class="text-2xl font-black text-blue-600">{{ Auth::user()->reviews_count ?? 0 }}</div>
                                    <div class="text-xs text-slate-700 mt-2">Reviews</div>
                                </div>
                                <div class="bg-gradient-to-br from-blue-100 to-cyan-100 border border-blue-300 rounded-lg p-4 text-center">
                                    <div class="text-2xl font-black text-blue-600">⭐{{ Auth::user()->rating ?? '5.0' }}</div>
                                    <div class="text-xs text-slate-700 mt-2">Rating</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
