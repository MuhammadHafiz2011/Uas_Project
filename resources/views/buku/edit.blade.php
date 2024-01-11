@extends('template.app')

@section('content')
<link rel="stylesheet" href="/assets/css/styles.min.css" />
  <link rel="stylesheet" href="/assets/css/styles.css" />
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Buku</div>

                <div class="card-body">
                    <form action="{{ route('buku.update', $buku->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" value="{{ $buku->judul }}" required>
                        </div>
                        <div class="form-group">
                            <label for="penulis">Penulis</label>
                            <input type="text" class="form-control" id="penulis" name="penulis" value="{{ $buku->penulis }}" required>
                        </div>
                        <div class="form-group">
                            <label for="kategori_id">Kategori</label>
                            <select class="form-control" id="kategori_id" name="kategori_id" required>
                                @foreach ($kategoris as $kategori)
                                    <option value="{{ $kategori->id }}" {{ $buku->kategori_id == $kategori->id ? 'selected' : '' }}>{{ $kategori->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required>{{ $buku->deskripsi }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('buku.index') }}" class="btn btn-secondary">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
  <script defer src="/assets/libs/jquery/dist/jquery.min.js"></script>
  <script defer src="/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script defer src="/assets/js/sidebarmenu.js"></script>
  <script defer src="/assets/js/app.min.js"></script>
  <script defer src="/assets/libs/simplebar/dist/simplebar.js"></script>
@endsection
