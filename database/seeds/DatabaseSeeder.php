<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AddressTableSeeder::class);
        $this->call(ClinicTableSeeder::class);
        $this->call(UserTypeTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UserRolesTableSeeder::class);
        //$this->call(UserPermissionsTableSeeder::class);
    }
}
