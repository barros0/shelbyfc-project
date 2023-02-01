<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class UsersTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('users')->truncate();
        Schema::enableForeignKeyConstraints();

        $users = [
            [   
                'id' => '1',
                'name' => 'Administrador',
                'email' => 'admin@admin.com',
                'phone' => '916620467',
                'postal_code' => 'Leiria',
                'address'=>'Leiria',
                'nif'=>'123456789',
                'birthdate'=>'2003/09/05',
                'balance'=>'0',
                'is_admin' => '1',
                'status' => '2',
                'email_verified_at' =>  Carbon::now(),
                'password' =>bcrypt('admin'),
                'image' => 'noimage.png',
            ],
            [
                'id' => '2',
                'name' => 'Micael Pereira',
                'email' => 'mica@gmail.com',
                'phone' => '916620467',
                'postal_code' => 'Leiria',
                'address'=>'Leiria',
                'nif'=>'123456789',
                'birthdate'=>'2003/09/05',
                'balance'=>'0',
                'is_admin' => '1',
                'status' => '2',
                'email_verified_at' =>  Carbon::now(),
                'password' =>bcrypt('1234'),
                'image' => '1.png',
            
            ],
            [
                'id' => '3',
                'name' => 'João Duarte',
                'email' => 'joao@gmail.com',
                'phone' => '916620467',
                'postal_code' => 'Leiria',
                'address'=>'Leiria',
                'nif'=>'123456789',
                'birthdate'=>'2003/09/05',
                'balance'=>'0',
                'is_admin' => '1',
                'status' => '2',
                'email_verified_at' =>  Carbon::now(),
                'password' =>bcrypt('1234'),
                'image' => '2.jpg',
            
            ],
            [
                'id' => '4',
                'name' => 'João Barros',
                'email' => 'barros@gmail.com',
                'phone' => '916620467',
                'postal_code' => 'Leiria',
                'address'=>'Leiria',
                'nif'=>'123456789',
                'birthdate'=>'2003/09/05',
                'balance'=>'0',
                'is_admin' => '1',
                'status' => '2',
                'email_verified_at' =>  Carbon::now(),
                'password' =>bcrypt('1234'),
                'image' => '3.jpg',
            
            ],
            [
                'id' => '5',
                'name' => 'André Sousa',
                'email' => 'andre@gmail.com',
                'phone' => '916620467',
                'postal_code' => 'Leiria',
                'address'=>'Leiria',
                'nif'=>'123456789',
                'birthdate'=>'2003/09/05',
                'balance'=>'0',
                'is_admin' => '1',
                'status' => '2',
                'email_verified_at' =>  Carbon::now(),
                'password' =>bcrypt('1234'),
                'image' => '4.jpeg',
            
            ],
            
        ];

        DB::table('users')->insert($users);
    }
}

