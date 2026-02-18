<?php

namespace App\Http\Controllers;

use App\Models\Pedido_cliente;
use Illuminate\Http\Request;

class PedidoClienteController extends Controller
{
    public function index()
    {
        return Pedido_cliente::all();
    }

    public function store(Request $request)
    {
        return Pedido_cliente::create($request->all());
    }

    public function show($id)
    {
        return Pedido_cliente::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $pedidoCliente = Pedido_cliente::findOrFail($id);
        $pedidoCliente->update($request->all());
        return $pedidoCliente;
    }

    public function destroy($id)
    {
        $pedidoCliente = Pedido_cliente::findOrFail($id);
        $pedidoCliente->delete();
        return response(null, 204);
    }
}