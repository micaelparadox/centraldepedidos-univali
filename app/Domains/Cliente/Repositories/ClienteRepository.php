<?php

namespace App\Domains\Cliente\Repositories;

use App\Domains\Cliente\Entities\Cliente;
use Illuminate\Support\Collection;

interface ClienteRepository
{
    public function create(array $clienteData): Cliente;
    public function update(Cliente $cliente, array $newData): bool;
    public function delete(Cliente $cliente): bool;
    public function getAll(): Collection;
    public function findById(int $id): ?Cliente;
}
    