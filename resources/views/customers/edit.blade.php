@extends('template.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <h3 class="mb-4">Edit Customer</h3>
                    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="NIK" class="form-label">NIK</label>
                            <input type="text" name="NIK" id="NIK" class="form-control" value="{{ old('NIK', $customer->NIK) }}" required minlength="16" maxlength="16" pattern="\d{16}" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,16);" placeholder="Masukkan 16 digit NIK">
                            <small class="text-muted">NIK harus 16 digit angka.</small>
                        </div>
                        <div class="mb-3">
                            <label for="nama_customer" class="form-label">Nama Customer</label>
                            <input type="text" name="nama_customer" id="nama_customer" class="form-control" value="{{ old('nama_customer', $customer->nama_customer) }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $customer->email) }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" name="country" id="country" class="form-control" value="{{ old('country', $customer->country) }}" required>
                        </div>
                        @error('nama_customer')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                        <button type="submit" class="btn btn-primary w-100">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection