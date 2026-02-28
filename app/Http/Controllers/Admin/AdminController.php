<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pendaki;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $totalPendaki = Pendaki::count();
        $pendakiBulanIni = Pendaki::whereMonth('created_at', now()->month)->count();
        $pendakiTerbaru = Pendaki::latest()->take(5)->get();
        
        return view('admin.dashboard', compact('totalPendaki', 'pendakiBulanIni', 'pendakiTerbaru'));
    }

    public function pendaki()
    {
        $pendakis = Pendaki::latest()->paginate(15);
        return view('admin.pendaki.index', compact('pendakis'));
    }
}
