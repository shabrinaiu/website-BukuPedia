<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_list', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45);
            $table->string('address');
            $table->string('city', 50);
            $table->string('country', 50);
            $table->integer('zip');
            $table->string('phone');
            $table->text('notes')->nullable();
            $table->text('order');
            $table->integer('total');
            $table->string('payment');
            $table->foreignId('users_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_list');
    }
}
