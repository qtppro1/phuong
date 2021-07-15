<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanphamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanphams', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('malsp')->unsigned();
            $table->foreign('malsp')->references('id')->on('loaisps');
            $table->string('tensp',255);
            $table->integer('soluong');
            $table->longText('hinhanh');
            $table->float('giavon');
            $table->float('giaspbanra');
            $table->string('mieuta','255');
            $table->string('trangthai','255');
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
        Schema::dropIfExists('sanphams');
    }
}
