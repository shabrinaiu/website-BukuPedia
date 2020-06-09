<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Hash;

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
         * Seeding book category
         */
        DB::table('book_category')->insert([
            ['name' => 'Novel'],
            ['name' => 'Non-Fiction'],
            ['name' => 'Fiction'],
            ['name' => 'Comic'],
            ['name' => 'Biography'],
            ['name' => 'Kids'],
        ]);
        /**
         * Make Admin Account
         */
        User::create([
            'name' => 'Admin',
            'email' => 'admin@bukupedia.com',
            'password' => Hash::make('admin')
        ]);
    }
}
