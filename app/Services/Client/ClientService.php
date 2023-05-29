<?php

namespace App\Services\Client;

use App\Models\Client;
use Exception;
use Facades\App\Services\Address\Actions\AddressAction;
use Facades\App\Services\Client\Actions\ClientAction;
use Facades\App\Services\Client\Actions\ClientDeleteAction;
use Illuminate\Support\Facades\DB;

class ClientService implements ClientServiceInterface
{
    /** Cadastra ou atualiza o registro */
    public function updateOrCreate(array $request, ?int $id = null): void
    {
        DB::beginTransaction();

        try {
            $client = ClientAction::handle($request, $id);

            AddressAction::handle($request, $client, $id);

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();

            abort(500);
        }
    }

    /** Remove o registro */
    public function delete(Client $client): void
    {
        DB::beginTransaction();

        try {
            ClientDeleteAction::handle($client);

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();

            abort(500);
        }
    }
}
