<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name'=>Str::random(10),
            'description'=>Str::random(50),
            'price'=>100,
            'quantity'=>10,
            'category_id'=> 1,
            'images'=> ''
        ]);
    }
}
