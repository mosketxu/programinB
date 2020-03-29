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
            'periodofacturacion' => 'Mensual',
            'periodo'=>1,
            ]);
        PeriodoFacturacion::create([
            'periodofacturacion' => 'Trimestral',
            'periodo'=>3,
            ]);
        PeriodoFacturacion::create([
            'periodofacturacion' => 'Anual',
            'periodo'=>12,
            ]);
        PeriodoFacturacion::create([
            'periodofacturacion' => 'No Aplica',
            'periodo'=>0,
            ]);
    }
}
