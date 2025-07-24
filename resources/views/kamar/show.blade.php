@extends('template.app')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <h3 class="mb-4">Detail Kamar</h3>
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama Kamar</th>
                            <td>{{ $kamar->nama_kamar }}</td>
                        </tr>
                        <tr>
                            <th>Jenis Kamar</th>
                            <td>{{ ucfirst($kamar->jenis_kamar) }}</td>
                        </tr>
                        <tr>
                            <th>Ukuran</th>
                            <td>{{ $kamar->ukuran_kamar }} m²</td>
                        </tr>
                        <tr>
                            <th>Harga</th>
                            <td>Rp {{ number_format($kamar->harga,0,',','.') }}</td>
                        </tr>
                    </table>
                    <a href="{{ route('kamar.index') }}" class="btn btn-secondary w-100">Kembali ke Daftar Pembayaran</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection