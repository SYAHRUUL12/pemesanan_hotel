<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function index()
    {
        $kamars = Kamar::all();
        return view('kamar.index', compact('kamars'));
    }

    public function show($id)
    {
        $kamar = Kamar::findOrFail($id);
        return view('kamar.show', compact('kamar'));
    }
    public function create()
    {
        return view('kamar.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_kamar'   => 'required|unique:kamars|max:100',
            'jenis_kamar'  => 'required|in:deluxe,superior,president',
            'ukuran_kamar' => 'required|integer|min:1',
            'harga'        => 'required|numeric|min:0',
        ]);

        Kamar::create($validated);
        return redirect()->route('kamar.index');
    }
    public function edit($id)
    {
        $kamar = Kamar::findOrFail($id);
        return view('kamar.edit', compact('kamar'));
    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_kamar'   => 'required|max:100',
            'jenis_kamar'  => 'required|in:deluxe,superior,president',
            'ukuran_kamar' => 'required|integer|min:1',
            'harga'        => 'required|numeric|min:0',
        ]);

        $kamar = Kamar::findOrFail($id);
        $kamar->update($validated);
        return redirect()->route('kamar.index');
    }
    public function destroy($id)
    {
        $kamar = Kamar::findOrFail($id);
        $kamar->delete();
        return redirect()->route('kamar.index');
    }
}
