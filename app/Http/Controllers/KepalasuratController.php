<?php
namespace App\Http\Controllers;

use App\Models\KepalaSurat;
use Illuminate\Http\Request;

class KepalaSuratController extends Controller
{
    public function index()
    {
        $kepalaSurats = KepalaSurat::all();
        return view('kepala_surat.index', compact('kepalaSurats'));
    }

    public function create()
    {
        return view('kepala_surat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kop' => 'required',
            'alamat_kop' => 'required',
            'nama_tujuan' => 'required',
            'id_user' => 'required'
        ]);

        KepalaSurat::create($request->all());

        return redirect()->route('kepala_surat.index')
                         ->with('success', 'KepalaSurat created successfully.');
    }

    public function show(KepalaSurat $kepalaSurat)
    {
        return view('kepala_surat.show', compact('kepalaSurat'));
    }

    public function edit(KepalaSurat $kepalaSurat)
    {
        return view('kepala_surat.edit', compact('kepalaSurat'));
    }

    public function update(Request $request, KepalaSurat $kepalaSurat)
    {
        $request->validate([
            'nama_kop' => 'required',
            'alamat_kop' => 'required',
            'nama_tujuan' => 'required',
            'id_user' => 'required'
        ]);

        $kepalaSurat->update($request->all());

        return redirect()->route('kepala_surat.index')
                         ->with('success', 'KepalaSurat updated successfully.');
    }

    public function destroy(KepalaSurat $kepalaSurat)
    {
        $kepalaSurat->delete();

        return redirect()->route('kepala_surat.index')
                         ->with('success', 'KepalaSurat deleted successfully.');
    }
}
