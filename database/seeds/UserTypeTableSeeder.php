<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class UserTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_type')->insert([
            'slug' => 'general_admin',
            'description' => 'Administrador Geral do Sistema'
        ]);

        DB::table('user_type')->insert([
            'slug' => 'clinic_admin',
            'description' => 'Administrador da Clínica'
        ]);

        DB::table('user_type')->insert([
            'slug' => 'dentist',
            'description' => 'Dentista da Clínica'
        ]);

        DB::table('user_type')->insert([
            'slug' => 'pacient',
            'description' => 'Paciente da Clínica'
        ]);
    }
}
