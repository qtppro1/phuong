<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonhangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donhangs', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('maldh')->unsigned();
            $table->foreign('maldh')->references('id')->on('loaidhs');
            $table->integer('mauser')->unsigned();
            $table->foreign('mauser')->references('id')->on('users');
            $table->integer('makh')->unsigned();
            $table->foreign('makh')->references('id')->on('khachhangs');
            $table->integer('matuyen')->unsigned();
            $table->foreign('matuyen')->references('id')->on('tuyens');
            $table->date('ngaytao');
            $table->float('tongtien');
            $table->float('giamgia');
            $table->string('hinhthucthanhtoan',255);
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
        Schema::dropIfExists('donhangs');
    }
}
