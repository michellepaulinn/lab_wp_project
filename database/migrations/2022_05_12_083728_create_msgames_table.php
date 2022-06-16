<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMsgamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msgames', function (Blueprint $table) {
            $table->id();
            $table->string('gameName');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('mscategories');
            $table->integer('price');
            $table->string('gameThumbnail');
            $table->longText('description');
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
        Schema::dropIfExists('msgames');
    }
}
