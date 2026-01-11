<section class="space-y-6">
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="space-y-6">
        @csrf
        @method('patch')

        <!-- First Name -->
        <div>
            <label for="first_name" class="block text-sm font-bold text-slate-800 mb-2">First Name</label>
            <input id="first_name" name="first_name" type="text" class="w-full px-4 py-3 border-2 border-slate-300 rounded-xl bg-slate-50 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all text-slate-900 font-medium placeholder-slate-500" value="{{ old('first_name', $user->first_name) }}" required autofocus />
            @error('first_name')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Last Name -->
        <div>
            <label for="last_name" class="block text-sm font-bold text-slate-800 mb-2">Last Name</label>
            <input id="last_name" name="last_name" type="text" class="w-full px-4 py-3 border-2 border-slate-300 rounded-xl bg-slate-50 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all text-slate-900 font-medium placeholder-slate-500" value="{{ old('last_name', $user->last_name) }}" required />
            @error('last_name')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Username -->
        <div>
            <label for="username" class="block text-sm font-bold text-slate-800 mb-2">Username</label>
            <input id="username" name="username" type="text" class="w-full px-4 py-3 border-2 border-slate-300 rounded-xl bg-slate-50 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all text-slate-900 font-medium placeholder-slate-500" value="{{ old('username', $user->username) }}" required />
            @error('username')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-bold text-slate-800 mb-2">Email Address</label>
            <input id="email" name="email" type="email" class="w-full px-4 py-3 border-2 border-slate-300 rounded-xl bg-slate-50 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all text-slate-900 font-medium placeholder-slate-500" value="{{ old('email', $user->email) }}" required />
            @error('email')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-4 p-4 bg-yellow-100 border border-yellow-400 rounded-lg">
                    <p class="text-sm text-yellow-900">
                        {{ __('Your email address is unverified.') }}
                        <button form="send-verification" class="font-bold text-blue-600 hover:text-blue-700 transition-colors ml-2">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>
                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 text-sm text-green-700 font-semibold">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <!-- Phone -->
        <div>
            <label for="phone" class="block text-sm font-bold text-slate-800 mb-2">Phone Number</label>
            <input id="phone" name="phone" type="tel" class="w-full px-4 py-3 border-2 border-slate-300 rounded-xl bg-slate-50 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all text-slate-900 font-medium placeholder-slate-500" value="{{ old('phone', $user->phone) }}" />
            @error('phone')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Date of Birth -->
        <div>
            <label for="dob" class="block text-sm font-bold text-slate-800 mb-2">Date of Birth</label>
            <input id="dob" name="dob" type="date" class="w-full px-4 py-3 border-2 border-slate-300 rounded-xl bg-slate-50 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all text-slate-900 font-medium" value="{{ old('dob', $user->dob) }}" />
            @error('dob')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Bio -->
        <div>
            <label for="bio" class="block text-sm font-bold text-slate-800 mb-2">Bio</label>
            <textarea id="bio" name="bio" rows="4" class="w-full px-4 py-3 border-2 border-slate-300 rounded-xl bg-slate-50 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all text-slate-900 font-medium placeholder-slate-500 resize-none" placeholder="Tell us about yourself...">{{ old('bio', $user->bio) }}</textarea>
            @error('bio')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Profile Picture -->
        <div>
            <label for="profile_picture" class="block text-sm font-bold text-slate-800 mb-2">Profile Picture</label>
            <input type="file" id="profile_picture" name="profile_picture" accept="image/*" class="hidden" onchange="updateFileName(this)">
            <label for="profile_picture" class="flex flex-col items-center justify-center w-full px-6 py-10 border-2 border-dashed border-slate-400 rounded-2xl cursor-pointer hover:border-blue-500 hover:bg-blue-50 transition-all group bg-slate-50">
                <div class="text-center">
                    <div class="text-4xl mb-3 group-hover:scale-110 transition-transform duration-200">📸</div>
                    <p class="text-sm font-bold text-slate-800">Click to upload or drag & drop</p>
                    <p class="text-xs text-slate-600 mt-1">PNG, JPG, GIF (max 10MB)</p>
                </div>
            </label>
            <p id="fileName" class="text-xs text-slate-600 mt-3">No file chosen</p>
            @if($user->profile_picture)
                <p class="text-xs text-blue-600 mt-2">✓ Current profile picture uploaded</p>
            @endif
            @error('profile_picture')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Save Button -->
        <div class="flex items-center gap-4 pt-6 border-t border-slate-300">
            <button type="submit" class="bg-gradient-to-r from-blue-600 to-cyan-600 text-white font-bold py-3 px-8 rounded-xl hover:from-blue-700 hover:to-cyan-700 transition-all duration-200 shadow-lg">
                Save Changes
            </button>

            @if (session('status') === 'profile-updated')
                <p class="text-sm text-green-600 font-semibold" x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 3000)">
                    ✓ Profile updated successfully
                </p>
            @endif
        </div>
    </form>
</section>

<script>
    function updateFileName(input) {
        const fileName = document.getElementById('fileName');
        if (input.files && input.files[0]) {
            fileName.textContent = '✓ ' + input.files[0].name;
            fileName.classList.add('text-cyan-400', 'font-semibold');
        }
    }

    const fileInput = document.getElementById('profile_picture');
    const fileLabel = fileInput.parentElement;
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(e => fileLabel.addEventListener(e, e => e.preventDefault()));
    ['dragenter', 'dragover'].forEach(e => fileLabel.addEventListener(e, () => fileLabel.classList.add('border-cyan-500', 'bg-cyan-500/10')));
    ['dragleave', 'drop'].forEach(e => fileLabel.addEventListener(e, () => fileLabel.classList.remove('border-cyan-500', 'bg-cyan-500/10')));
    fileLabel.addEventListener('drop', (e) => { fileInput.files = e.dataTransfer.files; updateFileName(fileInput); });
</script>
