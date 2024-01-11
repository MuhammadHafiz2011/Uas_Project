<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyewa;

class PenyewaController extends Controller
{
    public function index()
    {
        $penyewas = Penyewa::all();
        return view('penyewa.index', compact('penyewas'));
    }

    public function create()
    {

        return view('penyewa.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'telepon' => 'required',
        ]);

 
        Penyewa::create($request->all());

        return redirect()->route('penyewa.index')->with('success', 'Penyewa berhasil ditambahkan!');
    }

    public function show($id)
    {
        $penyewa = Penyewa::findOrFail($id);
        return view('penyewa.show', compact('penyewa'));
    }

    public function edit($id)
    {
        $penyewa = Penyewa::findOrFail($id);
        return view('penyewa.edit', compact('penyewa'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'telepon' => 'required',
        ]);

 
        $penyewa = Penyewa::findOrFail($id);
        $penyewa->update($request->all());

        return redirect()->route('penyewa.index')->with('success', 'Penyewa berhasil diperbarui!');
    }

    public function destroy($id)
    {
 
        $penyewa = Penyewa::findOrFail($id);
        $penyewa->delete();

        return redirect()->route('penyewa.index')->with('success', 'Penyewa berhasil dihapus!');
    }
}
