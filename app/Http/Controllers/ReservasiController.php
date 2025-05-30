<?php

namespace App\Http\Controllers;

use App\Models\reservasi;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function index()
    {
        $reservasis = reservasi::all();
        return response()->json($reservasis);
    }

    public function show($id)
    {
        $reservasi = Reservasi::find($id);
        return response()->json($reservasi);
    }

    public function store(Request $request)
    {
        $reservasi = Reservasi::create($request->all());
        return response()->json($reservasi, 201);
    }

    public function update(Request $request, $id)
    {
        $reservasi = Reservasi::findOrFail($id);
        $reservasi->update($request->all());
        return response()->json($reservasi, 200);
    }

    public function destroy($id)
    {
        Reservasi::destroy($id);
        return response()->json(null, 204);
    }
}
