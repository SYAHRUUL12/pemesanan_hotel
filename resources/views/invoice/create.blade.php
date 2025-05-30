@extends('template.app')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <h3 class="mb-4">Tambah Invoice</h3>
                    <form action="{{ route('invoice.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea id="deskripsi" name="deskripsi" class="form-control" required>{{ old('deskripsi') }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select id="status" name="status" class="form-control" required>
                                <option value="">-- Pilih Status --</option>
                                <option value="bayar" {{ old('status') == 'bayar' ? 'selected' : '' }}>Bayar</option>
                                <option value="dp" {{ old('status') == 'dp' ? 'selected' : '' }}>DP</option>
                                <option value="lunas" {{ old('status') == 'lunas' ? 'selected' : '' }}>Lunas</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="besar_dp" class="form-label">Uang Panjar</label>
                            <input type="number" id="besar_dp" name="besar_dp" class="form-control" value="{{ old('besar_dp') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="NIK" class="form-label">NIK</label>
                            <input type="text" id="NIK" name="NIK" class="form-control" value="{{ old('NIK') }}" required minlength="16" maxlength="16" pattern="\d{16}" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,16);" placeholder="Masukkan 16 digit NIK">
                            <small class="text-muted">NIK harus 16 digit angka.</small>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
