<?php

use App\CondicionPago;
use App\PeriodoFacturacion;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        // $this->call(PaisSeeder::class);
        // $this->call(ProvinciaSeeder::class);
        // $this->call(DepartamentoSeeder::class);
        //  $this->call(PeriodoFacturacionSeeder::class);
        // $this->call(CondicionPagoSeeder::class);
        // $this->call(EmpresaSeeder::class);
        // $this->call(TipoEmpresaSeeder::class);

    }
}
