<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\categories;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $electronics = categories::create([
            'name'=>'Electronics'
        ]);
        $electronics->products()->createMany(
            [
                'name'=>'Smartphone'
            ],
            [
                'name'=>'blender'
            ]
        );
    }
}
