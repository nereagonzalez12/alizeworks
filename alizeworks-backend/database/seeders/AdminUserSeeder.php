<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new AdminUser();

        $user->username = 'adminNG';
        $user->name = 'Nerea González Selva';
        $user->email = 'ereadoce.ng@gmail.com';
        $user->password = bcrypt('admin');

        $user->save();
    }
}
