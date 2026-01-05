<x-app-layout title="Register">
    <div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-cyan-50 flex items-center justify-center px-4 sm:px-6 lg:px-8 py-8 relative overflow-hidden">
        <!-- Subtle background accents -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-bl from-cyan-100 to-transparent rounded-full blur-3xl opacity-30 -z-10"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-tr from-blue-100 to-transparent rounded-full blur-3xl opacity-30 -z-10"></div>

        <div class="w-full max-w-2xl relative z-10">
            <!-- Header -->
            <div class="text-center mb-10">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-gradient-to-br from-blue-600 to-cyan-600 shadow-lg mb-5 ring-4 ring-blue-100">
                    <span class="text-3xl font-black text-white">BT</span>
                </div>
                <h1 class="text-4xl font-black text-slate-900 mb-3">Join Us Today</h1>
                <p class="text-slate-600 text-lg">Start your Bangladesh travel adventure</p>
            </div>

            <!-- Form Container -->
            <div class="bg-slate-200 rounded-2xl shadow-xl border border-slate-300 overflow-hidden backdrop-blur-sm">
                <!-- Form Header Accent Bar -->
                <div class="h-2 bg-gradient-to-r from-blue-500 via-cyan-500 to-blue-500"></div>
                <form action="{{ route('register') }}" method="post" class="p-8 space-y-6" enctype="multipart/form-data">
                    @csrf
                    <!-- Name Row -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label for="first_name" class="block text-sm font-bold text-slate-800 mb-3">First Name <span class="text-red-500">*</span></label>
                            <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" required placeholder="John" class="w-full px-5 py-3 border-2 border-slate-300 rounded-xl bg-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all placeholder-slate-500 text-slate-900 font-medium hover:border-slate-400">
                            @error('first_name')
                                <span class="text-red-600 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="last_name" class="block text-sm font-bold text-slate-800 mb-3">Last Name <span class="text-red-500">*</span></label>
                            <input type="text" id="last_name" name="last_name" required value="{{ old('last_name') }}" placeholder="Doe" class="w-full px-5 py-3 border-2 border-slate-300 rounded-xl bg-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all placeholder-slate-500 text-slate-900 font-medium hover:border-slate-400">
                            @error('last_name')
                                <span class="text-red-600 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-bold text-slate-800 mb-3">Email Address <span class="text-red-500">*</span></label>
                        <input type="email" id="email" name="email" required value="{{ old('email') }}" placeholder="you@example.com" class="w-full px-5 py-3 border-2 border-slate-300 rounded-xl bg-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all placeholder-slate-500 text-slate-900 font-medium hover:border-slate-400">
                        @error('email')
                            <span class="text-red-600 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Password Row -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label for="password" class="block text-sm font-bold text-slate-800 mb-3">Password <span class="text-red-500">*</span></label>
                            <input type="password" id="password" name="password" required placeholder="••••••••" class="w-full px-5 py-3 border-2 border-slate-300 rounded-xl bg-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all placeholder-slate-500 text-slate-900 font-medium hover:border-slate-400">
                            @error('password')
                                <span class="text-red-600 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="confirmPassword" class="block text-sm font-bold text-slate-800 mb-3">Confirm Password <span class="text-red-500">*</span></label>
                            <input type="password" id="confirmPassword" name="password_confirmation" required placeholder="••••••••" class="w-full px-5 py-3 border-2 border-slate-300 rounded-xl bg-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all placeholder-slate-500 text-slate-900 font-medium hover:border-slate-400">
                        </div>
                    </div>

                    <!-- Phone & DOB -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label for="phone" class="block text-sm font-bold text-slate-800 mb-3">Phone Number <span class="text-red-500">*</span></label>
                            <input type="tel" id="phone" name="phone" required value="{{ old('phone') }}" placeholder="+880 1..." class="w-full px-5 py-3 border-2 border-slate-300 rounded-xl bg-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all placeholder-slate-500 text-slate-900 font-medium hover:border-slate-400">
                            @error('phone')
                                <span class="text-red-600 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="dob" class="block text-sm font-bold text-slate-800 mb-3">Date of Birth <span class="text-red-500">*</span></label>
                            <input type="date" id="dob" name="dob" required value="{{ old('dob') }}" class="w-full px-5 py-3 border-2 border-slate-300 rounded-xl bg-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all text-slate-900 font-medium hover:border-slate-400">
                            @error('dob')
                                <span class="text-red-600 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Username -->
                    <div>
                        <label for="username" class="block text-sm font-bold text-slate-800 mb-3">Username <span class="text-red-500">*</span></label>
                        <input type="text" id="username" name="username" required value="{{ old('username') }}" placeholder="Choose your unique username" class="w-full px-5 py-3 border-2 border-slate-300 rounded-xl bg-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all placeholder-slate-500 text-slate-900 font-medium hover:border-slate-400">
                        @error('username')
                            <span class="text-red-600 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Bio -->
                    <div>
                        <label for="bio" class="block text-sm font-bold text-slate-800 mb-3">Bio <span class="text-red-500">*</span> <span class="text-xs font-normal text-slate-600">(Min 50 words)</span></label>
                        <textarea id="bio" name="bio" minlength="50" required placeholder="Tell us about yourself and your travel interests..." class="w-full px-5 py-3 border-2 border-slate-300 rounded-xl bg-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all placeholder-slate-500 text-slate-900 font-medium min-h-28 resize-none hover:border-slate-400">{{ old('bio') }}</textarea>
                        @error('bio')
                            <span class="text-red-600 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Profile Picture -->
                    <div>
                        <label for="profile_picture" class="block mb-2.5 text-sm font-medium text-heading">Profile Picture <span class="text-red-500">*</span></label>
                        {{-- <input type="file" id="profile_picture" name="profile_picture" accept="image/*" required 
                        class="rounded-lg border border-gray-200 bg-gray-300 p-2 w-full
                        file:bg-gray-50 file:border-0"> --}}

                        <label for="profile_picture" class="sr-only">Choose file</label>
                        <input type="file" name="profile_picture" id="profile_picture" 
                            class="block shadow-sm rounded-lg text-sm 
                            focus:z-10 focus:border-blue-200 focus:ring-blue-200 focus:ring-1 bg-slate-200 
                            disabled:opacity-50 disabled:pointer-events-none
                            file:border-0
                            file:me-4
                            file:py-3 file:px-4
                            file:rounded-lg
                            file:text-sm file:font-semibold
                            {{-- file:bg-gradient-to-r file:from-blue-700 file:via-blue-600 file:to-blue-500 --}}
                            file:bg-slate-300
                            file:text-slate-700
                            duration-200
                            cursor-pointer
                            hover:file:bg-slate-400
                            hover:file:shadow-lg
                        ">
                        
                        {{-- <label for="profile_picture" class="flex flex-col items-center justify-center w-full px-6 py-10 border-2 border-dashed border-slate-400 rounded-2xl cursor-pointer hover:border-blue-500 hover:bg-blue-100 transition-all group bg-white">
                            <div class="text-center">
                                <div class="text-5xl mb-3 group-hover:scale-110 transition-transform duration-200">📸</div>
                                <p class="text-sm font-bold text-slate-700">Click to upload or drag & drop</p>
                                <p class="text-xs text-slate-600 mt-1">PNG, JPG, GIF (max 10MB)</p>
                            </div>
                        </label> --}}
                        @error('profile_picture')
                            <span class="text-red-600 text-xs">{{ $message }}</span>
                        @enderror
                        {{-- <p id="fileName" class="text-xs text-slate-600 mt-3">No file chosen</p> --}}
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="w-full mt-8 bg-gradient-to-r from-blue-600 to-cyan-600 text-white font-bold py-3 rounded-xl hover:from-blue-700 hover:to-cyan-700 transition-all duration-200 shadow-md hover:shadow-lg transform hover:scale-102">
                        Create Account
                    </button>

                    <!-- Info -->
                    {{-- <div class="text-center pt-4 border-t border-slate-200">
                        <p class="text-xs text-slate-600">Takes less than 2 minutes ⚡</p>
                    </div> --}}
                </form>
            </div>

            <!-- Trust Section -->
            <div class="mt-8 bg-white/70 backdrop-blur-sm rounded-xl p-6 border border-slate-200 text-center">
                <p class="text-xs font-bold text-slate-700 mb-4 uppercase tracking-widest">Trusted by travelers</p>
                <div class="flex justify-around items-center">
                    <div>
                        <p class="text-xl font-black text-blue-600">10K+</p>
                        <p class="text-xs text-slate-600 font-semibold">Members</p>
                    </div>
                    <div class="h-10 w-px bg-slate-300"></div>
                    <div>
                        <p class="text-xl font-black text-cyan-600">50+</p>
                        <p class="text-xs text-slate-600 font-semibold">Destinations</p>
                    </div>
                    <div class="h-10 w-px bg-slate-300"></div>
                    <div>
                        <p class="text-xl font-black text-blue-600">⭐ 4.8</p>
                        <p class="text-xs text-slate-600 font-semibold">Rating</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function updateFileName(input) {
            const fileName = document.getElementById('fileName');
            if (input.files && input.files[0]) {
                fileName.textContent = '✓ ' + input.files[0].name;
                fileName.classList.add('text-green-600', 'font-semibold');
            }
        }

        const fileInput = document.getElementById('profile_picture');
        const fileLabel = fileInput.parentElement;
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(e => fileLabel.addEventListener(e, e => e.preventDefault()));
        ['dragenter', 'dragover'].forEach(e => fileLabel.addEventListener(e, () => fileLabel.classList.add('border-blue-500', 'bg-blue-50')));
        ['dragleave', 'drop'].forEach(e => fileLabel.addEventListener(e, () => fileLabel.classList.remove('border-blue-500', 'bg-blue-50')));
        fileLabel.addEventListener('drop', (e) => { fileInput.files = e.dataTransfer.files; updateFileName(fileInput); });
    </script>
</x-app-layout>