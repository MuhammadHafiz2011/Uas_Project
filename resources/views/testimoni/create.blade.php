@extends('template.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Testimoni</div>

                <div class="card-body">
                    <form action="{{ route('testimoni.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="penyewa_id">Penyewa</label>
                            <select name="penyewa_id" class="form-control" required>
                                <option value="">-- Pilih Penyewa --</option>
                                @foreach ($penyewas as $penyewa)
                                    <option value="{{ $penyewa->id }}">{{ $penyewa->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="buku_id">Buku</label>
                            <select name="buku_id" class="form-control" required>
                                <option value="">-- Pilih Buku --</option>
                                @foreach ($bukus as $buku)
                                    <option value="{{ $buku->id }}">{{ $buku->judul }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="testimoni">Testimoni</label>
                            <textarea name="testimoni" class="form-control" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
