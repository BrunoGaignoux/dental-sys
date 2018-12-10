<?php

use App\Models\Dentist;
use App\Repositories\DentistRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DentistRepositoryTest extends TestCase
{
    use MakeDentistTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var DentistRepository
     */
    protected $dentistRepo;

    public function setUp()
    {
        parent::setUp();
        $this->dentistRepo = App::make(DentistRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateDentist()
    {
        $dentist = $this->fakeDentistData();
        $createdDentist = $this->dentistRepo->create($dentist);
        $createdDentist = $createdDentist->toArray();
        $this->assertArrayHasKey('id', $createdDentist);
        $this->assertNotNull($createdDentist['id'], 'Created Dentist must have id specified');
        $this->assertNotNull(Dentist::find($createdDentist['id']), 'Dentist with given id must be in DB');
        $this->assertModelData($dentist, $createdDentist);
    }

    /**
     * @test read
     */
    public function testReadDentist()
    {
        $dentist = $this->makeDentist();
        $dbDentist = $this->dentistRepo->find($dentist->id);
        $dbDentist = $dbDentist->toArray();
        $this->assertModelData($dentist->toArray(), $dbDentist);
    }

    /**
     * @test update
     */
    public function testUpdateDentist()
    {
        $dentist = $this->makeDentist();
        $fakeDentist = $this->fakeDentistData();
        $updatedDentist = $this->dentistRepo->update($fakeDentist, $dentist->id);
        $this->assertModelData($fakeDentist, $updatedDentist->toArray());
        $dbDentist = $this->dentistRepo->find($dentist->id);
        $this->assertModelData($fakeDentist, $dbDentist->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteDentist()
    {
        $dentist = $this->makeDentist();
        $resp = $this->dentistRepo->delete($dentist->id);
        $this->assertTrue($resp);
        $this->assertNull(Dentist::find($dentist->id), 'Dentist should not exist in DB');
    }
}
