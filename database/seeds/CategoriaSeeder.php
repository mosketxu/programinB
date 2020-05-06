<?php

use App\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create(['categoria' => 'Alquiler']);
        Categoria::create(['categoria' => 'Desplazamiento']);
        Categoria::create(['categoria' => 'Dietas']);
        Categoria::create(['categoria' => 'Gastos Negocio']);
        Categoria::create(['categoria' => 'Nominas']);
        Categoria::create(['categoria' => 'Otros Gastos']);
        Categoria::create(['categoria' => 'Profesionales']);
        Categoria::create(['categoria' => 'Suministros']);
    }
}
