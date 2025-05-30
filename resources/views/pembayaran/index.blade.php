@extends('template.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="mb-0">Data Pembayaran</h3>
                <a href="{{ route('pembayaran.create') }}" class="btn btn-info">+ Tambah Pembayaran</a>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered align-middle mb-0">
                            <thead class="table-primary">
                                <tr>
                                    <th scope="col" class="text-center" style="width: 5%;">No</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Metode Bayar</th>
                                    <th scope="col" class="text-center" style="width: 28%;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($pembayarans as $i => $pembayaran)
                                    <tr>
                                        <td class="text-center">{{ $i+1 }}</td>
                                        <td>{{ $pembayaran->tanggal }}</td>
                                        <td>{{ ucfirst($pembayaran->metode_bayar) }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('pembayaran.show', $pembayaran->id) }}" class="btn btn-info btn-sm me-1">Detail</a>
                                            <a href="{{ route('pembayaran.edit', $pembayaran->id) }}" class="btn btn-warning btn-sm me-1">Edit</a>
                                            <form action="{{ route('pembayaran.destroy', $pembayaran->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center text-danger">Belum ada data pembayaran.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    {{-- {{ $pembayarans->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
