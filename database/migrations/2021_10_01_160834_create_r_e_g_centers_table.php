<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateREGCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('r_e_g_centers', function (Blueprint $table) {
            $table->id();
            $table->string('Reg_name');
            $table->unsignedBigInteger('pre_id');
            $table->foreign('pre_id')->references('id')->on('prefectures');

            $table->unsignedBigInteger('circle_id');
            $table->foreign('circle_id')->references('id')->on('circles');
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
        Schema::dropIfExists('r_e_g_centers');
    }
}
