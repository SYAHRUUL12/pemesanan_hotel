<?php

namespace App\Http\Controllers;

use App\Models\Harga_hari_ini;
use Illuminate\Http\Request;

class HargaHariIniController extends Controller
{
    public function index()
    {
        $hargaHariIni = Harga_hari_ini::all();
        return response()->json($hargaHariIni);
    }

    public function show($id)
    {
        $hargaHariIni = Harga_hari_ini::find($id);
        return response()->json($hargaHariIni);
    }

    public function store(Request $request)
    {
        $hargaHariIni = Harga_hari_ini::create($request->all());
        return response()->json($hargaHariIni, 201);
    }

    public function update(Request $request, $id)
    {
        $hargaHariIni = Harga_hari_ini::findOrFail($id);
        $hargaHariIni->update($request->all());
        return response()->json($hargaHariIni, 200);
    }

    public function destroy($id)
    {
        Harga_hari_ini::destroy($id);
        return response()->json(null, 204);
    }
}
