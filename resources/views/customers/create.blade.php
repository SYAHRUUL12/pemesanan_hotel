@extends('template.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <h3 class="mb-4">Tambah Customer</h3>
                    <form action="{{ route('customers.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="NIK" class="form-label">NIK</label>
                            <input type="text" class="form-control" id="NIK" name="NIK" required>
                        </div>
                        <div class="mb-3">
                            <label for="nama_customer" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama_customer" name="nama_customer" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" class="form-control" id="country" name="country" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
