<?php

namespace Tests\Feature;

use App\APIProviders\APIService;
use App\APIProviders\FirstAPIProvider;
use App\APIProviders\SecondAPIProvider;
use App\Entities\Data;
use App\Models\Ticker;
use Tests\TestCase;

class APIServiceTest extends TestCase
{

    /**
     * test JSON response
     */
    public function test_json_response()
    {
        $response = (new APIService())->execute(new FirstAPIProvider());
        $this->checkDataStructure($response);
    }



    /**
     * test XML response
     */
    public function test_xml_response()
    {
        $response = (new APIService())->execute(new SecondAPIProvider());
        $this->checkDataStructure($response);

    }



    /**
     * check assertions on the data structure
     *
     * @param $response
     */
    private function checkDataStructure($response)
    {
        $this->assertInstanceOf(Data::class, $response);
        $this->assertIsArray($response->data);
        foreach ($response->data as $ticker) {
            $this->assertInstanceOf(Ticker::class, $ticker);
            $this->assertIsString($ticker->slug);
            $this->assertIsString($ticker->title);
            $this->assertIsString($ticker->symbol);
            $this->assertIsInt($ticker->rank);
            $this->assertIsFloat($ticker->price);
            $this->assertIsFloat($ticker->volume);
        }
    }
}
