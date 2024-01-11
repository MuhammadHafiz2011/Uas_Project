@extends('template.app')

@section('content')
@section('title','Penyewa')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Daftar Penyewa</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <a href="{{ route('penyewa.create') }}" class="btn btn-primary mb-3">Tambah Penyewa</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nama Penyewa</th>
                                <th scope="col">Email</th>
                                <th scope="col">Telepon</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($penyewas as $penyewa)
                                <tr>
                                    <td>{{ $penyewa->nama }}</td>
                                    <td>{{ $penyewa->email }}</td>
                                    <td>{{ $penyewa->telepon }}</td>
                                    <td>
                                        <a href="{{ route('penyewa.edit', $penyewa->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('penyewa.destroy', $penyewa->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus penyewa ini?')">Hapus</button>
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
