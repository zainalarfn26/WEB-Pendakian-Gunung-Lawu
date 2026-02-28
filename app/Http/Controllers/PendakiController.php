<?php

namespace App\Http\Controllers;

use App\Models\Pendaki;
use App\Http\Requests\StorePendakiRequest;
use App\Http\Requests\UpdatePendakiRequest;
use Illuminate\Http\Request;

class PendakiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendakis = Pendaki::latest()->paginate(10);
        return view('pendaki.index', compact('pendakis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pendaki.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePendakiRequest $request)
    {
        Pendaki::create($request->validated());
        return redirect()->route('pendaki.create')
            ->with('success', 'Pendaftaran berhasil! Data Anda telah tersimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pendaki $pendaki)
    {
        return view('pendaki.show', compact('pendaki'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pendaki $pendaki)
    {
        return view('pendaki.edit', compact('pendaki'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePendakiRequest $request, Pendaki $pendaki)
    {
        $pendaki->update($request->validated());
        return redirect()->route('admin.pendaki.index')
            ->with('success', 'Data pendaki berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pendaki $pendaki)
    {
        $pendaki->delete();
        return redirect()->route('admin.pendaki.index')
            ->with('success', 'Data pendaki berhasil dihapus.');
    }
}
