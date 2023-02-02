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
            ['name' => 'Júnior', 'max_age' => '0','min_age' => '13', 'preco' => '5'],
            ['name' => 'Regular', 'max_age' => '14','min_age' => '60', 'preco' => '20'],
            ['name' => 'Sénior', 'max_age' => '61','min_age' => '75', 'preco' => '15'],
        ];

        DB::table('socio_price')->insert($socio_price);
    }
}
