<?php

namespace App\Http\Controllers;

use App\Models\kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function index()
    {
        $kamars = kamar::all();
        return response()->json($kamars);
    }

    public function show($id)
    {
        $kamar = Kamar::find($id);
        return response()->json($kamar);
    }

    public function store(Request $request)
    {
        $kamar = Kamar::create($request->all());
        return response()->json($kamar, 201);
    }

    public function update(Request $request, $id)
    {
        $kamar = Kamar::findOrFail($id);
        $kamar->update($request->all());
        return response()->json($kamar, 200);
    }

    public function destroy($id)
    {
        Kamar::destroy($id);
        return response()->json(null, 204);
    }
}
