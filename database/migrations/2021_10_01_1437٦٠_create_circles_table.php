<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCirclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('circles', function (Blueprint $table) {
            $table->id();
             // $voter_num,$candids_num,$seats_num;
            $table->string('Cir_name');
            $table->string('voter_num')->nullable();
            $table->string('candids_num')->nullable();
            $table->string('seats_num')->nullable();
            $table->unsignedBigInteger('pre_id');
            $table->foreign('pre_id')->references('id')->on('prefectures');

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
        Schema::dropIfExists('circles');
    }
}
