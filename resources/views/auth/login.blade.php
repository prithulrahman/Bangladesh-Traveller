<x-app-layout title="Login">
    <div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-cyan-50 flex items-center justify-center px-4 sm:px-6 lg:px-8 py-6 relative overflow-hidden">
        <!-- Subtle background accents -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-bl from-cyan-100 to-transparent rounded-full blur-3xl opacity-30 -z-10"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-tr from-blue-100 to-transparent rounded-full blur-3xl opacity-30 -z-10"></div>

        <div class="w-full max-w-md relative z-10">
            <!-- Header -->
            <div class="text-center mb-10">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-gradient-to-br from-blue-600 to-cyan-600 shadow-lg mb-5 ring-4 ring-blue-100">
                    <span class="text-3xl font-black text-white">BT</span>
                </div>
                <h1 class="text-4xl font-black text-slate-900 mb-3">Welcome Back</h1>
                <p class="text-slate-600 text-lg">Explore Bangladesh's hidden gems</p>
            </div>

            <!-- Form Container -->
            <div class="bg-slate-200 rounded-2xl shadow-2xl border border-slate-300 overflow-hidden backdrop-blur-sm">
                <!-- Form Header Accent Bar -->
                <div class="h-2 bg-gradient-to-r from-blue-500 via-cyan-500 to-blue-500"></div>

                <form action="{{ route('login') }}" method="post" autocomplete="off" class="p-8 space-y-6">
                    @csrf
                    <!-- Email Address -->
                    <div>
                        <label for="email" class="block text-sm font-bold text-slate-800 mb-3">Email Address</label>
                        <div class="relative group">
                            <input type="email" id="email" name="email" required placeholder="you@example.com" class="w-full px-5 py-3 border-2 border-slate-300 rounded-xl bg-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all placeholder-slate-500 text-slate-900 font-medium group-hover:border-slate-400">
                        </div>
                        @error('email')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div>
                        <div class="flex justify-between items-center mb-3">
                            <label for="password" class="block text-sm font-bold text-slate-800">Password</label>
                            {{-- <a href="#" class="text-sm font-semibold text-blue-600 hover:text-blue-700 hover:underline transition-all">Forgot password?</a> --}}
                        </div>
                        <div class="relative group">
                            <input type="password" id="password" name="password" required placeholder="••••••••" class="w-full px-5 py-3 border-2 border-slate-300 rounded-xl bg-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all placeholder-slate-500 text-slate-900 font-medium group-hover:border-slate-400">
                        </div>
                        @error('password')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center gap-3 pt-2">
                        <input type="checkbox" id="remember" name="remember" class="w-5 h-5 rounded-lg border-2 border-slate-300 text-blue-600 cursor-pointer accent-blue-600">
                        <label for="remember" class="text-sm font-medium text-slate-700 cursor-pointer">Keep me signed in</label>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="w-full mt-8 bg-gradient-to-r from-blue-600 to-cyan-600 text-white font-bold py-3 rounded-xl hover:from-blue-700 hover:to-cyan-700 transition-all duration-200 shadow-md hover:shadow-lg transform hover:scale-105 active:scale-95">
                        Sign In
                    </button>

                    <!-- Divider -->
                    <div class="relative mt-8">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-slate-200"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-3 bg-white text-slate-500 font-medium">New to Bangladesh Travellers?</span>
                        </div>
                    </div>

                    <!-- Sign Up Link -->
                    <a href="/register" class="w-full block text-center py-3 border-2 border-blue-200 text-blue-600 font-bold rounded-xl hover:bg-blue-50 transition-all duration-200">
                        Create Account
                    </a>
                </form>
            </div>

            <!-- Benefits -->
            <div class="mt-8 grid grid-cols-3 gap-3">
                <div class="bg-white/60 backdrop-blur-sm rounded-xl p-4 border border-slate-100 text-center hover:border-blue-200 transition-all">
                    <div class="text-2xl mb-2">✈️</div>
                    <p class="text-xs font-semibold text-slate-700">Explore</p>
                </div>
                <div class="bg-white/60 backdrop-blur-sm rounded-xl p-4 border border-slate-100 text-center hover:border-cyan-200 transition-all">
                    <div class="text-2xl mb-2">🗺️</div>
                    <p class="text-xs font-semibold text-slate-700">Discover</p>
                </div>
                <div class="bg-white/60 backdrop-blur-sm rounded-xl p-4 border border-slate-100 text-center hover:border-blue-200 transition-all">
                    <div class="text-2xl mb-2">👥</div>
                    <p class="text-xs font-semibold text-slate-700">Connect</p>
                </div>
            </div>

            <!-- Footer Note -->
            <p class="text-center text-xs text-slate-500 mt-6">🔐 Secured & encrypted connection</p>
        </div>
    </div>
</x-app-layout>