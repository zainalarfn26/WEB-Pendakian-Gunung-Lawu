<?php

namespace App\View\Composers;

use App\Models\Pendaki;
use Illuminate\View\View;

class NotificationComposer
{
    public function compose(View $view)
    {
        // Ambil 5 pendaki terbaru untuk notifikasi
        $recentPendakis = Pendaki::latest()->take(5)->get();
        
        // Hitung pendaki baru hari ini
        $todayPendakis = Pendaki::whereDate('created_at', today())->count();
        
        $view->with([
            'recentPendakis' => $recentPendakis,
            'todayPendakis' => $todayPendakis,
            'notificationCount' => $recentPendakis->count()
        ]);
    }
}
