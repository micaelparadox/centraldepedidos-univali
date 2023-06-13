<?php

namespace App\Http\Controllers;

use App\Domains\Compra\Services\CompraService;
use App\Http\Requests\Compra\StoreCompraRequest;
use App\Http\Requests\Compra\UpdateCompraRequest;

class CompraController extends Controller
{
    protected $compraService;

    public function __construct(CompraService $compraService)
    {
        $this->compraService = $compraService;
    }

    public function store(StoreCompraRequest $request)
    {
        $compraData = $request->validated();

        $compra = $this->compraService->createCompra($compraData);

        return response()->json($compra, 201);
    }

    public function update(UpdateCompraRequest $request, int $id)
    {
        $compraData = $request->validated();

        $compra = $this->compraService->getCompraById($id);

        if (!$compra) {
            return response()->json(['message' => 'Compra not found'], 404);
        }

        $this->compraService->updateCompra($compra, $compraData);

        return response()->json($compra, 200);
    }

    public function destroy(int $id)
    {
        $compra = $this->compraService->getCompraById($id);

        if (!$compra) {
            return response()->json(['message' => 'Compra not found'], 404);
        }

        $this->compraService->deleteCompra($compra);

        return response()->json(['message' => 'Compra deleted'], 200);
    }

    public function index()
    {
        $compras = $this->compraService->getAllCompras();

        return response()->json($compras, 200);
    }
}
