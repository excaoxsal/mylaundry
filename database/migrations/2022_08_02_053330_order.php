<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('consument_id')->unsigned();
            $table->foreign('consument_id')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('machine_id')->unsigned();
            $table->integer('berat');
            $table->text('status');
            $table->foreign('machine_id')->references('id')->on('washmachine')->onDelete('cascade');
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
        //
    }
}
