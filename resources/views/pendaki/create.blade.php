<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Pendaki - Gunung Lawu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .hero-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="h-10 w-10 mr-3" onerror="this.style.display='none'">
                        <span class="text-2xl font-bold bg-gradient-to-r from-purple-600 to-indigo-600 bg-clip-text text-transparent">Gunung Lawu</span>
                    </a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-purple-600 transition">← Kembali ke Beranda</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Form Section -->
    <div class="py-12">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Success Message -->
            @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-lg">
                <div class="flex items-center">
                    <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <p>{{ session('success') }}</p>
                </div>
            </div>
            @endif

            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="hero-gradient text-white px-8 py-10">
                    <h1 class="text-3xl font-bold mb-2">Pendaftaran Pendaki</h1>
                    <p class="text-purple-100">Daftarkan diri Anda untuk mendaki Gunung Lawu</p>
                </div>

                <form action="{{ route('pendaki.store') }}" method="POST" class="p-8 space-y-6">
                    @csrf

                    <!-- No KTP -->
                    <div>
                        <label for="no_ktp" class="block text-sm font-semibold text-gray-700 mb-2">
                            No KTP <span class="text-red-500">*</span>
                        </label>
                        <input type="text" 
                               id="no_ktp" 
                               name="no_ktp" 
                               value="{{ old('no_ktp') }}"
                               class="w-full px-4 py-3 border @error('no_ktp') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition"
                               placeholder="Masukkan nomor KTP Anda"
                               required>
                        @error('no_ktp')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Nama -->
                    <div>
                        <label for="nama" class="block text-sm font-semibold text-gray-700 mb-2">
                            Nama Lengkap <span class="text-red-500">*</span>
                        </label>
                        <input type="text" 
                               id="nama" 
                               name="nama" 
                               value="{{ old('nama') }}"
                               class="w-full px-4 py-3 border @error('nama') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition"
                               placeholder="Masukkan nama lengkap Anda"
                               required>
                        @error('nama')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Alamat -->
                    <div>
                        <label for="alamat" class="block text-sm font-semibold text-gray-700 mb-2">
                            Alamat <span class="text-red-500">*</span>
                        </label>
                        <textarea id="alamat" 
                                  name="alamat" 
                                  rows="3"
                                  class="w-full px-4 py-3 border @error('alamat') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition"
                                  placeholder="Masukkan alamat lengkap Anda"
                                  required>{{ old('alamat') }}</textarea>
                        @error('alamat')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Tanggal Pendakian -->
                    <div>
                        <label for="tanggal_pendakian" class="block text-sm font-semibold text-gray-700 mb-2">
                            Tanggal Pendakian <span class="text-red-500">*</span>
                        </label>
                        <input type="date" 
                               id="tanggal_pendakian" 
                               name="tanggal_pendakian" 
                               value="{{ old('tanggal_pendakian') }}"
                               min="{{ date('Y-m-d') }}"
                               class="w-full px-4 py-3 border @error('tanggal_pendakian') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition"
                               required>
                        @error('tanggal_pendakian')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- No HP -->
                    <div>
                        <label for="no_hp" class="block text-sm font-semibold text-gray-700 mb-2">
                            No HP/WhatsApp <span class="text-red-500">*</span>
                        </label>
                        <input type="text" 
                               id="no_hp" 
                               name="no_hp" 
                               value="{{ old('no_hp') }}"
                               class="w-full px-4 py-3 border @error('no_hp') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition"
                               placeholder="Contoh: 08123456789"
                               required>
                        @error('no_hp')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Information Box -->
                    <div class="bg-blue-50 border-l-4 border-blue-500 p-4 rounded">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-blue-700">
                                    Pastikan data yang Anda masukkan benar. Data akan digunakan untuk keperluan pendakian dan keamanan.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex space-x-4">
                        <button type="submit" class="flex-1 hero-gradient text-white px-8 py-3 rounded-lg font-semibold hover:shadow-lg transition transform hover:scale-105">
                            Daftar Sekarang
                        </button>
                        <a href="{{ route('pendaki.index') }}" class="flex-1 text-center bg-gray-200 text-gray-700 px-8 py-3 rounded-lg font-semibold hover:bg-gray-300 transition">
                            Lihat Daftar Pendaki
                        </a>
                    </div>
                </form>
            </div>

            <!-- Info Cards -->
            <div class="mt-8 grid md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <div class="text-purple-600 mb-3">
                        <svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 8 8 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Aman & Terpercaya</h3>
                    <p class="text-gray-600 text-sm">Data Anda akan kami jaga dengan baik</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <div class="text-purple-600 mb-3">
                        <svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Proses Cepat</h3>
                    <p class="text-gray-600 text-sm">Pendaftaran hanya membutuhkan beberapa menit</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <div class="text-purple-600 mb-3">
                        <svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Dukungan 24/7</h3>
                    <p class="text-gray-600 text-sm">Kami siap membantu Anda kapan saja</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-gray-400">&copy; {{ date('Y') }} Gunung Lawu. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
