@extends('template.app')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <h3 class="mb-4">Edit Kamar</h3>
                    <form action="{{ route('kamar.update', $kamar->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nama_kamar" class="form-label">Nama Kamar</label>
                            <input type="text" class="form-control" id="nama_kamar" name="nama_kamar" value="{{ old('nama_kamar', $kamar->nama_kamar) }}" maxlength="100" required>
                        </div>
                        <div class="mb-3">
                            <label for="jenis_kamar" class="form-label">Jenis Kamar</label>
                            <select class="form-control" id="jenis_kamar" name="jenis_kamar" required>
                                <option value="">-- Pilih Jenis --</option>
                                <option value="deluxe" {{ old('jenis_kamar', $kamar->jenis_kamar) == 'deluxe' ? 'selected' : '' }}>Deluxe</option>
                                <option value="superior" {{ old('jenis_kamar', $kamar->jenis_kamar) == 'superior' ? 'selected' : '' }}>Superior</option>
                                <option value="president" {{ old('jenis_kamar', $kamar->jenis_kamar) == 'president' ? 'selected' : '' }}>President</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="ukuran_kamar" class="form-label">Ukuran (m²)</label>
                            <input type="number" class="form-control" id="ukuran_kamar" name="ukuran_kamar" value="{{ old('ukuran_kamar', $kamar->ukuran_kamar) }}" min="1" required>
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" class="form-control" id="harga" name="harga" value="{{ old('harga', $kamar->harga) }}" min="0" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Simpan</button>
            
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection