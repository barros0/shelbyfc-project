<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class SocioPriceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('socio_price')->truncate();
        Schema::enableForeignKeyConstraints();

        $socio_price = [
            ['name' => 'Júnior', 'idade' => '>13', 'preco' => '5'],
            ['name' => 'Regular', 'idade' => '15+', 'preco' => '20'],
            ['name' => 'Sénior', 'idade' => '60+', 'preco' => '15'],
        ];

        DB::table('socio_price')->insert($socio_price);
    }
}
