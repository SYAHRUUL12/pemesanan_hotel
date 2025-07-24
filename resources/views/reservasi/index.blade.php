@extends('template.app')
@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0">Data Reservasi</h3>
        <a href="{{ route('reservasi.create') }}" class="btn btn-info">+ Tambah Reservasi</a>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Customer</th>
                        <th>Tanggal Reservasi</th>
                        <th>Tanggal Checkin</th>
                        <th>Tanggal Checkout</th>
                        <th>Kamar</th>
                        <th class="text-center" style="width: 25%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($reservasis as $i => $reservasi)
                    <tr>
                        <td>{{ $i+1 }}</td>
                        <td>{{ $reservasi->customer->nama_customer ?? '-' }}</td>
                        <td>{{ $reservasi->tanggal }}</td>
                        <td>{{ $reservasi->tanggal_mulai }}</td>
                        <td>{{ $reservasi->tanggal_akhir }}</td>
                        <td>
                            @if($reservasi->hargaHariIni && $reservasi->hargaHariIni->kamar)
                                {{ $reservasi->hargaHariIni->kamar->nama_kamar }}<br>
                                <small>{{ ucfirst($reservasi->hargaHariIni->kamar->jenis_kamar) }}</small>
                            @else
                                -
                            @endif
                        </td>
                        <td class="text-center">
                            <a href="{{ route('reservasi.show', $reservasi->id_reservasi) }}" class="btn btn-info btn-sm me-1">Detail</a>
                            <a href="{{ route('reservasi.edit', $reservasi->id_reservasi) }}" class="btn btn-warning btn-sm me-1">Edit</a>
                            <form action="{{ route('reservasi.destroy', $reservasi->id_reservasi) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus reservasi ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center text-danger">Data reservasi belum ada.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection