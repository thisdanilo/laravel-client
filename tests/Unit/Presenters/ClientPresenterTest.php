<?php

namespace Unit\Presenters;

use App\Models\Client;
use Tests\TestCase;

class ClientPresenterTest extends TestCase
{
    protected $client;

    protected function setUp(): void
    {
        parent::setUp();

        $this->client = new Client();
    }

    /** @dataProvider getActiveDataProvider */
    public function test_get_active($value, $expected_result)
    {
        $this->client->active = $value;

        $this->assertStringContainsString($expected_result, $this->client->present()->getActive);
    }

    public static function getActiveDataProvider()
    {
        yield 'getActiveDataProvider deve retornar Sim' => [
            'value' => true,
            'expected_result' => 'Sim',
        ];

        yield 'getActiveDataProvider deve retornar Não' => [
            'value' => false,
            'expected_result' => 'Não',
        ];
    }
}
