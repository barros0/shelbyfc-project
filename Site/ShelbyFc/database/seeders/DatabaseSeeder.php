<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //php artisan db:seed
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            UsersTableDataSeeder::class,
            CategoriesTableDataSeeder::class,
            TeamsTableSeeder::class,
            SocioPriceTableSeeder::class,
            FaqsTableSeeder::class,
            CountriesTableSeeder::class,
            SubscricoesTableDataSeeder::class,

        ]);
    }
}
