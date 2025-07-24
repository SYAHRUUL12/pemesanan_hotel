@extends('template.app')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <h3 class="mb-4">Detail Reservasi</h3>
                    <ul class="list-group mb-3">
                        <li class="list-group-item">
                            <strong>Customer:</strong> {{ $reservasi->customer->nama_customer ?? '-' }}
                        </li>
                        <li class="list-group-item">
                            <strong>Tanggal Reservasi:</strong> {{ $reservasi->tanggal }}
                        </li>
                        <li class="list-group-item">
                            <strong>Tanggal Checkin:</strong> {{ $reservasi->tanggal_mulai }}
                        </li>
                        <li class="list-group-item">
                            <strong>Tanggal Checkout:</strong> {{ $reservasi->tanggal_akhir }}
                        </li>
                        <li class="list-group-item">
                            <strong>Kamar:</strong>
                            @if($reservasi->hargaHariIni && $reservasi->hargaHariIni->kamar)
                                {{ $reservasi->hargaHariIni->kamar->nama_kamar }}
                                <br>
                                <small>{{ ucfirst($reservasi->hargaHariIni->kamar->jenis_kamar) }}</small>
                            @else
                                -
                            @endif
                        </li>
                        <li class="list-group-item">
                            <strong>Harga per Malam:</strong>
                            @if($reservasi->hargaHariIni)
                                Rp {{ number_format($reservasi->hargaHariIni->harga,0,',','.') }}
                            @else
                                -
                            @endif
                        </li>
                        
                    </ul>
                    <a href="{{ route('reservasi.index') }}" class="btn btn-secondary w-100">
                        <i class="fas fa-arrow-left"></i> Kembali ke Daftar Reservasi
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection