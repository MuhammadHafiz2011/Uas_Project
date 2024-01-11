@extends('template.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Testimoni</div>

                <div class="card-body">
                    <form action="{{ route('testimoni.update', $testimoni->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="penyewa_id">Penyewa</label>
                            <select class="form-control" id="penyewa_id" name="penyewa_id" required>
                                @foreach ($penyewas as $penyewa)
                                    <option value="{{ $penyewa->id }}" {{ $testimoni->penyewa_id == $penyewa->id ? 'selected' : '' }}>{{ $penyewa->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="buku_id">Buku</label>
                            <select class="form-control" id="buku_id" name="buku_id" required>
                                @foreach ($bukus as $buku)
                                    <option value="{{ $buku->id }}" {{ $testimoni->buku_id == $buku->id ? 'selected' : '' }}>{{ $buku->judul }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="testimonial">Testimoni</label>
                            <textarea class="form-control" id="testimonial" name="testimonial" rows="4" required>{{ $testimoni->testimonial }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        <a href="{{ route('testimoni.index') }}" class="btn btn-secondary">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
