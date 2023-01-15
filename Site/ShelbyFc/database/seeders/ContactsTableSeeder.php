<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('contacts')->truncate();
        Schema::enableForeignKeyConstraints();

        $contacts = [
            [
                'name' => 'Pedro Silva',
                'email' => 'pedrosilva@gmail.com ',
                'phone' => '914568752',
                'subject' => 'Erro ao iniciar Sessao',
                'message' => 'nao consigo entrar na minha conta'
            ],
           
        ];

        DB::table('contacts')->insert($contacts);
    }
}
