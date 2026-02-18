<?php

namespace App\Http\Controllers;

use App\Models\Detalle_pedido_proveedor;
use Illuminate\Http\Request;

class DetallePedidoProveedorController extends Controller
{
    public function index()
    {
        return Detalle_pedido_proveedor::all();
    }

    public function store(Request $request)
    {
        return Detalle_pedido_proveedor::create($request->all());
    }

    public function show($id)
    {
        return Detalle_pedido_proveedor::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $detallePedidoProveedor = Detalle_pedido_proveedor::findOrFail($id);
        $detallePedidoProveedor->update($request->all());
        return $detallePedidoProveedor;
    }

    public function destroy($id)
    {
        $detallePedidoProveedor = Detalle_pedido_proveedor::findOrFail($id);
        $detallePedidoProveedor->delete();
        return response(null, 204);
    }
}