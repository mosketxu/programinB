<?php

namespace Database\Seeders;

use App\MetodoPago;
use Illuminate\Database\Seeder;

class MetodoPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MetodoPago::create(['metodopago' => 'Transferencia IBAN: ES50 0081 0033 0000 0166 6572','metodopagocorto'=>'Transferencia']);
        MetodoPago::create(['metodopago' => 'Recibo Domiciliado','metodopagocorto'=>'Recibo']);
        MetodoPago::create(['metodopago' => 'No Definida','metodopagocorto'=>'No.Def']);
        MetodoPago::create(['metodopago' => 'No Aplica','metodopagocorto'=>'No Aplica']);
    }
}
