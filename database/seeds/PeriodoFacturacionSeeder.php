<?php

use App\PeriodoFacturacion;
use Illuminate\Database\Seeder;

class PeriodoFacturacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PeriodoFacturacion::create([
            'id' => '0',
            'periodofacturacion' => 'No def',
            'periodo'=>0,
            ]);
        PeriodoFacturacion::create([
            'id' => '1',
            'periodofacturacion' => 'Mensual',
            'periodo'=>1,
            ]);
        PeriodoFacturacion::create([
            'id' => '3',
            'periodofacturacion' => 'Trimestral',
            'periodo'=>3,
            ]);
        PeriodoFacturacion::create([
            'id' => '12',
            'periodofacturacion' => 'Anual',
            'periodo'=>12,
            ]);
        PeriodoFacturacion::create([
            'id' => '0',
            'periodofacturacion' => 'No Aplica',
            'periodo'=>0,
            ]);
    }
}
