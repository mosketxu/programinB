<?php

use Illuminate\Database\Seeder;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paises')->delete();

        DB::table('paises')->insert([
            ['id'=>'AF','pais'=>'Afganistán','c3' => 'AFG'],
            ['id'=>'AL','pais'=>'Albania','c3' => 'ALB'],
            ['id'=>'AQ','pais'=>'Antártida','c3' => 'ATA'],
            ['id'=>'DZ','pais'=>'Argelia','c3' => 'DZA'],
            ['id'=>'AS','pais'=>'Samoa Americana','c3' => 'ASM'],
            ['id'=>'AD','pais'=>'Andorra','c3' => 'AND'],
            ['id'=>'AO','pais'=>'Angola','c3' => 'AGO'],
            ['id'=>'AG','pais'=>'Antigua y Barbuda','c3' => 'ATG'],
            ['id'=>'AZ','pais'=>'Azerbaiyán','c3' => 'AZE'],
            ['id'=>'AR','pais'=>'Argentina','c3' => 'ARG'],
            ['id'=>'AU','pais'=>'Australia','c3' => 'AUS'],
            ['id'=>'AT','pais'=>'Austria','c3' => 'AUT'],
            ['id'=>'BS','pais'=>'Bahamas','c3' => 'BHS'],
            ['id'=>'BH','pais'=>'Baréin','c3' => 'BHR'],
            ['id'=>'BD','pais'=>'Bangladés','c3' => 'BGD'],
            ['id'=>'AM','pais'=>'Armenia','c3' => 'ARM'],
            ['id'=>'BB','pais'=>'Barbados','c3' => 'BRB'],
            ['id'=>'BE','pais'=>'Bélgica','c3' => 'BEL'],
            ['id'=>'BM','pais'=>'Bermudas','c3' => 'BMU'],
            ['id'=>'BT','pais'=>'Bután','c3' => 'BTN'],
            ['id'=>'BO','pais'=>'Bolivia','c3' => 'BOL'],
            ['id'=>'BA','pais'=>'Bosnia y Herzegovina','c3' => 'BIH'],
            ['id'=>'BW','pais'=>'Botsuana','c3' => 'BWA'],
            ['id'=>'BV','pais'=>'Isla Bouvet','c3' => 'BVT'],
            ['id'=>'BR','pais'=>'Brasil','c3' => 'BRA'],
            ['id'=>'BZ','pais'=>'Belice','c3' => 'BLZ'],
            ['id'=>'IO','pais'=>'Territorio Británico del Océano Índico','c3' => 'IOT'],
            ['id'=>'SB','pais'=>'Islas Salomón','c3' => 'SLB'],
            ['id'=>'VG','pais'=>'Islas Vírgenes Británicas','c3' => 'VGB'],
            ['id'=>'BN','pais'=>'Brunéi','c3' => 'BRN'],
            ['id'=>'BG','pais'=>'Bulgaria','c3' => 'BGR'],
            ['id'=>'MM','pais'=>'Myanmar','c3' => 'MMR'],
            ['id'=>'BI','pais'=>'Burundi','c3' => 'BDI'],
            ['id'=>'BY','pais'=>'Bielorrusia','c3' => 'BLR'],
            ['id'=>'KH','pais'=>'Camboya','c3' => 'KHM'],
            ['id'=>'CM','pais'=>'Camerún','c3' => 'CMR'],
            ['id'=>'CA','pais'=>'Canadá','c3' => 'CAN'],
            ['id'=>'CV','pais'=>'Cabo Verde','c3' => 'CPV'],
            ['id'=>'KY','pais'=>'Islas Caimán','c3' => 'CYM'],
            ['id'=>'CF','pais'=>'República Centroafricana','c3' => 'CAF'],
            ['id'=>'LK','pais'=>'Sri Lanka','c3' => 'LKA'],
            ['id'=>'TD','pais'=>'Chad','c3' => 'TCD'],
            ['id'=>'CL','pais'=>'Chile','c3' => 'CHL'],
            ['id'=>'CN','pais'=>'China','c3' => 'CHN'],
            ['id'=>'TW','pais'=>'Taiwán (República de China)','c3' => 'TWN'],
            ['id'=>'CX','pais'=>'Isla de Navidad','c3' => 'CXR'],
            ['id'=>'CC','pais'=>'Islas Cocos','c3' => 'CCK'],
            ['id'=>'CO','pais'=>'Colombia','c3' => 'COL'],
            ['id'=>'KM','pais'=>'Comoras','c3' => 'COM'],
            ['id'=>'YT','pais'=>'Mayotte','c3' => 'MYT'],
            ['id'=>'CG','pais'=>'República del Congo','c3' => 'COG'],
            ['id'=>'CD','pais'=>'República Democrática del Congo','c3' => 'COD'],
            ['id'=>'CK','pais'=>'Islas Cook','c3' => 'COK'],
            ['id'=>'CR','pais'=>'Costa Rica','c3' => 'CRI'],
            ['id'=>'HR','pais'=>'Croacia','c3' => 'HRV'],
            ['id'=>'CU','pais'=>'Cuba','c3' => 'CUB'],
            ['id'=>'CY','pais'=>'Chipre','c3' => 'CYP'],
            ['id'=>'CZ','pais'=>'República Checa','c3' => 'CZE'],
            ['id'=>'BJ','pais'=>'Benín','c3' => 'BEN'],
            ['id'=>'DK','pais'=>'Dinamarca','c3' => 'DNK'],
            ['id'=>'DM','pais'=>'Dominica','c3' => 'DMA'],
            ['id'=>'DO','pais'=>'República Dominicana','c3' => 'DOM'],
            ['id'=>'EC','pais'=>'Ecuador','c3' => 'ECU'],
            ['id'=>'SV','pais'=>'El Salvador','c3' => 'SLV'],
            ['id'=>'GQ','pais'=>'Guinea Ecuatorial','c3' => 'GNQ'],
            ['id'=>'ET','pais'=>'Etiopía','c3' => 'ETH'],
            ['id'=>'ER','pais'=>'Eritrea','c3' => 'ERI'],
            ['id'=>'EE','pais'=>'Estonia','c3' => 'EST'],
            ['id'=>'FO','pais'=>'Islas Feroe','c3' => 'FRO'],
            ['id'=>'FK','pais'=>'Islas Malvinas','c3' => 'FLK'],
            ['id'=>'GS','pais'=>'Islas Georgias del Sur y Sandwich del Sur','c3' => 'SGS'],
            ['id'=>'FJ','pais'=>'Fiyi','c3' => 'FJI'],
            ['id'=>'FI','pais'=>'Finlandia','c3' => 'FIN'],
            ['id'=>'AX','pais'=>'Aland','c3' => 'ALA'],
            ['id'=>'FR','pais'=>'Francia','c3' => 'FRA'],
            ['id'=>'GF','pais'=>'Guayana Francesa','c3' => 'GUF'],
            ['id'=>'PF','pais'=>'Polinesia Francesa','c3' => 'PYF'],
            ['id'=>'TF','pais'=>'Tierras Australes y Antárticas Francesas','c3' => 'ATF'],
            ['id'=>'DJ','pais'=>'Yibuti','c3' => 'DJI'],
            ['id'=>'GA','pais'=>'Gabón','c3' => 'GAB'],
            ['id'=>'GE','pais'=>'Georgia','c3' => 'GEO'],
            ['id'=>'GM','pais'=>'Gambia','c3' => 'GMB'],
            ['id'=>'PS','pais'=>'Palestina','c3' => 'PSE'],
            ['id'=>'DE','pais'=>'Alemania','c3' => 'DEU'],
            ['id'=>'GH','pais'=>'Ghana','c3' => 'GHA'],
            ['id'=>'GI','pais'=>'Gibraltar','c3' => 'GIB'],
            ['id'=>'KI','pais'=>'Kiribati','c3' => 'KIR'],
            ['id'=>'GR','pais'=>'Grecia','c3' => 'GRC'],
            ['id'=>'GL','pais'=>'Groenlandia','c3' => 'GRL'],
            ['id'=>'GD','pais'=>'Granada','c3' => 'GRD'],
            ['id'=>'GP','pais'=>'Guadalupe','c3' => 'GLP'],
            ['id'=>'GU','pais'=>'Guam','c3' => 'GUM'],
            ['id'=>'GT','pais'=>'Guatemala','c3' => 'GTM'],
            ['id'=>'GN','pais'=>'Guinea','c3' => 'GIN'],
            ['id'=>'GY','pais'=>'Guyana','c3' => 'GUY'],
            ['id'=>'HT','pais'=>'Haití','c3' => 'HTI'],
            ['id'=>'HM','pais'=>'Islas Heard y McDonald','c3' => 'HMD'],
            ['id'=>'VA','pais'=>'Vaticano, Ciudad del','c3' => 'VAT'],
            ['id'=>'HN','pais'=>'Honduras','c3' => 'HND'],
            ['id'=>'HK','pais'=>'Hong Kong','c3' => 'HKG'],
            ['id'=>'HU','pais'=>'Hungría','c3' => 'HUN'],
            ['id'=>'IS','pais'=>'Islandia','c3' => 'ISL'],
            ['id'=>'IN','pais'=>'India','c3' => 'IND'],
            ['id'=>'id','pais'=>'Indonesia','c3' => 'idN'],
            ['id'=>'IR','pais'=>'Irán','c3' => 'IRN'],
            ['id'=>'IQ','pais'=>'Irak','c3' => 'IRQ'],
            ['id'=>'IE','pais'=>'Irlanda','c3' => 'IRL'],
            ['id'=>'IL','pais'=>'Israel','c3' => 'ISR'],
            ['id'=>'IT','pais'=>'Italia','c3' => 'ITA'],
            ['id'=>'CI','pais'=>'Costa de Marfil','c3' => 'CIV'],
            ['id'=>'JM','pais'=>'Jamaica','c3' => 'JAM'],
            ['id'=>'JP','pais'=>'Japón','c3' => 'JPN'],
            ['id'=>'KZ','pais'=>'Kazajistán','c3' => 'KAZ'],
            ['id'=>'JO','pais'=>'Jordania','c3' => 'JOR'],
            ['id'=>'KE','pais'=>'Kenia','c3' => 'KEN'],
            ['id'=>'KP','pais'=>'Corea del Norte','c3' => 'PRK'],
            ['id'=>'KR','pais'=>'Corea del Sur','c3' => 'KOR'],
            ['id'=>'KW','pais'=>'Kuwait','c3' => 'KWT'],
            ['id'=>'KG','pais'=>'Kirguistán','c3' => 'KGZ'],
            ['id'=>'LA','pais'=>'Laos','c3' => 'LAO'],
            ['id'=>'LB','pais'=>'Líbano','c3' => 'LBN'],
            ['id'=>'LS','pais'=>'Lesoto','c3' => 'LSO'],
            ['id'=>'LV','pais'=>'Letonia','c3' => 'LVA'],
            ['id'=>'LR','pais'=>'Liberia','c3' => 'LBR'],
            ['id'=>'LY','pais'=>'Libia','c3' => 'LBY'],
            ['id'=>'LI','pais'=>'Liechtenstein','c3' => 'LIE'],
            ['id'=>'LT','pais'=>'Lituania','c3' => 'LTU'],
            ['id'=>'LU','pais'=>'Luxemburgo','c3' => 'LUX'],
            ['id'=>'MO','pais'=>'Macao','c3' => 'MAC'],
            ['id'=>'MG','pais'=>'Madagascar','c3' => 'MDG'],
            ['id'=>'MW','pais'=>'Malaui','c3' => 'MWI'],
            ['id'=>'MY','pais'=>'Malasia','c3' => 'MYS'],
            ['id'=>'MV','pais'=>'Maldivas','c3' => 'MDV'],
            ['id'=>'ML','pais'=>'Malí','c3' => 'MLI'],
            ['id'=>'MT','pais'=>'Malta','c3' => 'MLT'],
            ['id'=>'MQ','pais'=>'Martinica','c3' => 'MTQ'],
            ['id'=>'MR','pais'=>'Mauritania','c3' => 'MRT'],
            ['id'=>'MU','pais'=>'Mauricio','c3' => 'MUS'],
            ['id'=>'MX','pais'=>'México','c3' => 'MEX'],
            ['id'=>'MC','pais'=>'Mónaco','c3' => 'MCO'],
            ['id'=>'MN','pais'=>'Mongolia','c3' => 'MNG'],
            ['id'=>'MD','pais'=>'Moldavia','c3' => 'MDA'],
            ['id'=>'ME','pais'=>'Montenegro','c3' => 'MNE'],
            ['id'=>'MS','pais'=>'Montserrat','c3' => 'MSR'],
            ['id'=>'MA','pais'=>'Marruecos','c3' => 'MAR'],
            ['id'=>'MZ','pais'=>'Mozambique','c3' => 'MOZ'],
            ['id'=>'OM','pais'=>'Omán','c3' => 'OMN'],
            ['id'=>'NA','pais'=>'Namibia','c3' => 'NAM'],
            ['id'=>'NR','pais'=>'Nauru','c3' => 'NRU'],
            ['id'=>'NP','pais'=>'Nepal','c3' => 'NPL'],
            ['id'=>'NL','pais'=>'Países Bajos','c3' => 'NLD'],
            ['id'=>'CW','pais'=>'Curazao','c3' => 'CUW'],
            ['id'=>'AW','pais'=>'Aruba','c3' => 'ABW'],
            ['id'=>'SX','pais'=>'Sint Maarten','c3' => 'SXM'],
            ['id'=>'BQ','pais'=>'Bonaire, San Eustaquio y Saba','c3' => 'BES'],
            ['id'=>'NC','pais'=>'Nueva Caledonia','c3' => 'NCL'],
            ['id'=>'VU','pais'=>'Vanuatu','c3' => 'VUT'],
            ['id'=>'NZ','pais'=>'Nueva Zelanda','c3' => 'NZL'],
            ['id'=>'NI','pais'=>'Nicaragua','c3' => 'NIC'],
            ['id'=>'NE','pais'=>'Níger','c3' => 'NER'],
            ['id'=>'NG','pais'=>'Nigeria','c3' => 'NGA'],
            ['id'=>'NU','pais'=>'Niue','c3' => 'NIU'],
            ['id'=>'NF','pais'=>'Norfolk','c3' => 'NFK'],
            ['id'=>'NO','pais'=>'Noruega','c3' => 'NOR'],
            ['id'=>'MP','pais'=>'Islas Marianas del Norte','c3' => 'MNP'],
            ['id'=>'UM','pais'=>'Islas ultramarinas de Estados Unidos','c3' => 'UMI'],
            ['id'=>'FM','pais'=>'Micronesia','c3' => 'FSM'],
            ['id'=>'MH','pais'=>'Islas Marshall','c3' => 'MHL'],
            ['id'=>'PW','pais'=>'Palaos','c3' => 'PLW'],
            ['id'=>'PK','pais'=>'Pakistán','c3' => 'PAK'],
            ['id'=>'PA','pais'=>'Panamá','c3' => 'PAN'],
            ['id'=>'PG','pais'=>'Papúa Nueva Guinea','c3' => 'PNG'],
            ['id'=>'PY','pais'=>'Paraguay','c3' => 'PRY'],
            ['id'=>'PE','pais'=>'Perú','c3' => 'PER'],
            ['id'=>'PH','pais'=>'Filipinas','c3' => 'PHL'],
            ['id'=>'PN','pais'=>'Islas Pitcairn','c3' => 'PCN'],
            ['id'=>'PL','pais'=>'Polonia','c3' => 'POL'],
            ['id'=>'PT','pais'=>'Portugal','c3' => 'PRT'],
            ['id'=>'GW','pais'=>'Guinea-Bisáu','c3' => 'GNB'],
            ['id'=>'TL','pais'=>'Timor Oriental','c3' => 'TLS'],
            ['id'=>'PR','pais'=>'Puerto Rico','c3' => 'PRI'],
            ['id'=>'QA','pais'=>'Catar','c3' => 'QAT'],
            ['id'=>'RE','pais'=>'Reunión','c3' => 'REU'],
            ['id'=>'RO','pais'=>'Rumania','c3' => 'ROU'],
            ['id'=>'RU','pais'=>'Rusia','c3' => 'RUS'],
            ['id'=>'RW','pais'=>'Ruanda','c3' => 'RWA'],
            ['id'=>'BL','pais'=>'San Bartolomé','c3' => 'BLM'],
            ['id'=>'SH','pais'=>'Santa Elena, Ascensión y Tristán de Acuña','c3' => 'SHN'],
            ['id'=>'KN','pais'=>'San Cristóbal y Nieves','c3' => 'KNA'],
            ['id'=>'AI','pais'=>'Anguila','c3' => 'AIA'],
            ['id'=>'LC','pais'=>'Santa Lucía','c3' => 'LCA'],
            ['id'=>'MF','pais'=>'San Martín','c3' => 'MAF'],
            ['id'=>'PM','pais'=>'San Pedro y Miquelón','c3' => 'SPM'],
            ['id'=>'VC','pais'=>'San Vicente y las Granadinas','c3' => 'VCT'],
            ['id'=>'SM','pais'=>'San Marino','c3' => 'SMR'],
            ['id'=>'ST','pais'=>'Santo Tomé y Príncipe','c3' => 'STP'],
            ['id'=>'SA','pais'=>'Arabia Saudita','c3' => 'SAU'],
            ['id'=>'SN','pais'=>'Senegal','c3' => 'SEN'],
            ['id'=>'RS','pais'=>'Serbia','c3' => 'SRB'],
            ['id'=>'SC','pais'=>'Seychelles','c3' => 'SYC'],
            ['id'=>'SL','pais'=>'Sierra Leona','c3' => 'SLE'],
            ['id'=>'SG','pais'=>'Singapur','c3' => 'SGP'],
            ['id'=>'SK','pais'=>'Eslovaquia','c3' => 'SVK'],
            ['id'=>'VN','pais'=>'Vietnam','c3' => 'VNM'],
            ['id'=>'SI','pais'=>'Eslovenia','c3' => 'SVN'],
            ['id'=>'SO','pais'=>'Somalia','c3' => 'SOM'],
            ['id'=>'ZA','pais'=>'Sudáfrica','c3' => 'ZAF'],
            ['id'=>'ZW','pais'=>'Zimbabue','c3' => 'ZWE'],
            ['id'=>'ES','pais'=>'España','c3' => 'ESP'],
            ['id'=>'SS','pais'=>'Sudán del Sur','c3' => 'SSD'],
            ['id'=>'SD','pais'=>'Sudán','c3' => 'SDN'],
            ['id'=>'EH','pais'=>'República Árabe Saharaui Democrática','c3' => 'ESH'],
            ['id'=>'SR','pais'=>'Surinam','c3' => 'SUR'],
            ['id'=>'SJ','pais'=>'Svalbard y Jan Mayen','c3' => 'SJM'],
            ['id'=>'SZ','pais'=>'Suazilandia','c3' => 'SWZ'],
            ['id'=>'SE','pais'=>'Suecia','c3' => 'SWE'],
            ['id'=>'CH','pais'=>'Suiza','c3' => 'CHE'],
            ['id'=>'SY','pais'=>'Siria','c3' => 'SYR'],
            ['id'=>'TJ','pais'=>'Tayikistán','c3' => 'TJK'],
            ['id'=>'TH','pais'=>'Tailandia','c3' => 'THA'],
            ['id'=>'TG','pais'=>'Togo','c3' => 'TGO'],
            ['id'=>'TK','pais'=>'Tokelau','c3' => 'TKL'],
            ['id'=>'TO','pais'=>'Tonga','c3' => 'TON'],
            ['id'=>'TT','pais'=>'Trinidad y Tobago','c3' => 'TTO'],
            ['id'=>'AE','pais'=>'Emiratos Árabes Unidos','c3' => 'ARE'],
            ['id'=>'TN','pais'=>'Túnez','c3' => 'TUN'],
            ['id'=>'TR','pais'=>'Turquía','c3' => 'TUR'],
            ['id'=>'TM','pais'=>'Turkmenistán','c3' => 'TKM'],
            ['id'=>'TC','pais'=>'Islas Turcas y Caicos','c3' => 'TCA'],
            ['id'=>'TV','pais'=>'Tuvalu','c3' => 'TUV'],
            ['id'=>'UG','pais'=>'Uganda','c3' => 'UGA'],
            ['id'=>'UA','pais'=>'Ucrania','c3' => 'UKR'],
            ['id'=>'MK','pais'=>'Macedonia','c3' => 'MKD'],
            ['id'=>'EG','pais'=>'Egipto','c3' => 'EGY'],
            ['id'=>'GB','pais'=>'Reino Unido','c3' => 'GBR'],
            ['id'=>'GG','pais'=>'Guernsey','c3' => 'GGY'],
            ['id'=>'JE','pais'=>'Jersey','c3' => 'JEY'],
            ['id'=>'IM','pais'=>'Isla de Man','c3' => 'IMN'],
            ['id'=>'TZ','pais'=>'Tanzania','c3' => 'TZA'],
            ['id'=>'US','pais'=>'Estados Unidos','c3' => 'USA'],
            ['id'=>'VI','pais'=>'Islas Vírgenes de los Estados Unidos','c3' => 'VIR'],
            ['id'=>'BF','pais'=>'Burkina Faso','c3' => 'BFA'],
            ['id'=>'UY','pais'=>'Uruguay','c3' => 'URY'],
            ['id'=>'UZ','pais'=>'Uzbekistán','c3' => 'UZB'],
            ['id'=>'VE','pais'=>'Venezuela','c3' => 'VEN'],
            ['id'=>'WF','pais'=>'Wallis y Futuna','c3' => 'WLF'],
            ['id'=>'WS','pais'=>'Samoa','c3' => 'WSM'],
            ['id'=>'YE','pais'=>'Yemen','c3' => 'YEM'],
            ['id'=>'ZM','pais'=>'Zambia','c3' => 'ZMB']
        ]);            
    }
}
