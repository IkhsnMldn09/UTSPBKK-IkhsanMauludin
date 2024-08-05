<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NamaTandatgn;

class NamaTandatgnController extends Controller
{
    public function index()
    {
        $namaTandatgns = NamaTandatgn::all();
        return view('nama_tandatgn.index', compact('namaTandatgns'));
    }

    public function create()
    {
        return view('nama_tandatgn.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_tandatgn' => 'required',
            'jabatan' => 'required',
            'nip' => 'required'
        ]);

        NamaTandatgn::create($request->only(['nama_tandatgn', 'jabatan', 'nip']));

        return redirect()->route('nama_tandatgns.index')
                         ->with('success', 'Nama Tandatgn created successfully.');
    }

    public function show(NamaTandatgn $namaTandatgn)
    {
        return view('nama_tandatgn.show', compact('namaTandatgn'));
    }

    public function edit(NamaTandatgn $namaTandatgn)
    {
        return view('nama_tandatgn.edit', compact('namaTandatgn'));
    }

    public function update(Request $request, NamaTandatgn $namaTandatgn)
    {
        $request->validate([
            'nama_tandatgn' => 'required',
            'jabatan' => 'required',
            'nip' => 'required'
        ]);

        $namaTandatgn->update($request->only(['nama_tandatgn', 'jabatan', 'nip']));

        return redirect()->route('nama_tandatgns.index')
                         ->with('success', 'Nama Tandatgn updated successfully.');
    }

    public function destroy(NamaTandatgn $namaTandatgn)
    {
        $namaTandatgn->delete();

        return redirect()->route('nama_tandatgns.index')
                         ->with('success', 'Nama Tandatgn deleted successfully.');
    }
}
