<?php

namespace App\Services\Address;

interface AddressServiceInterface
{
    /** Cadastra ou atualiza o registro */
    public function updateOrCreate(array $request, ?int $id = null): void;
}
