<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class OfficialApiTest extends TestCase
{
    use MakeOfficialTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateOfficial()
    {
        $official = $this->fakeOfficialData();
        $this->json('POST', '/api/v1/officials', $official);

        $this->assertApiResponse($official);
    }

    /**
     * @test
     */
    public function testReadOfficial()
    {
        $official = $this->makeOfficial();
        $this->json('GET', '/api/v1/officials/'.$official->id);

        $this->assertApiResponse($official->toArray());
    }

    /**
     * @test
     */
    public function testUpdateOfficial()
    {
        $official = $this->makeOfficial();
        $editedOfficial = $this->fakeOfficialData();

        $this->json('PUT', '/api/v1/officials/'.$official->id, $editedOfficial);

        $this->assertApiResponse($editedOfficial);
    }

    /**
     * @test
     */
    public function testDeleteOfficial()
    {
        $official = $this->makeOfficial();
        $this->json('DELETE', '/api/v1/officials/'.$official->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/officials/'.$official->id);

        $this->assertResponseStatus(404);
    }
}
