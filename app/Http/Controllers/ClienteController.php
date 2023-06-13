<?php

namespace App\Http\Controllers;

use App\Domains\Cliente\Services\ClienteService;
use App\Http\Requests\Cliente\StoreClienteRequest;
use App\Http\Requests\Cliente\UpdateClienteRequest;

class ClienteController extends Controller
{
    protected $clienteService;

    public function __construct(ClienteService $clienteService)
    {
        $this->clienteService = $clienteService;
    }

    public function store(StoreClienteRequest $request)
    {
        $clienteData = $request->validated();

        $cliente = $this->clienteService->createCliente($clienteData);

        return response()->json($cliente, 201);
    }

    public function update(UpdateClienteRequest $request, int $id)
    {
        $clienteData = $request->validated();

        $cliente = $this->clienteService->getClienteById($id);

        if (!$cliente) {
            return response()->json(['message' => 'Cliente not found'], 404);
        }

        $this->clienteService->updateCliente($cliente, $clienteData);

        return response()->json($cliente, 200);
    }

    public function destroy(int $id)
    {
        $cliente = $this->clienteService->getClienteById($id);

        if (!$cliente) {
            return response()->json(['message' => 'Cliente not found'], 404);
        }

        $this->clienteService->deleteCliente($cliente);

        return response()->json(['message' => 'Cliente deleted'], 200);
    }

    public function index()
    {
        $clientes = $this->clienteService->getAllClientes();

        return response()->json($clientes, 200);
    }
}
