<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    protected $model = Address::class;

    public function definition(): array
    {
        return [
            'street' => $this->faker->streetName,
            'number' => $this->faker->buildingNumber,
            'district' => $this->faker->firstName,
            'zipcode' => substr($this->faker->postcode, 0, 7),
            'uf' => $this->faker->stateAbbr,
            'city' => $this->faker->cityPrefix,
        ];
    }
}
