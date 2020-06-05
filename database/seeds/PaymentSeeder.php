<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
