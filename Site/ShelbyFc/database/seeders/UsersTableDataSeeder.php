<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Administrador';
        $user->email = 'admin@admin.com';
        $user->is_admin = 1;
        $user->status = 1;
        $user->email_verified_at = Carbon::now();
        $user->password = bcrypt('admin');
        $user->save();

    }
}
