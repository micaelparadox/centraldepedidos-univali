<?php

namespace App\Domains\Compra\Repositories\Eloquent;

use App\Domains\Compra\Entities\Compra;
use App\Domains\Compra\Repositories\CompraRepository;
use Illuminate\Support\Collection;

class EloquentCompraRepository implements CompraRepository
{
    public function create(array $compraData): Compra
    {
        return Compra::create($compraData);
    }

    public function update(Compra $compra, array $newData): bool
    {
        return $compra->update($newData);
    }

    public function delete(Compra $compra): bool
    {
        return $compra->delete();
    }

    public function getAll(): Collection
    {
        return Compra::all();
    }

    public function findById(int $id): ?Compra
    {
        return Compra::find($id);
    }
}
