<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ClienteController extends Controller
{
    /**
     * Mostrar lista de clientes
     */
    public function index()
    {
        // Lógica para obtener todos los clientes
        return response()->json(['mensaje' => 'Lista de clientes']);
    }

    /**
     * Crear nuevo cliente
     */
    public function store(Request $request)
    {
        // Validar datos
        $validated = $request->validate([
            'nombre' => 'required|string',
            'email' => 'required|email|unique:clientes',
            'telefono' => 'required|string',
        ]);

        // Crear cliente
        return response()->json(['mensaje' => 'Cliente creado'], 201);
    }

    /**
     * Mostrar cliente específico
     */
    public function show($id)
    {
        // Obtener cliente por ID
        return response()->json(['id' => $id]);
    }

    /**
     * Actualizar cliente
     */
    public function update(Request $request, $id)
    {
        // Actualizar datos del cliente
        return response()->json(['mensaje' => 'Cliente actualizado']);
    }

    /**
     * Eliminar cliente
     */
    public function destroy($id)
    {
        // Eliminar cliente
        return response()->json(['mensaje' => 'Cliente eliminado']);
    }
}