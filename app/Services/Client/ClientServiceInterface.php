<?php

namespace App\Services\Client;

use App\Models\Client;

interface ClientServiceInterface
{
    /** Cadastra ou atualiza o registro */
    public function updateOrCreate(array $request, ?int $id = null): void;

    /** Remove o registro */
    public function delete(Client $client): void;
}
