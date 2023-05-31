<?php

namespace Feature\Model;

use App\Models\Address;
use App\Models\Client;
use Illuminate\Support\Facades\Bus;
use Tests\TestCase;

class AddressTest extends TestCase
{
    protected $client;

    protected $address;

    protected function setUp(): void
    {
        parent::setUp();

        Bus::fake();

        $this->client = Client::factory()->create();

        $this->address = Address::factory()->create(['client_id' => $this->client->id]);
    }

    public function test_client()
    {
        $this->address->load('client');

        $this->assertInstanceOf(Client::class, $this->address->client);
    }
}
