<?php

namespace App\Services\Client\Actions;

use App\Models\Client;

class ClientAction
{
    /** Cadastra ou atualiza o registro */
    public function handle(array $request, ?int $id): Client
    {
        $data = $this->getData($request, $id);

        return Client::updateOrCreate(['id' => $id], $data);
    }

    /** Obtêm os dados */
    private function getData(array $request): array
    {
        $data = [
            'name' => $request['name'],
            'cpf' => $request['cpf'],
            'email' => $request['email'],
            'active' => $request['active'],
        ];

        return $data;
    }
}
