<?php

namespace App\Domains\Compra\Services;

use App\Domains\Compra\Entities\Compra;
use App\Domains\Compra\Repositories\CompraRepository;

class CompraService
{
    protected $compraRepository;

    public function __construct(CompraRepository $compraRepository)
    {
        $this->compraRepository = $compraRepository;
    }

    public function createCompra(array $compraData): Compra
    {
        return $this->compraRepository->create($compraData);
    }

    public function updateCompra(Compra $compra, array $newData): bool
    {
        return $this->compraRepository->update($compra, $newData);
    }

    public function deleteCompra(Compra $compra): bool
    {
        return $this->compraRepository->delete($compra);
    }

    public function getAllCompras()
    {
        return $this->compraRepository->getAll();
    }

    public function getCompraById(int $id): ?Compra
    {
        return $this->compraRepository->findById($id);
    }
}
