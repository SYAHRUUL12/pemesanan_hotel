@extends('template.app')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <h3 class="mb-4">Tambah Harga Hari Ini</h3>
                    <form action="{{ route('harga_hari_ini.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="id_kamar" class="form-label">Kamar</label>
                            <select class="form-control" id="id_kamar" name="id_kamar" required>
                                <option value="">-- Pilih Kamar --</option>
                                @foreach($kamars as $kamar)
                                    <option value="{{ $kamar->id }}">{{ $kamar->nama_kamar }} ({{ ucfirst($kamar->jenis_kamar) }})</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ old('tanggal') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" class="form-control" id="harga" name="harga" value="{{ old('harga') }}" min="0" required>
                        </div>
                        <div class="mb-3">
                            <label for="availaible_room" class="form-label">Available Room</label>
                            <input type="number" class="form-control" id="avalble_room" name="available_room" value="{{ old('available_room') }}" min="0" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Simpan</button>
                        <a href="{{ route('harga_hari_ini.index') }}" class="btn btn-outline-secondary w-100 mt-2">
                            <i class="fas fa-arrow-left"></i> Batal
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection