<?php

use Illuminate\Support\Facades\Hash;
use App\Models\User;

// Update or create admin user
$admin = User::updateOrCreate(
    ['email' => 'admin@gununglawu.com'],
    [
        'name' => 'Admin Gunung Lawu',
        'password' => Hash::make('admin123'),
        'email_verified_at' => now(),
    ]
);

echo "✅ Admin user berhasil dibuat/diupdate!\n";
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
echo "📧 Email    : " . $admin->email . "\n";
echo "🔑 Password : admin123\n";
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
echo "\n👉 Silakan login dengan kredensial di atas!\n";
