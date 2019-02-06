<?php

use Illuminate\Database\Seeder;
use App\Configuration;

class ConfigurationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Configuration::create([
            'campo' => 'REMITENTE',
            'valorOne' => 'ALIVER MEZA RODRIGUEZ',
            'valorTwo' => 'ALIVER.MEZA@UPC.PE'
        ]);

        Configuration::create([
            'campo' => 'BBC',
            'valorOne' => 'ZULEYMA.FLORES@UPC.PE'

        ]);

        Configuration::create([
            'campo' => 'BBC',
            'valorOne' => 'KATHERINE.FLORES@UPC.PE'

        ]);

        Configuration::create([
            'campo' => 'BBC',
            'valorOne' => 'JULIO.PALOMINO@UPC.PE'

        ]);


    }
}
