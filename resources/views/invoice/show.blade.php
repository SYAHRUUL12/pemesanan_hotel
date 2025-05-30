@extends('layouts.app')

@section('content')
    <h1>Invoice Details</h1>
    <p>Deskripsi: {{ $invoice->deskripsi }}</p>
    <p>Status: {{ $invoice->status }}</p>
    <p>Besar DP: {{ $invoice->besar_dp }}</p>
    <p>Customer NIK: {{ $invoice->NIK }}</p>
    <a href="{{ route('invoices.index') }}">Back to Invoices</a>
@endsection
