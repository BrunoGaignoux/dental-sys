<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DentistApiTest extends TestCase
{
    use MakeDentistTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateDentist()
    {
        $dentist = $this->fakeDentistData();
        $this->json('POST', '/api/v1/dentists', $dentist);

        $this->assertApiResponse($dentist);
    }

    /**
     * @test
     */
    public function testReadDentist()
    {
        $dentist = $this->makeDentist();
        $this->json('GET', '/api/v1/dentists/'.$dentist->id);

        $this->assertApiResponse($dentist->toArray());
    }

    /**
     * @test
     */
    public function testUpdateDentist()
    {
        $dentist = $this->makeDentist();
        $editedDentist = $this->fakeDentistData();

        $this->json('PUT', '/api/v1/dentists/'.$dentist->id, $editedDentist);

        $this->assertApiResponse($editedDentist);
    }

    /**
     * @test
     */
    public function testDeleteDentist()
    {
        $dentist = $this->makeDentist();
        $this->json('DELETE', '/api/v1/dentists/'.$dentist->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/dentists/'.$dentist->id);

        $this->assertResponseStatus(404);
    }
}
