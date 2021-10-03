<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votings', function (Blueprint $table) {
            $table->id();

            $table->integer('voteNum');
            $table->unsignedBigInteger('pre_id');
            $table->foreign('pre_id')->references('id')->on('prefectures');

            $table->unsignedBigInteger('RE_id');
            $table->foreign('RE_id')->references('id')->on('r_e_g_centers');

            $table->unsignedBigInteger('circle_id');
            $table->foreign('circle_id')->references('id')->on('circles');

            $table->unsignedBigInteger('polling_id');
            $table->foreign('polling_id')->references('id')->on('polling_centers');

            $table->unsignedBigInteger('candid_id');
            $table->foreign('candid_id')->references('id')->on('candidates');

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
        Schema::dropIfExists('votings');
    }
}
