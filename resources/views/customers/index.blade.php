@extends('template.app')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="mb-0">Data Customer</h3>
                <a href="{{ route('customers.create') }}" class="btn btn-info">+ Tambah Customer</a>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered align-middle mb-0">
                            <thead class="table-primary">
                                <tr>
                                    <th scope="col" class="text-center" style="width: 5%;">No</th>
                                    <th scope="col">NIK</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Country</th>
                                    <th scope="col" class="text-center" style="width: 18%;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($customers as $index => $pengguna)
                                    <tr>
                                        <td class="text-center">{{ $index + 1 }}</td>
                                        <td>{{ $pengguna->NIK }}</td>
                                        <td>{{ $pengguna->nama_customer }}</td>
                                        <td>{{ $pengguna->email }}</td>
                                        <td>{{ $pengguna->country }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('customers.edit', $pengguna->id) }}" class="btn btn-sm btn-primary me-1">Edit</a>
                                            <form action="{{ route('customers.destroy', $pengguna->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center text-danger">Data Customer Belum Ada.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    {{-- {{ $customers->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


