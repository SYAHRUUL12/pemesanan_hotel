@extends('template.app')
@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0">Data Kamar</h3>
        <a href="{{ route('kamar.create') }}" class="btn btn-info">+ Tambah Kamar</a>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Nama Kamar</th>
                        <th>Jenis Kamar</th>
                        <th>Ukuran</th>
                        <th>Harga</th>
                        <th class="text-center" style="width: 30%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($kamars as $i => $kamar)
                    <tr>
                        <td>{{ $i+1 }}</td>
                        <td>{{ $kamar->nama_kamar }}</td>
                        <td>{{ $kamar->jenis_kamar }}</td>
                        <td>{{ $kamar->ukuran_kamar }} m²</td>
                        <td>Rp {{ number_format($kamar->harga,0,',','.') }}</td>
                        <td class="text-center">
                            <a href="{{ route('kamar.show', $kamar->id) }}" class="btn btn-info btn-sm me-1">Detail</a>
                            <a href="{{ route('kamar.edit', $kamar->id) }}" class="btn btn-warning btn-sm me-1">Edit</a>
                            <form action="{{ route('kamar.destroy', $kamar->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus kamar ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center text-danger">Data kamar belum ada.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection