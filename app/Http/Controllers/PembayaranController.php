<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Customer;
use App\Models\customers;
use App\Models\Invoice;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        // Get all pembayaran
        $pembayarans = Pembayaran::all();
        return view('pembayaran.index', compact('pembayarans'));
    }

    public function show($id)
    {
        // Get a single pembayaran
        $pembayaran = Pembayaran::findOrFail($id);
        return view('pembayaran.show', compact('pembayaran'));
    }

    public function create()
    {
        $customers = \App\Models\Customers::all();
        $invoices = \App\Models\Invoice::all();
        return view('pembayaran.create', compact('customers', 'invoices'));
    }

    public function store(Request $request)
    {
        // Validate and save a new pembayaran
        $validated = $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'tanggal' => 'required|date',
            'metode_bayar' => 'required|in:cash,transfer',
            'invoice_id' => 'required|exists:invoice,id', // ← perbaiki di sini
        ]);

        Pembayaran::create($validated);
        return redirect()->route('pembayaran.index');
    }
    public function edit($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $customers = customers::all();
        $invoices = Invoice::all();
        return view('pembayaran.edit', compact('pembayaran', 'customers', 'invoices'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'tanggal' => 'required|date',
            'metode_bayar' => 'required|in:cash,transfer',
            'invoice_id' => 'required|exists:invoice,id',
        ]);

        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->update([
            'customer_id' => $request->customer_id,
            'tanggal' => $request->tanggal,
            'metode_bayar' => $request->metode_bayar,
            'invoice_id' => $request->invoice_id,
        ]);

        return redirect()->route('pembayaran.index')->with('success', 'Data pembayaran berhasil diubah!');
    }
    public function destroy($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->delete();

        return redirect()->route('pembayaran.index')->with('success', 'Data pembayaran berhasil dihapus!');
    }
}
