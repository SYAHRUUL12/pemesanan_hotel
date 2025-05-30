<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\customers;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        // Get all customers
        $customers = Customers::all();
        return view('customers.index', compact('customers'));
    }

    public function show($id)
    {
        // Get a single customer
        $customer = Customers::findOrFail($id);
        return view('customers.show', compact('customer'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        // Validate and save a new customer
        $validated = $request->validate([
            'NIK' => 'required|unique:customers',
            'nama_customer' => 'required',
            'email' => 'required|email',
            'country' => 'required',
        ]);

        Customers::create($validated);
        return redirect()->route('customers.index');
    }
    public function edit(string $id): View
    {
        $customer = customers::findOrFail($id);
        return view('customers.edit', compact('customer'));
    }
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $request->validate([
            'nama_customer'      => 'required|min:2'
        ]);

        $customer = customers::findOrFail($id);
        $customer->update([
            'NIK'  => $request->NIK,
             'nama_customer'  => $request->nama_customer,
             'email'  => $request->email,
             'country'  => $request->country,
            ]);

        return redirect()->route('customers.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    public function destroy($id)
    {
        $customer = Customers::findOrFail($id);

        // Hapus semua pembayaran yang terkait dengan customer ini
        $customer->pembayaran()->delete();

        // Hapus customer
        $customer->delete();

        return redirect()->route('customers.index')->with('success', 'Customer deleted successfully.');
    }
}
