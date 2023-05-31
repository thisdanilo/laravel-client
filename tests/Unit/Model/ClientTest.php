<?php

namespace Unit\Model;

use App\Models\Client;
use Tests\TestCase;

class ClientTest extends TestCase
{
    protected $client;

    protected function setUp(): void
    {
        parent::setUp();

        $this->client = new Client();
    }

    /**
     * @dataProvider valueAttributeDataProvider
     */
    public function test_get_formatted_active_attribute($value, $expected_result)
    {
        $this->client->active = $value;

        $this->assertEquals($expected_result, $this->client->formatted_active);
    }

    public static function valueAttributeDataProvider()
    {
        yield 'campo formatado deve retornar Sim' => [
            'value' => true,
            'expected_result' => 'Sim',
        ];

        yield 'campo formatado deve retornar Não' => [
            'value' => false,
            'expected_result' => 'Não',
        ];
    }
}
