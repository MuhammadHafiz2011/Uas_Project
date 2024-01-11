@extends('template.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Transaksi</div>

                <div class="card-body">
                    <form action="{{ route('transaksi.update', $transaksi->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="buku_id">Buku</label>
                            <select class="form-control" id="buku_id" name="buku_id" required>
                                @foreach ($bukus as $buku)
                                    <option value="{{ $buku->id }}" {{ $transaksi->buku_id == $buku->id ? 'selected' : '' }}>{{ $buku->judul }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="penyewa_id">Penyewa</label>
                            <select class="form-control" id="penyewa_id" name="penyewa_id" required>
                                @foreach ($penyewas as $penyewa)
                                    <option value="{{ $penyewa->id }}" {{ $transaksi->penyewa_id == $penyewa->id ? 'selected' : '' }}>{{ $penyewa->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_penyewaan">Tanggal Penyewaan</label>
                            <input type="date" class="form-control" id="tanggal_penyewaan" name="tanggal_penyewaan" value="{{ $transaksi->tanggal_penyewaan }}" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_pengembalian">Tanggal Pengembalian</label>
                            <input type="date" class="form-control" id="tanggal_pengembalian" name="tanggal_pengembalian" value="{{ $transaksi->tanggal_pengembalian }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        <a href="{{ route('transaksi.index') }}" class="btn btn-secondary">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
