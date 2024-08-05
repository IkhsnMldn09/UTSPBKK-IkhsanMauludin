<?php
namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use Illuminate\Http\Request;

class SuratKeluarController extends Controller
{
    public function index()
    {
        $suratKeluars = SuratKeluar::all();
        return view('suratKeluars.index', compact('suratKeluars'));
    }

    public function create()
    {
        return view('suratKeluars.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kop_id' => 'required',
            'tanggal' => 'required',
            'no_surat' => 'required',
            'perihal' => 'required',
            'tujuan' => 'required',
            'isi_surat' => 'required',
            'tandatangan_id' => 'required',
            'user_id' => 'required',
        ]);

        SuratKeluar::create($request->all());
        return redirect()->route('suratKeluars.index')->with('success', 'Surat keluar berhasil dibuat.');
    }

    public function show(SuratKeluar $suratKeluar)
    {
        return view('suratKeluars.show', compact('suratKeluar'));
    }

    public function edit(SuratKeluar $suratKeluar)
    {
        return view('suratKeluars.edit', compact('suratKeluar'));
    }

    public function update(Request $request, SuratKeluar $suratKeluar)
    {
        $request->validate([
            'kop_id' => 'required',
            'tanggal' => 'required',
            'no_surat' => 'required',
            'perihal' => 'required',
            'tujuan' => 'required',
            'isi_surat' => 'required',
            'tandatangan_id' => 'required',
            'user_id' => 'required',
        ]);

        $suratKeluar->update($request->all());
        return redirect()->route('suratKeluars.index')->with('success', 'Surat keluar berhasil diperbarui.');
    }

    public function destroy(SuratKeluar $suratKeluar)
    {
        $suratKeluar->delete();
        return redirect()->route('suratKeluars.index')->with('success', 'Surat keluar berhasil dihapus.');
    }
}
