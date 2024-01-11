<?php

namespace App\Http\Controllers;
use App\Models\Front;
use App\Models\Transaksi;
use App\Models\Buku;
use App\Models\Testimoni;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $bukus = Buku::all();
        $transaksis = Transaksi::all();
        $testimonis = Testimoni::all();
        return view('front.index', compact('transaksis', 'bukus', 'testimonis'));
    }
}
