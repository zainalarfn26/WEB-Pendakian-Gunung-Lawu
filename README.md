# 🏔️ Sistem Pendakian Gunung Lawu

Website sistem pendakian Gunung Lawu yang dibangun menggunakan Laravel 11 dengan fitur manajemen pendaki yang modern dan user-friendly.

## ✨ Fitur

### 🌐 Halaman Public
- **Homepage Informatif** - Informasi lengkap tentang Gunung Lawu (Sejarah, Geografis, Peraturan, Larangan)
- **Pendaftaran Pendaki** - Form pendaftaran online untuk calon pendaki
- **Daftar Pendaki** - Melihat daftar pendaki yang sudah terdaftar
- **Desain Modern** - Menggunakan Tailwind CSS dengan desain responsive

### 🔐 Panel Admin
- **Dashboard Admin** - Statistik pendaki dan overview data
- **Manajemen Pendaki** - CRUD (Create, Read, Update, Delete) data pendaki
- **Authentication** - Sistem login/register yang aman menggunakan Laravel Breeze
- **Validasi Form** - Validasi data yang ketat untuk keamanan

## 🛠️ Teknologi yang Digunakan

- **Laravel 11** - PHP Framework
- **Laravel Breeze** - Authentication Scaffolding
- **Tailwind CSS** - UI Framework
- **MySQL/MariaDB** - Database
- **Blade Template** - Templating Engine

## 📋 Requirements

- PHP >= 8.2
- Composer
- Node.js & NPM
- MySQL/MariaDB

## 🚀 Instalasi

### 1. Clone Repository
```bash
git clone https://github.com/zainalarfn26/WEB-Pendakian-Gunung-Lawu.git
cd WEB-Pendakian-Gunung-Lawu
```

### 2. Install Dependencies
```bash
composer install
npm install
```

### 3. Setup Environment
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Konfigurasi Database
Edit file `.env` dan sesuaikan konfigurasi database:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_pendakian_lawu
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Migrasi Database
```bash
php artisan migrate
```

### 6. Build Assets
```bash
npm run build
```

### 7. Jalankan Aplikasi
```bash
php artisan serve
```

Akses aplikasi di: `http://localhost:8000`

## 👤 Akun Admin

Untuk membuat akun admin, gunakan:
```bash
php artisan tinker
```

Kemudian jalankan:
```php
\App\Models\User::create([
    'name' => 'Admin',
    'email' => 'admin@gunungLawu.com',
    'password' => bcrypt('password')
]);
```

## 📱 Struktur Database

### Tabel `pendakis`
- `id` - Primary Key
- `no_ktp` - Nomor KTP (Unique)
- `nama` - Nama Lengkap
- `alamat` - Alamat
- `tanggal_pendakian` - Tanggal Pendakian
- `no_hp` - Nomor HP/WhatsApp
- `created_at` - Waktu Dibuat
- `updated_at` - Waktu Diupdate

## 🎨 Fitur Keamanan

- ✅ Prepared Statements (Eloquent ORM) - Mencegah SQL Injection
- ✅ CSRF Protection - Token CSRF di setiap form
- ✅ Password Hashing - Menggunakan Bcrypt
- ✅ Form Validation - Validasi input di backend
- ✅ Authentication Middleware - Proteksi route admin

## 📸 Screenshot

### Homepage
Halaman utama dengan informasi lengkap tentang Gunung Lawu

### Form Pendaftaran
Form pendaftaran pendaki dengan validasi lengkap

### Admin Dashboard
Dashboard admin untuk mengelola data pendaki

## 🤝 Kontribusi

Kontribusi selalu diterima! Silakan buat pull request atau buka issue untuk saran dan perbaikan.

## 📝 License

Proyek ini adalah proyek open source untuk keperluan edukasi.

## 👨‍💻 Developer

Dikembangkan oleh Zain Alarfn

## 📞 Kontak

Untuk pertanyaan atau saran, silakan hubungi melalui:
- GitHub: [@zainalarfn26](https://github.com/zainalarfn26)

---

⭐ Jangan lupa berikan star jika project ini bermanfaat!
