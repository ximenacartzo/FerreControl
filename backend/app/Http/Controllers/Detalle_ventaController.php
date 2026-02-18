<?php

namespace App\Http\Controllers;

use App\Models\Detalle_venta;
use Illuminate\Http\Request;

class DetalleVentaController extends Controller
{
    public function index()
    {
        return Detalle_venta::all();
    }

    public function store(Request $request)
    {
        return Detalle_venta::create($request->all());
    }

    public function show($id)
    {
        return Detalle_venta::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $detalleVenta = Detalle_venta::findOrFail($id);
        $detalleVenta->update($request->all());
        return $detalleVenta;
    }

    public function destroy($id)
    {
        $detalleVenta = Detalle_venta::findOrFail($id);
        $detalleVenta->delete();
        return response(null, 204);
    }
}