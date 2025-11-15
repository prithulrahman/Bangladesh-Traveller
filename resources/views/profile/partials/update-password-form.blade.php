<section class="space-y-6">
    <form method="post" action="{{ route('password.update') }}" class="space-y-6">
        @csrf
        @method('put')

        <!-- Current Password -->
        <div>
            <label for="update_password_current_password" class="block text-sm font-bold text-slate-800 mb-2">Current Password</label>
            <input id="update_password_current_password" name="current_password" type="password" class="w-full px-4 py-3 border-2 border-slate-300 rounded-xl bg-slate-50 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all text-slate-900 font-medium placeholder-slate-500" autocomplete="current-password" />
            @error('current_password', 'updatePassword')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- New Password -->
        <div>
            <label for="update_password_password" class="block text-sm font-bold text-slate-800 mb-2">New Password</label>
            <input id="update_password_password" name="password" type="password" class="w-full px-4 py-3 border-2 border-slate-300 rounded-xl bg-slate-50 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all text-slate-900 font-medium placeholder-slate-500" autocomplete="new-password" />
            @error('password', 'updatePassword')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div>
            <label for="update_password_password_confirmation" class="block text-sm font-bold text-slate-800 mb-2">Confirm New Password</label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="w-full px-4 py-3 border-2 border-slate-300 rounded-xl bg-slate-50 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all text-slate-900 font-medium placeholder-slate-500" autocomplete="new-password" />
            @error('password_confirmation', 'updatePassword')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Save Button -->
        <div class="flex items-center gap-4 pt-6 border-t border-slate-300">
            <button type="submit" class="bg-gradient-to-r from-blue-600 to-cyan-600 text-white font-bold py-3 px-8 rounded-xl hover:from-blue-700 hover:to-cyan-700 transition-all duration-200 shadow-lg">
                Update Password
            </button>

            @if (session('status') === 'password-updated')
                <p class="text-sm text-green-600 font-semibold" x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 3000)">
                    ✓ Password updated successfully
                </p>
            @endif
        </div>
    </form>
</section>
