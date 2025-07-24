@extends('template.app')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <h3 class="mb-4">Edit Reservasi</h3>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('reservasi.update', $reservasi->id_reservasi) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="customer_id" class="form-label">Customer</label>
                            <select class="form-control" id="customer_id" name="customer_id" required>
                                <option value="">-- Pilih Customer --</option>
                                @foreach($customers as $customer)
                                    <option value="{{ $customer->id }}" {{ $reservasi->customer_id == $customer->id ? 'selected' : '' }}>
                                        {{ $customer->nama_customer }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal Reservasi</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ old('tanggal', $reservasi->tanggal) }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_mulai" class="form-label">Tanggal Checkin</label>
                            <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="{{ old('tanggal_mulai', $reservasi->tanggal_mulai) }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_akhir" class="form-label">Tanggal Ckeckout</label>
                            <input type="date" class="form-control" id="tanggal_akhir" name="tanggal_akhir" value="{{ old('tanggal_akhir', $reservasi->tanggal_akhir) }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="id_hotel" class="form-label">Harga Hari Ini (Kamar)</label>
                            <select class="form-control" id="id_hotel" name="id_hotel" required>
                                <option value="">-- Pilih Kamar & Tanggal --</option>
                                @foreach($harga_hari_inis as $harga)
                                    <option value="{{ $harga->id_hotel }}" {{ $reservasi->id_hotel == $harga->id_hotel ? 'selected' : '' }}>
                                        {{ $harga->kamar->nama_kamar ?? '-' }} ({{ $harga->tanggal }}) - Rp {{ number_format($harga->harga,0,',','.') }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Update</button>
                        <a href="{{ route('reservasi.index') }}" class="btn btn-outline-secondary w-100 mt-2">
                            <i class="fas fa-arrow-left"></i> Batal
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection