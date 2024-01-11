@extends('template.app')

@section('content')
@section('title','Testimoni')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Daftar Testimoni</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <a href="{{ route('testimoni.create') }}" class="btn btn-primary mb-3">Tambah Testimoni</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Penyewa</th>
                                <th scope="col">Buku</th>
                                <th scope="col">Testimoni</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($testimonis as $testimoni)
                                <tr>
                                    <td>{{ $testimoni->penyewa->nama }}</td>
                                    <td>{{ $testimoni->buku->judul }}</td>
                                    <td>{{ $testimoni->testimoni }}</td>
                                    <td>
                                        <a href="{{ route('testimoni.edit', $testimoni->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('testimoni.destroy', $testimoni->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus testimoni ini?')">Hapus</button>
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
