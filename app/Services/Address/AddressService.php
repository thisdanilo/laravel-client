<?php

namespace App\Services\Address;

use Exception;
use Facades\App\Services\Address\Actions\AddressAction;
use Illuminate\Support\Facades\DB;

class AddressService implements AddressServiceInterface
{
    /** Cadastra ou atualiza o registro */
    public function updateOrCreate(array $request, ?int $id = null): void
    {
        DB::beginTransaction();

        try {
            AddressAction::handle($request, $id);

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();

            abort(500);
        }
    }
}
