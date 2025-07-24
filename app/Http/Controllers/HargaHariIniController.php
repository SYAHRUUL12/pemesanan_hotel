<?php

namespace App\Http\Controllers;

use App\Models\Harga_hari_ini;
use Illuminate\Http\Request;

class HargaHariIniController extends Controller
{
    public function index()
    {
        $harga_hari_ini = Harga_hari_ini::with('kamar')->get();
        return view('harga_hari_ini.index', compact('harga_hari_ini'));
    }

    public function show($id)
    {
        $harga_hari_ini = Harga_hari_ini::findOrFail($id);
        return view('harga_hari_ini.show', compact('harga_hari_ini'));
    }

    public function create()
    {
        $kamars = \App\Models\Kamar::all();
        return view('harga_hari_ini.create', compact('kamars'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'harga' => 'required|numeric',
            'available_room' => 'required|integer',
            'tanggal' => 'required|date',
            'id_kamar' => 'required|exists:kamars,id', // ubah di sini
        ]);

        Harga_hari_ini::create($validated);
        return redirect()->route('harga_hari_ini.index');
    }

    public function edit($id)
    {
        $harga_hari_ini = Harga_hari_ini::findOrFail($id);
        $kamars = \App\Models\Kamar::all();
        return view('harga_hari_ini.edit', compact('harga_hari_ini', 'kamars'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'harga' => 'required|numeric',
            'available_room' => 'required|integer',
            'tanggal' => 'required|date',
            'id_kamar' => 'required|exists:kamars,id', // ubah di sini
        ]);

        $harga_hari_ini = Harga_hari_ini::findOrFail($id);
        $harga_hari_ini->update($validated);
        return redirect()->route('harga_hari_ini.index');
    }

    public function destroy($id)
    {
        $harga_hari_ini = Harga_hari_ini::findOrFail($id);
        $harga_hari_ini->delete();
        return redirect()->route('harga_hari_ini.index');
    }
}
