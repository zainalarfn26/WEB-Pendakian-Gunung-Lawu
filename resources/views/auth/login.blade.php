<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Gunung Lawu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .mountain-gradient {
            background: linear-gradient(135deg, #0f766e 0%, #059669 50%, #10b981 100%);
        }
        .login-shadow {
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body class="mountain-gradient min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <!-- Back to Home Button -->
        <a href="{{ route('home') }}" class="inline-flex items-center text-white mb-6 hover:text-green-200 transition">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Kembali ke Beranda
        </a>

        <!-- Login Card -->
        <div class="bg-white rounded-2xl login-shadow overflow-hidden">
            <!-- Header with Mountain Icon -->
            <div class="mountain-gradient text-white p-8 text-center">
                <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <h1 class="text-3xl font-bold mb-2">Admin Login</h1>
                <p class="text-green-100">Sistem Pendakian Gunung Lawu</p>
            </div>

            <!-- Form Section -->
            <div class="p-8">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                                </svg>
                            </div>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" 
                                class="w-full pl-10 pr-4 py-3 border-2 border-gray-200 rounded-lg focus:border-green-600 focus:ring-2 focus:ring-green-600/20 outline-none transition">
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                            </div>
                            <input id="password" type="password" name="password" required autocomplete="current-password" 
                                class="w-full pl-10 pr-4 py-3 border-2 border-gray-200 rounded-lg focus:border-green-600 focus:ring-2 focus:ring-green-600/20 outline-none transition">
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center justify-between">
                        <label for="remember_me" class="inline-flex items-center cursor-pointer">
                            <input id="remember_me" type="checkbox" name="remember" 
                                class="w-4 h-4 text-green-600 border-gray-300 rounded focus:ring-green-600">
                            <span class="ml-2 text-sm text-gray-600">Ingat Saya</span>
                        </label>
                    </div>

                    <!-- Login Button -->
                    <button type="submit" class="w-full bg-gradient-to-r from-green-600 to-green-700 text-white font-bold py-3 rounded-lg hover:from-green-700 hover:to-green-800 transition shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                        Masuk ke Dashboard
                    </button>
                </form>

                <!-- Footer Note -->
                <div class="mt-6 text-center">
                    <p class="text-sm text-gray-500">
                        <svg class="w-4 h-4 inline-block mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                        </svg>
                        Hanya untuk administrator sistem
                    </p>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <p class="text-center text-white mt-6 text-sm">
            &copy; {{ date('Y') }} Gunung Lawu. Sistem Pendakian.
        </p>
    </div>
</body>
</html>
