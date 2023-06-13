<?php

namespace App\Domains\Cliente\Repositories\Eloquent;

use App\Domains\Cliente\Entities\Cliente;
use App\Domains\Cliente\Repositories\ClienteRepository;
use Illuminate\Support\Collection;

class EloquentClienteRepository implements ClienteRepository
{
    public function create(array $clienteData): Cliente
    {
        return Cliente::create($clienteData);
    }

    public function update(Cliente $cliente, array $newData): bool
    {
        return $cliente->update($newData);
    }

    public function delete(Cliente $cliente): bool
    {
        return $cliente->delete();
    }

    public function getAll(): Collection
    {
        return Cliente::all();
    }

    public function findById(int $id): ?Cliente
    {
        return Cliente::find($id);
    }
}
