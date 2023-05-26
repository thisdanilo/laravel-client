<?php

namespace App\Services\Actions;

use App\Models\Client;

class ClientDeleteAction
{
    /** Remove o registro */
    public function handle(Client $client): void
    {
        $client->delete();
    }
}
