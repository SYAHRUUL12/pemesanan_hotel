@extends('template.app')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <h3 class="mb-4">Tambah Pembayaran</h3>
                    <form action="{{ route('pembayaran.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="customer_id" class="form-label">Customer</label>
                            <select id="customer_id" name="customer_id" class="form-control" required>
                                <option value="">-- Pilih Customer --</option>
                                @foreach ($customers as $customer)
                                    <option value="{{ $customer->id }}">{{ $customer->nama_customer }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="date" id="tanggal" name="tanggal" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="metode_bayar" class="form-label">Metode Bayar</label>
                            <select id="metode_bayar" name="metode_bayar" class="form-control" required>
                                <option value="">-- Pilih Metode --</option>
                                <option value="cash">Cash</option>
                                <option value="transfer">Transfer</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="invoice_id" class="form-label">Invoice</label>
                            <select id="invoice_id" name="invoice_id" class="form-control" required>
                                <option value="">-- Pilih Invoice --</option>
                                @foreach ($invoices as $invoice)
                                    <option value="{{ $invoice->id }}">{{ $invoice->deskripsi }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
