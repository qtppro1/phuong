<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChitietdhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietdhs', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('madh')->unsigned();
            $table->foreign('madh')->references('id')->on('donhangs');

            $table->integer('masp')->unsigned();
            $table->foreign('masp')->references('id')->on('sanphams');

            $table->integer('soluong');
            $table->float('dongia');
            $table->float('thanhtien');
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
        Schema::dropIfExists('chitietdhs');
    }
}
