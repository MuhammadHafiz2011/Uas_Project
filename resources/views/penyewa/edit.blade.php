@extends('template.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Penyewa</div>

                <div class="card-body">
                    <form action="{{ route('penyewa.update', $penyewa->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama">Nama Penyewa</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $penyewa->nama }}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $penyewa->email }}" required>
                        </div>
                        <div class="form-group">
                            <label for="telepon">Telepon</label>
                            <input type="tel" class="form-control" id="telepon" name="telepon" value="{{ $penyewa->telepon }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        <a href="{{ route('penyewa.index') }}" class="btn btn-secondary">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
