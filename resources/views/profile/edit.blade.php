<x-app-layout title="Edit Profile">
    <div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-cyan-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto space-y-8">
            <!-- Update Profile Information -->
            <div class="bg-white rounded-3xl border border-slate-200 shadow-xl overflow-hidden">
                <div class="p-8 lg:p-12">
                    <div class="max-w-2xl">
                        <h2 class="text-3xl font-black text-slate-900 mb-2">Edit Profile</h2>
                        <p class="text-slate-600 mb-8">Update your personal information and profile details</p>
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
            </div>

            <!-- Update Password -->
            <div class="bg-white rounded-3xl border border-slate-200 shadow-xl overflow-hidden">
                <div class="p-8 lg:p-12">
                    <div class="max-w-2xl">
                        <h2 class="text-3xl font-black text-slate-900 mb-2">Change Password</h2>
                        <p class="text-slate-600 mb-8">Update your password to keep your account secure</p>
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            </div>

            <!-- Delete Account -->
            <div class="bg-white rounded-3xl border border-red-200 shadow-xl overflow-hidden">
                <div class="p-8 lg:p-12">
                    <div class="max-w-2xl">
                        <h2 class="text-3xl font-black text-slate-900 mb-2">Delete Account</h2>
                        <p class="text-slate-600 mb-8">Permanently delete your account and all associated data</p>
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
