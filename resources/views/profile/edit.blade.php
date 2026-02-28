<x-admin-layout>
    <x-slot name="title">Profile</x-slot>
    <x-slot name="subtitle">Kelola informasi akun dan keamanan Anda</x-slot>

    <div class="space-y-6">
        <!-- Update Profile Information -->
        <div class="bg-white rounded-xl shadow-md p-6">
            <div class="max-w-3xl">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <!-- Update Password -->
        <div class="bg-white rounded-xl shadow-md p-6">
            <div class="max-w-3xl">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <!-- Delete Account -->
        <div class="bg-white rounded-xl shadow-md p-6 border-2 border-red-200">
            <div class="max-w-3xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-admin-layout>
