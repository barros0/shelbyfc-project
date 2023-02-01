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
                'result_home' => '3',
                'result_opponent' => '2',
                'result' => 'win',
                'created_at' => '2023-02-10 13:38:10',
                'updated_at' => '2023-02-12 12:18:10',
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
                'result_home' => '2',
                'result_opponent' => '2',
                'result' => 'draw',
                'created_at' => '2023-02-14 13:38:10',
                'updated_at' => '2023-02-15 12:18:10',
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
                'result_home' => '1',
                'result_opponent' => '0',
                'result' => 'win',
                'created_at' => '2023-02-16 13:38:10',
                'updated_at' => '2023-02-17 12:18:10',
            ],

            [
                'ticket_available' => '1',
                'ticket_price' => '25',
                'ticket_price_partner' => '15',
                'location' => 'Estadio de Albuquerque',
                'team_id' => '12',
                'limit_bet' => '2024-01-21 19:45:00',
                'limit_buy_ticket' => '2024-01-20 00:00:00',
                'datetime_game' => '2024-01-21 19:45:00',
                'stock_tickets' => '1500',
                'win' => '2.80',
                'draw' => '1.00',
                'lose' => '4.00',
                'result_home' => null,
                'result_opponent' => null,
                'result' => null,
                'created_at' => '2024-01-16 13:38:10',
                'updated_at' => '2024-01-17 12:18:10',
            ],
            [
                'ticket_available' => '1',
                'ticket_price' => '25',
                'ticket_price_partner' => '15',
                'location' => 'Estadio de Albuquerque',
                'team_id' => '10',
                'limit_bet' => '2024-01-23 19:45:00',
                'limit_buy_ticket' => '2024-01-23 00:00:00',
                'datetime_game' => '2024-01-23 19:45:00',
                'stock_tickets' => '1500',
                'win' => '2.80',
                'draw' => '1.00',
                'lose' => '4.00',
                'result_home' => null,
                'result_opponent' => null,
                'result' => null,
                'created_at' => '2024-01-18 13:38:10',
                'updated_at' => '2024-01-19 12:18:10',
            ],
            [
                'ticket_available' => '1',
                'ticket_price' => '25',
                'ticket_price_partner' => '15',
                'location' => 'Estadio de Cascais',
                'team_id' => '10',
                'limit_bet' => '2024-02-23 19:45:00',
                'limit_buy_ticket' => '2024-02-23 00:00:00',
                'datetime_game' => '2024-02-23 19:45:00',
                'stock_tickets' => '1500',
                'win' => '2.80',
                'draw' => '1.00',
                'lose' => '4.00',
                'result_home' => null,
                'result_opponent' => null,
                'result' => null,
                'created_at' => '2024-02-18 13:38:10',
                'updated_at' => '2024-02-19 12:18:10',
            ],
            [
                'ticket_available' => '1',
                'ticket_price' => '25',
                'ticket_price_partner' => '15',
                'location' => 'Estadio de Mafra',
                'team_id' => '7',
                'limit_bet' => '2024-02-27 19:45:00',
                'limit_buy_ticket' => '2024-02-27 00:00:00',
                'datetime_game' => '2024-02-27 19:45:00',
                'stock_tickets' => '1500',
                'win' => '2.80',
                'draw' => '1.00',
                'lose' => '4.00',
                'result_home' => null,
                'result_opponent' => null,
                'result' => null,
                'created_at' => '2024-02-26 13:38:10',
                'updated_at' => '2024-02-26 12:18:10',
            ],
           
        ];

        DB::table('games')->insert($games);
    }
}
