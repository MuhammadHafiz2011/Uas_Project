@extends('template.app')

@section('content')
@section('title','Buku')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Daftar Buku</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <a href="{{ route('buku.create') }}" class="btn btn-primary mb-3">Tambah Buku</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Judul</th>
                                <th scope="col">Penulis</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bukus as $buku)
                                <tr>
                                    <td>{{ $buku->judul }}</td>
                                    <td>{{ $buku->penulis }}</td>
                                    <td>{{ $buku->kategori->nama }}</td>
                                    <td>{{ $buku->deskripsi }}</td>
                                    <td>
                                        <a href="/buku/{{$buku->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('buku.destroy', $buku->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus buku ini?')">Hapus</button>
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
