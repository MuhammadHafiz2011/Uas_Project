<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Kategori;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::all();
        $kategoris = Kategori::all();
        return view('buku.index', compact('bukus', 'kategoris'));
    }

    public function create()
    {
        $kategoris = Kategori::all();
        return view('buku.create', compact('kategoris'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'deskripsi' => 'required',
            'kategori_id' => 'required|exists:kategoris,id',
        ]);

   
        Buku::create($request->all());

        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan!');
    }

    public function show($id)
    {
        $buku = Buku::findOrFail($id);
        return view('buku.show', compact('buku'));
    }

    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        $kategoris = Kategori::all();
        return view('buku.edit', compact('buku', 'kategoris'));
    }

    public function update(Request $request, $id)
    {
    
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'deskripsi' => 'required',
            'kategori_id' => 'required|exists:kategoris,id',
        ]);


        $buku = Buku::findOrFail($id);
        $buku->update($request->all());

        return redirect()->route('buku.index')->with('success', 'Buku berhasil diperbarui!');
    }

    public function destroy($id)
    {

        $buku = Buku::findOrFail($id);
        $buku->delete();

        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus!');
    }
}
