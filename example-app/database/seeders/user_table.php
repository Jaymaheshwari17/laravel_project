<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class user_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i <20 ; $i++) { 
            # code...
            \DB::table('testings')->insert([
                'titlr' => $faker->name,
                'name' => $faker->name,
                'price' => rand(0,999),
                'description'=>$faker->text,
                'created_at' => date('d/m/y'),
                'updated_at' => now()
            ]);		
        }
    }
}
