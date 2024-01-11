@extends('template.app')

@section('content')
@section('title','Transaksi')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Daftar Transaksi</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <a href="{{ route('transaksi.create') }}" class="btn btn-primary mb-3">Tambah Transaksi</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Buku</th>
                                <th scope="col">Penyewa</th>
                                <th scope="col">Tanggal Penyewaan</th>
                                <th scope="col">Tanggal Pengembalian</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaksis as $transaksi)
                                <tr>
                                    <td>{{ $transaksi->buku->judul }}</td>
                                    <td>{{ $transaksi->penyewa->nama }}</td>
                                    <td>{{ $transaksi->tanggal_penyewaan }}</td>
                                    <td>{{ $transaksi->tanggal_pengembalian }}</td>
                                    <td>
                                        <a href="{{ route('transaksi.edit', $transaksi->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('transaksi.destroy', $transaksi->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus transaksi ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
