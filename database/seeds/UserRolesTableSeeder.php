<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Administrador do Sistema',
            'slug' => 'general_admin',
            'description' => 'Administrador Geral do Sistema',
            'created_at' => date('Y/m/d H:i:s')
        ]);

        DB::table('roles')->insert([
            'name' => 'Responsavel da Clinica',
            'slug' => 'clinic_resp',
            'description' => 'Responsável pela clínica',
            'created_at' => date('Y/m/d H:i:s')
        ]);

        DB::table('roles')->insert([
            'name' => 'Administrativo',
            'slug' => 'admin',
            'description' => 'Usuário administrativo',
            'created_at' => date('Y/m/d H:i:s')
        ]);

        DB::table('roles')->insert([
            'name' => 'Recepcionista',
            'slug' => 'receptionist',
            'description' => 'Recepcionista da clínica',
            'created_at' => date('Y/m/d H:i:s')
        ]);

        DB::table('roles')->insert([
            'name' => 'Dentista Clínico',
            'slug' => 'dentist_clinical',
            'description' => 'Dentista Clínico',
            'created_at' => date('Y/m/d H:i:s')
        ]);

        DB::table('roles')->insert([
            'name' => 'Dentista Avaliador',
            'slug' => 'dentist_appraiser',
            'description' => 'Dentista Avaliador',
            'created_at' => date('Y/m/d H:i:s')
        ]);

        DB::table('roles')->insert([
            'name' => 'Paciente',
            'slug' => 'pacient',
            'description' => 'Paciente da Clínica',
            'created_at' => date('Y/m/d H:i:s')
        ]);

    }
}
