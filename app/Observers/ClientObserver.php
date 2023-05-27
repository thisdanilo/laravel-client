<?php

namespace App\Observers;

use App\Jobs\WelcomeClient;
use App\Models\Client;

class ClientObserver
{
    /**
     * Handle the Client "created" event.
     */
    public function created(Client $client): void
    {
        WelcomeClient::dispatch($client);
    }
}
