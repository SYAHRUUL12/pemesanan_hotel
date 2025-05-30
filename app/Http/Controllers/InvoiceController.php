<?php

namespace App\Http\Controllers;

use App\Models\invoice;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        // Get all invoices
        $invoice = invoice::all();
        return view('invoice.index', compact('invoice'));
    }

    public function show($id)
    {
        // Get a single invoice
        $invoice = invoice::findOrFail($id);
        return view('invoice.show', compact('invoice'));
    }

    public function create()
    {
        return view('invoice.create');
    }

    public function store(Request $request)
    {
        // Validate and save a new invoice
        $validated = $request->validate([
            'deskripsi' => 'required',
            'status' => 'required|in:bayar,dp,lunas',
            'besar_dp' => $request->status == 'lunas' ? 'nullable|numeric|min:0' : 'required|numeric|min:1',
            'NIK' => 'required|digits:16',
        ]);

        invoice::create($validated);
        return redirect()->route('invoice.index');
    }
    public function edit(string $id): View
    {
        $invoice = invoice::findOrFail($id);
        return view('invoice.edit', compact('invoice'));
    }
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        

        $invoice = invoice::findOrFail($id);
        $invoice->update([
            'deskripsi'  => $request->deskripsi,
             'status'  => $request->status,
             'besar_dp'  => $request->besar_dp,
             'NIK'  => $request->NIK,
            ]);

        return redirect()->route('invoice.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    public function destroy($id)
    {
        $invoice = invoice::findOrFail($id);
        $invoice->delete();

        return redirect()->route('invoice.index')->with('success', 'Invoice deleted successfully.');
    }
}
