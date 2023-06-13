<?php

namespace App\Domains\Cliente\Services;

use App\Domains\Cliente\Entities\Cliente;
use App\Domains\Cliente\Repositories\ClienteRepository;

class ClienteService
{
    protected $clienteRepository;

    public function __construct(ClienteRepository $clienteRepository)
    {
        $this->clienteRepository = $clienteRepository;
    }

    public function createCliente(array $clienteData): Cliente
    {
        return $this->clienteRepository->create($clienteData);
    }

    public function updateCliente(Cliente $cliente, array $newData): bool
    {
        return $this->clienteRepository->update($cliente, $newData);
    }

    public function deleteCliente(Cliente $cliente): bool
    {
        return $this->clienteRepository->delete($cliente);
    }

    public function getAllClientes()
    {
        return $this->clienteRepository->getAll();
    }

    public function getClienteById(int $id): ?Cliente
    {
        return $this->clienteRepository->findById($id);
    }
}
