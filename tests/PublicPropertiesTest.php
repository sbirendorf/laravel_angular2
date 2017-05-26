<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PublicPropertiesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPropertiesListApi()
    {
        $data = $this->json('GET', '/api/public/properties/CA/Alameda')->seeStatusCode(200)->decodeResponseJson();

        $this->assertFalse($data['error']);
        $this->assertGreaterThan(0,$data['data'][0]["id"]);

        //test if bad arguments 

        //call the url with bad arg 

        //do we get an error message?
    }
}
