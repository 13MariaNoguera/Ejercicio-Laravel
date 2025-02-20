<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Socio;

class SociosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            $socio = new Socio();
            $socio->nombre = $faker->firstName('male'|'female');
            $socio->email = $faker->freeEmail();
            $socio->timestamps = now();
            $socio->save();
        }
        
    }
}
