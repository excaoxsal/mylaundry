<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Washmachine extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('washmachine', function (Blueprint $table) {
            $table->id();
            $table->text('typemesin');
            $table->text('status');
            $table->bigInteger('harga');
            $table->bigInteger('consument_id')->unsigned();
            $table->foreign('consument_id')->references('id')->on('users')->onDelete('cascade');
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
