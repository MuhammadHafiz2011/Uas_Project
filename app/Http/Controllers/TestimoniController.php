<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;
use App\Models\Buku;
use App\Models\Penyewa;

class TestimoniController extends Controller
{
    public function index()
    {
        $testimonis = Testimoni::all();
        $bukus = Buku::all();
        $penyewas = Penyewa::all();
        return view('testimoni.index', compact('testimonis', 'bukus', 'penyewas'));
    }

    public function create()
    {
        $bukus = Buku::all();
        $penyewas = Penyewa::all();
        return view('testimoni.create', compact('bukus', 'penyewas'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'penyewa_id' => 'required|exists:penyewas,id',
            'buku_id' => 'required|exists:bukus,id',
            'testimoni' => 'required',
        ]);

    
        Testimoni::create($request->all());

        return redirect()->route('testimoni.index')->with('success', 'Testimoni berhasil ditambahkan!');
    }

    public function show($id)
    {
        $testimoni = Testimoni::findOrFail($id);
        return view('testimoni.show', compact('testimoni'));
    }

    public function edit($id)
    {
        $testimoni = Testimoni::findOrFail($id);
        $bukus = Buku::all();
        $penyewas = Penyewa::all();
        return view('testimoni.edit', compact('testimoni','bukus','penyewas'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'penyewa_id' => 'required|exists:penyewas,id',
            'buku_id' => 'required|exists:bukus,id',
            'testimoni' => 'required',
        ]);

    
        $testimoni = Testimoni::findOrFail($id);
        $testimoni->update($request->all());

        return redirect()->route('testimoni.index')->with('success', 'Testimoni berhasil diperbarui!');
    }

    public function destroy($id)
    {

        $testimoni = Testimoni::findOrFail($id);
        $testimoni->delete();

        return redirect()->route('testimoni.index')->with('success', 'Testimoni berhasil dihapus!');
    }
}
