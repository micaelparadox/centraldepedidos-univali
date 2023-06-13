<?php

namespace App\Domains\Compra\Repositories;

use App\Domains\Compra\Entities\Compra;
use Illuminate\Support\Collection;

interface CompraRepository
{
    public function create(array $compraData): Compra;
    public function update(Compra $compra, array $newData): bool;
    public function delete(Compra $compra): bool;
    public function getAll(): Collection;
    public function findById(int $id): ?Compra;
}
