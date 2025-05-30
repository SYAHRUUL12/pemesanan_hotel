@extends('template.app')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <h3 class="mb-4">Detail Pembayaran</h3>
                    <ul class="list-group mb-3">
                        <li class="list-group-item">
                            <strong>Customer:</strong> {{ $pembayaran->customer->nama_customer }}
                        </li>
                        <li class="list-group-item">
                            <strong>Tanggal:</strong> {{ $pembayaran->tanggal }}
                        </li>
                        <li class="list-group-item">
                            <strong>Metode Bayar:</strong> {{ ucfirst($pembayaran->metode_bayar) }}
                        </li>
                        <li class="list-group-item">
                            <strong>Invoice:</strong> {{ $pembayaran->invoice->deskripsi }}
                        </li>
                    </ul>
                    <a href="{{ route('pembayaran.index') }}" class="btn btn-secondary w-100">Kembali ke Daftar Pembayaran</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
