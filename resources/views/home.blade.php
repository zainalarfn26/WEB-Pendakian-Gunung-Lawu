<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gunung Lawu - Pendakian 3265 MDPL</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .hero-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .text-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="h-10 w-10 mr-3" onerror="this.style.display='none'">
                    <span class="text-2xl font-bold text-gradient">Gunung Lawu</span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#sejarah" class="text-gray-700 hover:text-purple-600 transition">Sejarah</a>
                    <a href="#geografis" class="text-gray-700 hover:text-purple-600 transition">Geografis</a>
                    <a href="#peraturan" class="text-gray-700 hover:text-purple-600 transition">Peraturan</a>
                    <a href="#larangan" class="text-gray-700 hover:text-purple-600 transition">Larangan</a>
                    <a href="{{ route('pendaki.create') }}" class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white px-6 py-2 rounded-full hover:shadow-lg transition">Daftar Sekarang</a>
                    @auth
                        <a href="{{ route('admin.dashboard') }}" class="text-gray-700 hover:text-purple-600 transition">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-700 hover:text-purple-600 transition">Login Admin</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-gradient text-white pt-32 pb-20 mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
                        Pendakian<br>Gunung Lawu<br>
                        <span class="text-yellow-300">3265 MDPL</span>
                    </h1>
                    <p class="text-xl mb-8 text-purple-100">Menyatu dengan Keindahan Alam yang Menakjubkan</p>
                    <div class="flex space-x-4">
                        <a href="{{ route('pendaki.create') }}" class="bg-white text-purple-600 px-8 py-3 rounded-full font-semibold hover:shadow-xl transition transform hover:scale-105">
                            Daftar Pendakian
                        </a>
                        <a href="{{ route('pendaki.index') }}" class="border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-purple-600 transition">
                            Lihat Pendaki
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <img src="{{ asset('assets/img/Gunung lawu (1).jpeg') }}" alt="Gunung Lawu" class="rounded-2xl shadow-2xl" onerror="this.src='https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=800'">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-8 text-center">
                <div class="p-6">
                    <div class="text-5xl font-bold text-gradient mb-2">3265</div>
                    <div class="text-gray-600 text-lg">Meter Di Atas Permukaan Laut</div>
                </div>
                <div class="p-6">
                    <div class="text-5xl font-bold text-gradient mb-2">3</div>
                    <div class="text-gray-600 text-lg">Puncak Utama</div>
                </div>
                <div class="p-6">
                    <div class="text-5xl font-bold text-gradient mb-2">5</div>
                    <div class="text-gray-600 text-lg">Jalur Pendakian</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sejarah Section -->
    <section id="sejarah" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <img src="{{ asset('assets/img/puncak lawu hargo dumilah 3265 mdpl (1) (1).jpeg') }}" alt="Puncak Lawu" class="rounded-2xl shadow-xl" onerror="this.src='https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?w=800'">
                </div>
                <div>
                    <h2 class="text-4xl font-bold mb-6 text-gradient">Sejarah Gunung Lawu</h2>
                    <p class="text-gray-700 mb-4 leading-relaxed">
                        Gunung Lawu merupakan salah satu gunung yang sarat dengan nilai sejarah dan mistis. Terletak di perbatasan Jawa Tengah dan Jawa Timur, Gunung Lawu dianggap sebagai tempat sakral yang dipercaya menjadi lokasi semedi Prabu Brawijaya V, raja terakhir Majapahit.
                    </p>
                    <p class="text-gray-700 leading-relaxed">
                        Gunung ini juga menjadi saksi sejarah perkembangan budaya Jawa, dengan banyak ditemukan situs-situs kuno seperti Candi Cetho dan Candi Sukuh yang berfungsi sebagai tempat peribadatan pada masa lampau.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Geografis Section -->
    <section id="geografis" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1">
                    <h2 class="text-4xl font-bold mb-6 text-gradient">Geografis</h2>
                    <p class="text-gray-700 mb-4 leading-relaxed">
                        Gunung Lawu memiliki ketinggian 3.265 meter di atas permukaan laut dan dikelilingi oleh tiga kabupaten, yaitu Karanganyar (Jawa Tengah), Magetan, dan Ngawi (Jawa Timur). Gunung ini dikenal memiliki tiga puncak utama, yaitu Hargo Dalem, Hargo Dumilah, dan Hargo Dumiling.
                    </p>
                    <p class="text-gray-700 leading-relaxed">
                        Kawasan Gunung Lawu memiliki vegetasi yang beragam, dari hutan pinus di kaki gunung hingga padang rumput dan edelweis di puncaknya. Selain itu, Lawu juga memiliki beberapa jalur pendakian terkenal seperti Cemoro Sewu, Cemoro Kandang, dan Candi Cetho.
                    </p>
                </div>
                <div class="order-1 md:order-2">
                    <img src="{{ asset('assets/img/Sabana Gupak Menjangan.jpeg') }}" alt="Sabana" class="rounded-2xl shadow-xl" onerror="this.src='https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=800'">
                </div>
            </div>
        </div>
    </section>

    <!-- Peraturan Section -->
    <section id="peraturan" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold mb-12 text-center text-gradient">Peraturan Pendakian</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-full bg-purple-100 text-purple-600 font-bold text-xl">1</div>
                        </div>
                        <div class="ml-4">
                            <p class="text-gray-700">Pendaki wajib mendaftar dan melapor di pos pendakian sebelum mendaki.</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-full bg-purple-100 text-purple-600 font-bold text-xl">2</div>
                        </div>
                        <div class="ml-4">
                            <p class="text-gray-700">Membawa perlengkapan pendakian yang memadai, seperti jaket tebal, tenda, logistik, dan peralatan darurat.</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-full bg-purple-100 text-purple-600 font-bold text-xl">3</div>
                        </div>
                        <div class="ml-4">
                            <p class="text-gray-700">Mengikuti aturan pendakian yang berlaku di setiap jalur pendakian.</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-full bg-purple-100 text-purple-600 font-bold text-xl">4</div>
                        </div>
                        <div class="ml-4">
                            <p class="text-gray-700">Menjaga kebersihan dengan membawa kembali sampah yang dihasilkan selama pendakian.</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-full bg-purple-100 text-purple-600 font-bold text-xl">5</div>
                        </div>
                        <div class="ml-4">
                            <p class="text-gray-700">Melaporkan kepada petugas saat turun dari gunung untuk memastikan keselamatan.</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-full bg-purple-100 text-purple-600 font-bold text-xl">6</div>
                        </div>
                        <div class="ml-4">
                            <p class="text-gray-700">Tidak mendaki di luar waktu yang diizinkan (tidak diizinkan jalan malam menghindari cuaca buruk).</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Larangan Section -->
    <section id="larangan" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold mb-12 text-center text-gradient">Larangan Selama Pendakian</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-red-50 border-l-4 border-red-500 p-6 rounded-lg">
                    <p class="text-gray-700">❌ Tidak membuang sampah sembarangan</p>
                </div>
                <div class="bg-red-50 border-l-4 border-red-500 p-6 rounded-lg">
                    <p class="text-gray-700">❌ Tidak merusak tanaman atau mengambil bunga edelweis yang dilindungi</p>
                </div>
                <div class="bg-red-50 border-l-4 border-red-500 p-6 rounded-lg">
                    <p class="text-gray-700">❌ Tidak menyalakan api unggun di area yang tidak diizinkan</p>
                </div>
                <div class="bg-red-50 border-l-4 border-red-500 p-6 rounded-lg">
                    <p class="text-gray-700">❌ Tidak berbicara kasar atau tidak sopan, terutama di area yang dianggap sakral</p>
                </div>
                <div class="bg-red-50 border-l-4 border-red-500 p-6 rounded-lg">
                    <p class="text-gray-700">❌ Tidak melakukan tindakan yang melanggar adat setempat</p>
                </div>
                <div class="bg-red-50 border-l-4 border-red-500 p-6 rounded-lg">
                    <p class="text-gray-700">❌ Tidak mendaki seorang diri tanpa pendamping</p>
                </div>
                <div class="bg-red-50 border-l-4 border-red-500 p-6 rounded-lg col-span-full md:col-span-1">
                    <p class="text-gray-700">❌ Tidak membawa atau mengonsumsi minuman keras atau narkotika</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="hero-gradient text-white py-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold mb-6">Siap Mendaki?</h2>
            <p class="text-xl mb-8 text-purple-100">Daftarkan diri Anda sekarang dan rasakan pengalaman mendaki Gunung Lawu yang tak terlupakan!</p>
            <a href="{{ route('pendaki.create') }}" class="inline-block bg-white text-purple-600 px-10 py-4 rounded-full font-bold text-lg hover:shadow-xl transition transform hover:scale-105">
                Daftar Sekarang
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Gunung Lawu</h3>
                    <p class="text-gray-400">Sistem Pendaftaran Pendakian Gunung Lawu 3265 MDPL</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#sejarah" class="text-gray-400 hover:text-white transition">Sejarah</a></li>
                        <li><a href="#geografis" class="text-gray-400 hover:text-white transition">Geografis</a></li>
                        <li><a href="{{ route('pendaki.create') }}" class="text-gray-400 hover:text-white transition">Pendaftaran</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Kontak</h3>
                    <p class="text-gray-400">Jawa Tengah & Jawa Timur</p>
                    <p class="text-gray-400">Indonesia</p>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} Gunung Lawu. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>
