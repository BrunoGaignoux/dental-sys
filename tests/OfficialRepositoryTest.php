<?php

use App\Models\Official;
use App\Repositories\OfficialRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class OfficialRepositoryTest extends TestCase
{
    use MakeOfficialTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var OfficialRepository
     */
    protected $officialRepo;

    public function setUp()
    {
        parent::setUp();
        $this->officialRepo = App::make(OfficialRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateOfficial()
    {
        $official = $this->fakeOfficialData();
        $createdOfficial = $this->officialRepo->create($official);
        $createdOfficial = $createdOfficial->toArray();
        $this->assertArrayHasKey('id', $createdOfficial);
        $this->assertNotNull($createdOfficial['id'], 'Created Official must have id specified');
        $this->assertNotNull(Official::find($createdOfficial['id']), 'Official with given id must be in DB');
        $this->assertModelData($official, $createdOfficial);
    }

    /**
     * @test read
     */
    public function testReadOfficial()
    {
        $official = $this->makeOfficial();
        $dbOfficial = $this->officialRepo->find($official->id);
        $dbOfficial = $dbOfficial->toArray();
        $this->assertModelData($official->toArray(), $dbOfficial);
    }

    /**
     * @test update
     */
    public function testUpdateOfficial()
    {
        $official = $this->makeOfficial();
        $fakeOfficial = $this->fakeOfficialData();
        $updatedOfficial = $this->officialRepo->update($fakeOfficial, $official->id);
        $this->assertModelData($fakeOfficial, $updatedOfficial->toArray());
        $dbOfficial = $this->officialRepo->find($official->id);
        $this->assertModelData($fakeOfficial, $dbOfficial->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteOfficial()
    {
        $official = $this->makeOfficial();
        $resp = $this->officialRepo->delete($official->id);
        $this->assertTrue($resp);
        $this->assertNull(Official::find($official->id), 'Official should not exist in DB');
    }
}
