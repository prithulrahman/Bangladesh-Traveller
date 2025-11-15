<section class="space-y-6">
    <p class="text-slate-700">
        Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.
    </p>

    <button
        @click="$dispatch('open-modal', 'confirm-user-deletion')"
        class="bg-gradient-to-r from-red-600 to-red-700 text-white font-bold py-3 px-6 rounded-xl hover:from-red-700 hover:to-red-800 transition-all duration-200 shadow-lg"
    >
        Delete Account
    </button>

    <!-- Delete Confirmation Modal -->
    <div x-show="$dispatch('close')" x-cloak class="fixed inset-0 z-50 overflow-y-auto" style="display: none;" @open-modal.window="open = true; $nextTick(() => setTimeout(() => open = false, 0))" x-init="open = false">
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0" style="display: none;" x-show="open" @close.window="open = false">
            <!-- Background overlay -->
            <div class="fixed inset-0 bg-black/60 transition-opacity" @click="$dispatch('close')"></div>

            <!-- Modal box -->
            <div class="inline-block align-bottom bg-white rounded-2xl border border-slate-300 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" x-show="open" @click.stop>
                <form method="post" action="{{ route('profile.destroy') }}" class="space-y-6 p-8">
                    @csrf
                    @method('delete')

                    <div>
                        <h2 class="text-2xl font-black text-slate-900">
                            Confirm Account Deletion
                        </h2>
                        <p class="mt-3 text-slate-700">
                            Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.
                        </p>
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-bold text-slate-800 mb-2">Password</label>
                        <input
                            id="password"
                            name="password"
                            type="password"
                            class="w-full px-4 py-3 border-2 border-slate-300 rounded-xl bg-slate-50 focus:outline-none focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-all text-slate-900 font-medium placeholder-slate-500"
                            placeholder="Enter your password"
                        />
                        @error('password', 'userDeletion')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex justify-end gap-4 pt-6 border-t border-slate-300">
                        <button
                            type="button"
                            @click="$dispatch('close')"
                            class="px-6 py-2 border-2 border-slate-300 text-slate-900 font-bold rounded-lg hover:bg-slate-100 transition-all duration-200"
                        >
                            Cancel
                        </button>
                        <button
                            type="submit"
                            class="bg-gradient-to-r from-red-600 to-red-700 text-white font-bold py-2 px-6 rounded-lg hover:from-red-700 hover:to-red-800 transition-all duration-200"
                        >
                            Delete Account
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
