<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function buku()
    {
        return $this->belongsTo(Buku::class, 'buku_id');
    }
    public function penyewa()
    {
        return $this->belongsTo(Penyewa::class, 'penyewa_id');
    }
}
