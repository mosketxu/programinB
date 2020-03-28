<?php

use App\TipoEmpresa;
use Illuminate\Database\Seeder;

class TipoEmpresaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoEmpresa::create(['name' => 'Autónomo']);
        TipoEmpresa::create(['name' => 'Pyme']);
    }
}
