<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'codigo_clinica' => 2,
            'codigo_tipo_usuario' => 1,
            'codigo_pessoa_fisica' => 1,
            'name' => 'Admin - ITWV Solutions',
            'email' => 'admin@itwv.com.br',
            'password' => bcrypt('admin@itwv'),
            'created_at' => date('Y/m/d H:i:s')
        ]);
    }
}
