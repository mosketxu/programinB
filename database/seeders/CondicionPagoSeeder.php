<?php

namespace Database\Seeders;

use App\CondicionPago;
use Illuminate\Database\Seeder;

class CondicionPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CondicionPago::create(['condicionpago' => 'Transferencia IBAN: ES50 0081 0033 0000 0166 6572',]);
        CondicionPago::create(['condicionpago' => 'Recibo Domiciliado']);
        CondicionPago::create(['condicionpago' => 'No Definida']);
        CondicionPago::create(['condicionpago' => 'No Aplica']);
    }
}
