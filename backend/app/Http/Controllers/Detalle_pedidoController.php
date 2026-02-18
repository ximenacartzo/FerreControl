<?php

namespace App\Http\Controllers;

use App\Models\Detalle_pedido;
use Illuminate\Http\Request;

class DetallePedidoController extends Controller
{
    public function index()
    {
        return Detalle_pedido::all();
    }

    public function store(Request $request)
    {
        return Detalle_pedido::create($request->all());
    }

    public function show($id)
    {
        return Detalle_pedido::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $detallePedido = Detalle_pedido::findOrFail($id);
        $detallePedido->update($request->all());
        return $detallePedido;
    }

    public function destroy($id)
    {
        $detallePedido = Detalle_pedido::findOrFail($id);
        $detallePedido->delete();
        return response(null, 204);
    }
}