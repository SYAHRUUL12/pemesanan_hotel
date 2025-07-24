@extends('template.app')
@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0">Data Harga Harian Kamar</h3>
        <a href="{{ route('harga_hari_ini.create') }}" class="btn btn-info">+ Tambah Harga Harian</a>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Kamar</th>
                        <th>Tanggal</th>
                        <th>Harga</th>
                        <th>Available Room</th>
                        <th class="text-center" style="width: 20%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($harga_hari_ini as $i => $harga)
                    <tr>
                        <td>{{ $i+1 }}</td>
                        <td>{{ $harga->kamar->nama_kamar ?? '-' }}</td>
                        <td>{{ $harga->tanggal }}</td>
                        <td>Rp {{ number_format($harga->harga, 0, ',', '.') }}</td>
                        <td>{{ $harga->available_room }}</td>
                        <td class="text-center" style="width: 30%;">
                            <a href="{{ route('harga_hari_ini.edit', $harga->id_hotel) }}" class="btn btn-warning btn-sm me-1">Edit</a>
                            <form action="{{ route('harga_hari_ini.destroy', $harga->id_hotel) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center text-danger">Data harga harian belum ada.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection