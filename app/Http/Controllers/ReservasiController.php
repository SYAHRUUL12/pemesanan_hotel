<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\Reservasi;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function index()
    {
        $reservasis = Reservasi::with(['customer', 'hargaHariIni.kamar'])->get();
        return view('reservasi.index', compact('reservasis'));
    }
    public function show($id)
    {
        $reservasi = Reservasi::findOrFail($id);
        return view('reservasi.show', compact('reservasi'));
    }
    public function create()
    {
        $customers = \App\Models\Customers::all();
        $harga_hari_inis = \App\Models\Harga_hari_ini::with('kamar')->get();
        return view('reservasi.create', compact('customers', 'harga_hari_inis'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_id'    => 'required|exists:customers,id',
            'tanggal'        => 'required|date',
            'tanggal_mulai'  => 'required|date',
            'tanggal_akhir'  => 'required|date|after:tanggal_mulai',
            'id_hotel'       => 'required|exists:harga_hari_inis,id_hotel',
        ]);

        Reservasi::create($validated);
        return redirect()->route('reservasi.index');
    }
    public function edit($id)
    {
        $reservasi = Reservasi::findOrFail($id);
        $customers = \App\Models\Customers::all();
        $harga_hari_inis = \App\Models\Harga_hari_ini::with('kamar')->get();
        return view('reservasi.edit', compact('reservasi', 'customers', 'harga_hari_inis'));
    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'customer_id'    => 'required|exists:customers,id',
            'tanggal'        => 'required|date',
            'tanggal_mulai'  => 'required|date',
            'tanggal_akhir'  => 'required|date|after:tanggal_mulai',
            'id_hotel'       => 'required|exists:harga_hari_inis,id_hotel',
        ]);

        $reservasis = reservasi::findOrFail($id); // <- perbaiki di sini
        $reservasis->update($validated);
        return redirect()->route('reservasi.index');
    }
    public function destroy($id)
    {
        $reservasis = reservasi::findOrFail($id); // <- perbaiki di sini
        $reservasis->delete();
        return redirect()->route('reservasi.index');
    }
}
