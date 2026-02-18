<?php

namespace App\Http\Controllers;

use App\Models\Especificacion;
use Illuminate\Http\Request;

class EspecificacionController extends Controller
{
    public function index()
    {
        return Especificacion::all();
    }

    public function store(Request $request)
    {
        return Especificacion::create($request->all());
    }

    public function show($id)
    {
        return Especificacion::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $especificacion = Especificacion::findOrFail($id);
        $especificacion->update($request->all());
        return $especificacion;
    }

    public function destroy($id)
    {
        $especificacion = Especificacion::findOrFail($id);
        $especificacion->delete();
        return response(null, 204);
    }
}