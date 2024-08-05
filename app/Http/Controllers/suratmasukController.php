<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratMasuk; // Pastikan model ini ada di folder App/Models

class SuratMasukController extends Controller
{
    public function index()
    {
        $suratMasuks = SuratMasuk::all();
        return view('surat_masuk.index', compact('suratMasuks'));
    }

    public function create()
    {
        return view('surat_masuk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor_surat' => 'required',
            'tanggal' => 'required|date',
            'perihal' => 'required'
        ]);

        SuratMasuk::create($request->only(['nomor_surat', 'tanggal', 'perihal']));

        return redirect()->route('surat_masuks.index')
                         ->with('success', 'Surat Masuk created successfully.');
    }

    public function show(SuratMasuk $suratMasuk)
    {
        return view('surat_masuk.show', compact('suratMasuk'));
    }

    public function edit(SuratMasuk $suratMasuk)
    {
        return view('surat_masuk.edit', compact('suratMasuk'));
    }

    public function update(Request $request, SuratMasuk $suratMasuk)
    {
        $request->validate([
            'nomor_surat' => 'required',
            'tanggal' => 'required|date',
            'perihal' => 'required'
        ]);

        $suratMasuk->update($request->only(['nomor_surat', 'tanggal', 'perihal']));

        return redirect()->route('surat_masuks.index')
                         ->with('success', 'Surat Masuk updated successfully.');
    }

    public function destroy(SuratMasuk $suratMasuk)
    {
        $suratMasuk->delete();

        return redirect()->route('surat_masuks.index')
                         ->with('success', 'Surat Masuk deleted successfully.');
    }
}
