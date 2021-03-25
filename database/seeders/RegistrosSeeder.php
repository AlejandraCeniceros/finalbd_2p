<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RegistrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('registros')->insert([
            'codigo' => '123',
            'descripcion' => 'awa',
            'cantidad' => '50',
            'precio' => '00'
        ]);
    }
}