<?php

namespace App\Services\Address\Actions;

use App\Models\Address;
use App\Models\Client;

class AddressAction
{
    //-----------------------------------------------------------------
    // Main Functions and Methods
    //-----------------------------------------------------------------

    /** Cadastra ou atualiza o registro */
    public function handle(array $request, Client $client, ?int $id): void
    {
        $data = $this->getData($request, $client, $id);

        Address::updateOrCreate(['id' => $id], $data);
    }

    //-----------------------------------------------------------------
    // Complementary Functions and Methods
    //-----------------------------------------------------------------

    /** Obtêm os dados */
    private function getData(array $request, Client $client): array
    {
        $data = [
            'zipcode' => $request['zipcode'],
            'street' => $request['street'],
            'number' => $request['number'],
            'comp' => $request['comp'],
            'district' => $request['district'],
            'info' => $request['info'],
            'uf' => $request['uf'],
            'city' => $request['city'],
            'client_id' => $client->id,
        ];

        return $data;
    }
}
