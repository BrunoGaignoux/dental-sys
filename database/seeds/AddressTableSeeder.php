<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('address')->insert([
            'logradouro' => ' Rua Doutor Antônio José Luciano',
            'numero' => '263',
            'complemento' => '',
            'bairro' => 'Centro',
            'cidade' => 'OSASCO',
            'estado' => 'SÃO PAULO',
            'pais' => 'Brasil',
            'cep' => '06010110'
        ]);

        DB::table('address')->insert([
            'logradouro' => 'Campos Sales',
            'numero' => '303',
            'complemento' => '',
            'bairro' => 'Barueri',
            'cidade' => 'SÃO PAULO',
            'estado' => 'SÃO PAULO',
            'pais' => 'Brasil',
            'cep' => '06401000'
        ]);

        DB::table('address')->insert([
            'logradouro' => ' Rua Doutor AntÃƒÂ´nio JosÃƒÂ© Luciano',
            'numero' => '43',
            'complemento' => '',
            'bairro' => 'Centro',
            'cidade' => 'OSASCO',
            'estado' => 'SÃO PAULO',
            'pais' => 'Brasil',
            'cep' => '06010110'
        ]);

        DB::table('address')->insert([
            'logradouro' => 'RUA DEZENOVE DE FEVEREIRO',
            'numero' => '134',
            'complemento' => NULL,
            'bairro' => 'BOTAFOGO',
            'cidade' => 'RIO DE JANEIRO',
            'estado' => 'RIO DE JANEIRO',
            'pais' => 'BRASIL',
            'cep' => '22280030'
        ]);

        DB::table('address')->insert([
            'logradouro' => 'Q CSB 1 LOTE 03',
            'numero' => NULL,
            'complemento' => 'LOJA 01 PARTE A EDIF VIT ORIA REGIA I',
            'bairro' => 'TAGUATINGA SUL',
            'cidade' => 'BRASILIA',
            'estado' => 'DF',
            'pais' => 'Brasil',
            'cep' => '72015930'
        ]);

        DB::table('address')->insert([
            'logradouro' => 'RUA GOMES DE CARVALHO',
            'numero' => '1510',
            'complemento' => 'CONJ 51',
            'bairro' => 'VILA OLÍMPIA',
            'cidade' => 'SÃO PAULO',
            'estado' => 'SP',
            'pais' => 'BRASIL',
            'cep' => '04547005',
        ]);
    }
}
