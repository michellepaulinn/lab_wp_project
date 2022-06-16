<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMsgameSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msgame_sliders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('game_id');  
            $table->foreign('game_id')->references('id')->on('msgames');
            $table->string('sliderImage');

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
        Schema::dropIfExists('msgame_sliders');
    }
}
