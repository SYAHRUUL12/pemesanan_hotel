@extends('template.app')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="mb-0">Data Invoice</h3>
                <a href="{{ route('invoice.create') }}" class="btn btn-info">+ Tambah Invoice</a>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered align-middle mb-0">
                            <thead class="table-primary">
                                <tr>
                                    <th scope="col" class="text-center" style="width: 5%;">No</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Besar DP</th>
                                    <th scope="col">NIK</th>
                                    <th scope="col" class="text-center" style="width: 20%;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($invoice as $index => $item)
                                    <tr>
                                        <td class="text-center">{{ $index + 1 }}</td>
                                        <td>{{ $item->deskripsi }}</td>
                                        <td>{{ ucfirst($item->status) }}</td>
                                        <td>{{ $item->besar_dp }}</td>
                                        <td>{{ $item->NIK }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('invoice.edit', $item->id) }}" class="btn btn-sm btn-primary me-1">Edit</a>
                                            <form action="{{ route('invoice.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center text-danger">Data Invoice Belum Ada.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    {{-- {{ $invoice->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection