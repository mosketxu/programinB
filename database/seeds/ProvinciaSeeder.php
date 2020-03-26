<?php

use Illuminate\Database\Seeder;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provincias')->delete();

        DB::table('provincias')->insert([
        ['id'=>'01','name'=>'ALABA'],
        ['id'=>'02','name'=>'ALBACETE'],
        ['id'=>'03','name'=>'ALICANTE'],
        ['id'=>'04','name'=>'ALMERÍA'],
        ['id'=>'05','name'=>'ÁVILA'],
        ['id'=>'06','name'=>'BADAJOZ'],
        ['id'=>'07','name'=>'BALEARES'],
        ['id'=>'08','name'=>'BARCELONA'],
        ['id'=>'09','name'=>'BURGOS'],
        ['id'=>'10','name'=>'CÁCERES'],
        ['id'=>'11','name'=>'CÁDIZ'],
        ['id'=>'12','name'=>'CASTELLÓN'],
        ['id'=>'13','name'=>'C.REAL'],
        ['id'=>'14','name'=>'CÓRDOBA'],
        ['id'=>'15','name'=>'A CORUÑA'],
        ['id'=>'16','name'=>'CUENCA'],
        ['id'=>'17','name'=>'GIRONA'],
        ['id'=>'18','name'=>'GRANADA'],
        ['id'=>'19','name'=>'GUADALAJARA'],
        ['id'=>'20','name'=>'GUIPÚZCOA'],
        ['id'=>'21','name'=>'HUELVA'],
        ['id'=>'22','name'=>'HUESCA'],
        ['id'=>'23','name'=>'JAÉN'],
        ['id'=>'24','name'=>'LEÓN',],
        ['id'=>'25','name'=>'LLEIDA'],
        ['id'=>'26','name'=>'LA RIOJA'],
        ['id'=>'27','name'=>'LUGO'],
        ['id'=>'28','name'=>'MADRID'],
        ['id'=>'29','name'=>'MÁLAGA'],
        ['id'=>'30','name'=>'MURCIA'],
        ['id'=>'31','name'=>'NAVARRA'],
        ['id'=>'32','name'=>'ORENSE'],
        ['id'=>'33','name'=>'ASTURIAS'],
        ['id'=>'34','name'=>'PALENCIA'],
        ['id'=>'35','name'=>'CANARIAS'],
        ['id'=>'36','name'=>'PONTEVEDRA'],
        ['id'=>'37','name'=>'SALAMANCA'],
        ['id'=>'38','name'=>'TENERIFE'],
        ['id'=>'39','name'=>'SANTANDER'],
        ['id'=>'40','name'=>'SEGOVIA'],
        ['id'=>'41','name'=>'SEVILLA'],
        ['id'=>'42','name'=>'SORIA',],
        ['id'=>'43','name'=>'TARRAGONA'],
        ['id'=>'44','name'=>'TERUEL'],
        ['id'=>'45','name'=>'TOLEDO'],
        ['id'=>'46','name'=>'VALENCIA'],
        ['id'=>'47','name'=>'VALLADOLID'],
        ['id'=>'48','name'=>'VIZCAYA'],
        ['id'=>'49','name'=>'ZAMORA'],
        ['id'=>'50','name'=>'ZARAGOZA'],
        ['id'=>'51','name'=>'CEUTA'],
        ['id'=>'52','name'=>'MELILLA'],
        ['id'=>'57','name'=>'ANDORRA'],
        ]);

    }
}
