<?php

namespace App\Http\Controllers;

use App\Models\Pedido_proveedor;
use Illuminate\Http\Request;

class PedidoProveedorController extends Controller
{
    public function index()
    {
        return Pedido_proveedor::all();
    }

    public function store(Request $request)
    {
        return Pedido_proveedor::create($request->all());
    }

    public function show($id)
    {
        return Pedido_proveedor::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $pedidoProveedor = Pedido_proveedor::findOrFail($id);
        $pedidoProveedor->update($request->all());
        return $pedidoProveedor;
    }

    public function destroy($id)
    {
        $pedidoProveedor = Pedido_proveedor::findOrFail($id);
        $pedidoProveedor->delete();
        return response(null, 204);
    }
}