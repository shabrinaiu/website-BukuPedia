<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_category')->insert([
            ['name' => 'Novel'],
            ['name' => 'Non-Fiction'],
            ['name' => 'Fiction'],
            ['name' => 'Comic'],
            ['name' => 'Biography'],
            ['name' => 'Kids'],
        ]);
    }
}