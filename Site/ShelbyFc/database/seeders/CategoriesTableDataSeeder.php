<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CategoriesTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('categories')->truncate();
        Schema::enableForeignKeyConstraints();

        $categories = [
            ['name' => 'Segunda liga'],
            ['name' => 'Bilhetes'],
            ['name' => 'Relatório de Jogo'],
            ['name' => 'Pré-visualização de Jogo'],
        ];

        DB::table('categories')->insert($categories);
    }
}
