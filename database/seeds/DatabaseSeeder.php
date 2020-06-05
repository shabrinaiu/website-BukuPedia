<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        /**
         * Generate fake author data
         */
        for ($i=1; $i<=50; $i++) { 
            DB::table('author')->insert([
                'name' => $faker->name
            ]);
        }
        /**
         * Generate fake publisher data
         */
        for ($i=1; $i<=50; $i++) { 
            DB::table('publisher')->insert([
                'name' => $faker->name
            ]);
        }
        /**
         * Seeding payment method
         */
        DB::table('payment')->insert([
            ['name' => 'Mandiri'],
            ['name' => 'BCA'],
            ['name' => 'BRI'],
            ['name' => 'BNI'],
            ['name' => 'Pos Indonesia'],
            ['name' => 'BTN'],
            ['name' => 'Indomaret'],
            ['name' => 'Alfamart'],
            ['name' => 'OVO'],
            ['name' => 'Cash On Delivery']
        ]);
    }
}
