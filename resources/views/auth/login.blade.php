<x-app-layout title="Login">
    <div class="min-h-screen bg-gradient-to-br from-slate-50 to-blue-50 flex items-center justify-center px-4 sm:px-6 lg:px-8 py-6">
        <div class="w-full max-w-md">
            <!-- Header -->
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-14 h-14 rounded-xl bg-gradient-to-br from-blue-500 to-cyan-400 shadow-lg mb-4">
                    <span class="text-2xl font-black text-white">BT</span>
                </div>
                <h1 class="text-3xl font-black text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-600">Create Account</h1>
                <p class="text-slate-600 mt-2 font-medium">Join Bangladesh Travellers today</p>
            </div>

            <!-- Form Container -->
            <div class="bg-white rounded-2xl shadow-xl border border-slate-200 overflow-hidden">
                <!-- Form Header Accent -->
                <div class="h-1 bg-gradient-to-r from-blue-600 to-cyan-600"></div>

                <form action="/signup" method="post" autocomplete="off" class="p-8 sm:p-10 space-y-5">
                    <!-- Account Type -->
                    <div>
                        <label for="role" class="block text-sm font-semibold text-slate-700 mb-2.5">Account Type</label>
                        <select id="role" name="role" required class="w-full px-4 py-2.5 border-2 border-slate-200 rounded-lg focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-all duration-300 bg-white text-slate-900 font-medium">
                            <option value="">Select account type...</option>
                            <option value="user">Traveller</option>
                            <option value="admin">Business Partner</option>
                        </select>
                    </div>

                    <!-- Full Name -->
                    <div>
                        <label for="fullname" class="block text-sm font-semibold text-slate-700 mb-2.5">Full Name</label>
                        <input type="text" id="fullname" name="fullname" required placeholder="Enter your full name" class="w-full px-4 py-2.5 border-2 border-slate-200 rounded-lg focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-all duration-300 placeholder-slate-400">
                    </div>

                    <!-- Email Address -->
                    <div>
                        <label for="email" class="block text-sm font-semibold text-slate-700 mb-2.5">Email Address</label>
                        <input type="email" id="email" name="email" required placeholder="your@email.com" class="w-full px-4 py-2.5 border-2 border-slate-200 rounded-lg focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-all duration-300 placeholder-slate-400">
                    </div>

                    <!-- Username -->
                    <div>
                        <label for="username" class="block text-sm font-semibold text-slate-700 mb-2.5">Username</label>
                        <input type="text" id="username" name="username" required placeholder="Choose your username" class="w-full px-4 py-2.5 border-2 border-slate-200 rounded-lg focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-all duration-300 placeholder-slate-400">
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-semibold text-slate-700 mb-2.5">Password</label>
                        <input type="password" id="password" name="password" required minlength="6" placeholder="At least 6 characters" class="w-full px-4 py-2.5 border-2 border-slate-200 rounded-lg focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-all duration-300 placeholder-slate-400">
                        <p class="text-xs text-slate-500 mt-1.5">Password must be at least 6 characters</p>
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="confirm_password" class="block text-sm font-semibold text-slate-700 mb-2.5">Confirm Password</label>
                        <input type="password" id="confirm_password" name="confirm_password" required minlength="6" placeholder="Re-enter your password" class="w-full px-4 py-2.5 border-2 border-slate-200 rounded-lg focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-all duration-300 placeholder-slate-400">
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-cyan-600 text-white font-bold py-3 rounded-lg hover:from-blue-700 hover:to-cyan-700 transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/50 mt-6">
                        Create Account
                    </button>

                    <!-- Already have account -->
                    <div class="pt-4 text-center border-t border-slate-200">
                        <p class="text-slate-600 text-sm">Already have an account? 
                            <a href="/login" class="font-bold text-blue-600 hover:text-blue-700 transition-colors duration-300">Sign In</a>
                        </p>
                    </div>
                </form>
            </div>

            <!-- Features -->
            <div class="mt-8 grid grid-cols-3 gap-4">
                <div class="text-center">
                    <div class="text-2xl mb-2">✈️</div>
                    <p class="text-xs font-semibold text-slate-600">Explore</p>
                </div>
                <div class="text-center">
                    <div class="text-2xl mb-2">🌍</div>
                    <p class="text-xs font-semibold text-slate-600">Discover</p>
                </div>
                <div class="text-center">
                    <div class="text-2xl mb-2">📸</div>
                    <p class="text-xs font-semibold text-slate-600">Share</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>