<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMsreviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msreviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('member_id');
            $table->foreign('member_id')->references('id')->on('msmembers');
            $table->unsignedBigInteger('game_id');
            $table->foreign('game_id')->references('id')->on('msgames');
            $table->boolean('recommended');
            $table->longText('isiReview');

            $table->softDeletes();
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
        Schema::dropIfExists('msreviews');
    }
}
