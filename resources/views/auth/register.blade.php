<x-app-layout title="Register">
    <div class="min-h-screen bg-gradient-to-br from-slate-50 to-blue-50 flex items-center justify-center px-4 sm:px-6 lg:px-8 py-6">
        <div class="w-full max-w-2xl">
            <!-- Header -->
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-14 h-14 rounded-xl bg-gradient-to-br from-blue-500 to-cyan-400 shadow-lg mb-4">
                    <span class="text-2xl font-black text-white">BT</span>
                </div>
                <h1 class="text-3xl font-black text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-600">Complete Your Profile</h1>
                <p class="text-slate-600 mt-2 font-medium">Tell us more about yourself</p>
            </div>

            <!-- Form Container -->
            <div class="bg-white rounded-2xl shadow-xl border border-slate-200 overflow-hidden">
                <!-- Form Header Accent -->
                <div class="h-1 bg-gradient-to-r from-blue-600 to-cyan-600"></div>

                <form class="p-8 sm:p-10 space-y-6">
                    <!-- First & Last Name Row -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="firstName" class="block text-sm font-semibold text-slate-700 mb-2.5">First Name</label>
                            <input type="text" id="firstName" name="firstName" required placeholder="John" class="w-full px-4 py-2.5 border-2 border-slate-200 rounded-lg focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-all duration-300 placeholder-slate-400">
                        </div>
                        <div>
                            <label for="lastName" class="block text-sm font-semibold text-slate-700 mb-2.5">Last Name</label>
                            <input type="text" id="lastName" name="lastName" required placeholder="Doe" class="w-full px-4 py-2.5 border-2 border-slate-200 rounded-lg focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-all duration-300 placeholder-slate-400">
                        </div>
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-semibold text-slate-700 mb-2.5">Email Address</label>
                        <input type="email" id="email" name="email" required placeholder="your@email.com" class="w-full px-4 py-2.5 border-2 border-slate-200 rounded-lg focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-all duration-300 placeholder-slate-400">
                    </div>

                    <!-- Password Row -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="password" class="block text-sm font-semibold text-slate-700 mb-2.5">Password</label>
                            <input type="password" id="password" name="password" required placeholder="••••••••" class="w-full px-4 py-2.5 border-2 border-slate-200 rounded-lg focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-all duration-300 placeholder-slate-400">
                        </div>
                        <div>
                            <label for="confirmPassword" class="block text-sm font-semibold text-slate-700 mb-2.5">Confirm Password</label>
                            <input type="password" id="confirmPassword" name="confirmPassword" required placeholder="••••••••" class="w-full px-4 py-2.5 border-2 border-slate-200 rounded-lg focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-all duration-300 placeholder-slate-400">
                        </div>
                    </div>

                    <!-- Phone & Date of Birth Row -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="phone" class="block text-sm font-semibold text-slate-700 mb-2.5">Phone Number</label>
                            <input type="tel" id="phone" name="phone" required placeholder="+880 1..." class="w-full px-4 py-2.5 border-2 border-slate-200 rounded-lg focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-all duration-300 placeholder-slate-400">
                        </div>
                        <div>
                            <label for="dob" class="block text-sm font-semibold text-slate-700 mb-2.5">Date of Birth</label>
                            <input type="date" id="dob" name="dob" required class="w-full px-4 py-2.5 border-2 border-slate-200 rounded-lg focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-all duration-300">
                        </div>
                    </div>

                    <!-- Username -->
                    <div>
                        <label for="username" class="block text-sm font-semibold text-slate-700 mb-2.5">Username</label>
                        <input type="text" id="username" name="username" required placeholder="Choose your unique username" class="w-full px-4 py-2.5 border-2 border-slate-200 rounded-lg focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-all duration-300 placeholder-slate-400">
                    </div>

                    <!-- Bio -->
                    <div>
                        <label for="bio" class="block text-sm font-semibold text-slate-700 mb-2.5">
                            Bio <span class="text-red-500">*</span>
                            <span class="text-xs font-normal text-slate-500">(Minimum 50 words)</span>
                        </label>
                        <textarea id="bio" name="bio" minlength="50" required placeholder="Write a short paragraph about yourself. Share your travel interests, favorite destinations, and what makes you unique..." class="w-full px-4 py-3 border-2 border-slate-200 rounded-lg focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-all duration-300 placeholder-slate-400 min-h-32 resize-none"></textarea>
                        <p class="text-xs text-slate-500 mt-2">Help other travellers get to know you better</p>
                    </div>

                    <!-- Profile Picture -->
                    <div>
                        <label for="profilePic" class="block text-sm font-semibold text-slate-700 mb-2.5">Profile Picture</label>
                        <div class="relative">
                            <input type="file" id="profilePic" name="profilePic" accept="image/*" required class="hidden" onchange="updateFileName(this)">
                            <label for="profilePic" class="flex items-center justify-center w-full px-6 py-8 border-2 border-dashed border-slate-300 rounded-lg cursor-pointer hover:border-blue-600 hover:bg-blue-50 transition-all duration-300 group">
                                <div class="text-center">
                                    <div class="text-4xl mb-2 group-hover:scale-125 transition-transform duration-300">📸</div>
                                    <p class="text-sm font-semibold text-slate-700">Click to upload or drag & drop</p>
                                    <p class="text-xs text-slate-500 mt-1">PNG, JPG, GIF up to 10MB (400x400px recommended)</p>
                                </div>
                            </label>
                            <p id="fileName" class="text-xs text-slate-500 mt-2">No file chosen</p>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-cyan-600 text-white font-bold py-3 rounded-lg hover:from-blue-700 hover:to-cyan-700 transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/50 mt-8">
                        Complete Registration
                    </button>

                    <!-- Progress Indicator -->
                    <div class="pt-6 border-t border-slate-200">
                        <p class="text-xs text-slate-600 text-center">This will take less than 2 minutes ⚡</p>
                    </div>
                </form>
            </div>

            <!-- Trust Badges -->
            <div class="mt-8 bg-white rounded-xl p-6 border border-slate-200">
                <p class="text-xs text-slate-600 text-center mb-4 font-semibold">Trusted by travellers worldwide</p>
                <div class="flex justify-center items-center gap-6 flex-wrap">
                    <div class="text-center">
                        <p class="text-lg font-bold text-blue-600">10K+</p>
                        <p class="text-xs text-slate-600">Active Members</p>
                    </div>
                    <div class="w-px h-8 bg-slate-200"></div>
                    <div class="text-center">
                        <p class="text-lg font-bold text-blue-600">50+</p>
                        <p class="text-xs text-slate-600">Destinations</p>
                    </div>
                    <div class="w-px h-8 bg-slate-200"></div>
                    <div class="text-center">
                        <p class="text-lg font-bold text-blue-600">⭐ 4.8</p>
                        <p class="text-xs text-slate-600">Average Rating</p>
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
                fileName.classList.remove('text-slate-500');
                fileName.classList.add('text-green-600', 'font-semibold');
            }
        }

        // Drag & drop functionality
        const fileInput = document.getElementById('profilePic');
        const fileLabel = fileInput.parentElement;

        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            fileLabel.addEventListener(eventName, preventDefaults, false);
        });

        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }

        ['dragenter', 'dragover'].forEach(eventName => {
            fileLabel.addEventListener(eventName, highlight, false);
        });

        ['dragleave', 'drop'].forEach(eventName => {
            fileLabel.addEventListener(eventName, unhighlight, false);
        });

        function highlight(e) {
            fileLabel.classList.add('border-blue-600', 'bg-blue-50');
        }

        function unhighlight(e) {
            fileLabel.classList.remove('border-blue-600', 'bg-blue-50');
        }

        fileLabel.addEventListener('drop', handleDrop, false);

        function handleDrop(e) {
            const dt = e.dataTransfer;
            const files = dt.files;
            fileInput.files = files;
            updateFileName(fileInput);
        }
    </script>
</x-app-layout>