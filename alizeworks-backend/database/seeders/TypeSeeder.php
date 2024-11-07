<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $type = new Type();
        $type->name = 'glass painting';
        $type->save();

        $type = new Type();
        $type->name = 'totebag';
        $type->save();

        $type = new Type();
        $type->name = 't-shirt';
        $type->save();

        $type = new Type();
        $type->name = 'glass';
        $type->save();
    }
}
