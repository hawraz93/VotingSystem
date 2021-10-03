<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePollingCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('polling_centers', function (Blueprint $table) {
            $table->id();
            $table->string('Pol_name');
            $table->unsignedBigInteger('pre_id');
            $table->foreign('pre_id')->references('id')->on('prefectures');

            $table->unsignedBigInteger('circle_id');
            $table->foreign('circle_id')->references('id')->on('circles');

            $table->unsignedBigInteger('RE_id');
            $table->foreign('RE_id')->references('id')->on('r_e_g_centers');
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
        Schema::dropIfExists('polling_centers');
    }
}
