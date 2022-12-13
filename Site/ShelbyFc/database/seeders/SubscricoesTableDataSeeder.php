<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class SubscricoesTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('subscriptions')->truncate();
        Schema::enableForeignKeyConstraints();

        $categories = [
            ['user_id' => 1,
                'state' => 2,
                'name' => 'Pedro Andrade',
                'email' => 'admin@admin.com',
                'phone' => '987456123',
                'postal_code' => '2425-555',
                'address' => 'Rua de Leiria 92',
                'city' => 'Leiria',
                'birthdate' => '2003-12-13',
                'cc' => 'cc1.pdf',
                'nif' => '256587489',
                'country_id' => 6,
                'value' => 30,
                'expires_at' => '2023-12-13 21:41:05.000000',
                'created_at' => '2022-12-13 21:41:05.000000'],
        ];

        DB::table('subscriptions')->insert($categories);
    }
}
