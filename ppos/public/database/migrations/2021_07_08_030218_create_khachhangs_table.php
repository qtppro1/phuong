<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhachhangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khachhangs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('maloai')->unsigned();
            $table->string('tenkh',100);
            $table->string('diachi',255);
            $table->string('sdt',13);
            $table->timestamps();

        });
        Schema::table('khachhangs', function (Blueprint $table) {
            $table->foreign('maloai')->references('id')->on('loaikhachhangs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khachhangs');
    }
}
