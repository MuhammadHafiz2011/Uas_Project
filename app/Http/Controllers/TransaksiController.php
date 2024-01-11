<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Buku;
use App\Models\Penyewa;

class TransaksiController extends Controller
{
    public function index()
    {
        $bukus = Buku::all();
        $transaksis = Transaksi::all();
        $penyewas = Penyewa::all();
        return view('transaksi.index', compact('transaksis', 'bukus', 'penyewas'));
    }

    public function create()
    {
        $bukus = Buku::all();
        $penyewas = Penyewa::all();
        return view('transaksi.create', compact('bukus', 'penyewas'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'buku_id' => 'required|exists:bukus,id',
            'penyewa_id' => 'required|exists:penyewas,id',
            'tanggal_penyewaan' => 'required|date',
            'tanggal_pengembalian' => 'required|date|after:tanggal_penyewaan',
        ]);

  
        Transaksi::create($request->all());

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dilakukan!');
    }

    public function show($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $bukus = Buku::all();
        $penyewas = Penyewa::all();
        return view('transaksi.show', compact('transaksi','bukus','penyewas'));
    }

    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $bukus = Buku::all();
        $penyewas = Penyewa::all();
        return view('transaksi.edit', compact('transaksi','bukus','penyewas'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'buku_id' => 'required|exists:bukus,id',
            'penyewa_id' => 'required|exists:penyewas,id',
            'tanggal_penyewaan' => 'required|date',
            'tanggal_pengembalian' => 'required|date|after:tanggal_penyewaan',
        ]);


        $transaksi = Transaksi::findOrFail($id);
        $transaksi->update($request->all());

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil diperbarui!');
    }

    public function destroy($id)
    {
 
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dihapus!');
    }
}
