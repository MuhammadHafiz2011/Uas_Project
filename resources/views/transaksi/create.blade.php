@extends('template.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Transaksi Baru</div>

                <div class="card-body">
                    <form action="{{ route('transaksi.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="buku_id">Buku</label>
                            <select class="form-control" id="buku_id" name="buku_id" required>
                                @foreach ($bukus as $buku)
                                    <option value="{{ $buku->id }}">{{ $buku->judul }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="penyewa_id">Penyewa</label>
                            <select class="form-control" id="penyewa_id" name="penyewa_id" required>
                                @foreach ($penyewas as $penyewa)
                                    <option value="{{ $penyewa->id }}">{{ $penyewa->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_penyewaan">Tanggal Penyewaan</label>
                            <input type="date" class="form-control" id="tanggal_penyewaan" name="tanggal_penyewaan" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_pengembalian">Tanggal Pengembalian</label>
                            <input type="date" class="form-control" id="tanggal_pengembalian" name="tanggal_pengembalian" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('transaksi.index') }}" class="btn btn-secondary">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
