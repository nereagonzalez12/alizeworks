<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();

        $user->username = 'adminNG';
        $user->name = 'Nerea González Selva';
        $user->email = 'ereadoce.ng@gmail.com';
        $user->password = bcrypt('admin');

        $user->save();
    }
}
