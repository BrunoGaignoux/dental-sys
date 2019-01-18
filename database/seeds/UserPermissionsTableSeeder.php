<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'name' => '',
            'slug' => '',
            'description' => '',
            'created_at' => date('Y/m/d H:i:s')
        ]);
    }
}
