<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('games')->truncate();
        Schema::enableForeignKeyConstraints();

        $games = [
            [
                'ticket_available' => '1',
                'ticket_price' => '25',
                'ticket_price_partner' => '15',
                'location' => 'Estadio de Leiria',
                'team_id' => '3',
                'limit_bet' => '2023-01-21 19:45:00',
                'limit_buy_ticket' => '2023-01-20 00:00:00',
                'datetime_game' => '2023-01-21 19:45:00',
                'stock_tickets' => '1500',
                'win' => '2.30',
                'draw' => '1.00',
                'lose' => '2.00',
            ],
            [
                'ticket_available' => '1',
                'ticket_price' => '25',
                'ticket_price_partner' => '15',
                'location' => 'Estadio da Luz',
                'team_id' => '4',
                'limit_bet' => '2023-01-21 19:45:00',
                'limit_buy_ticket' => '2023-01-20 00:00:00',
                'datetime_game' => '2023-01-21 19:45:00',
                'stock_tickets' => '1500',
                'win' => '2.30',
                'draw' => '1.00',
                'lose' => '2.00',
            ],
            [
                'ticket_available' => '1',
                'ticket_price' => '25',
                'ticket_price_partner' => '15',
                'location' => 'Estadio do Dragao',
                'team_id' => '7',
                'limit_bet' => '2023-01-21 19:45:00',
                'limit_buy_ticket' => '2023-01-20 00:00:00',
                'datetime_game' => '2023-01-21 19:45:00',
                'stock_tickets' => '1500',
                'win' => '2.80',
                'draw' => '1.00',
                'lose' => '4.00',
            ],
            [
                'ticket_available' => '1',
                'ticket_price' => '25',
                'ticket_price_partner' => '15',
                'location' => 'Estadio do Leixoes',
                'team_id' => '8',
                'limit_bet' => '2023-01-21 19:45:00',
                'limit_buy_ticket' => '2023-01-20 00:00:00',
                'datetime_game' => '2023-01-21 19:45:00',
                'stock_tickets' => '1500',
                'win' => '2.00',
                'draw' => '1.00',
                'lose' => '2.30',
            ],
        ];

        DB::table('games')->insert($games);
    }
}
