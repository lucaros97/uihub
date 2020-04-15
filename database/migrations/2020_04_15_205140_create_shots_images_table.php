<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShotsImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shots_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shot_id');
            $table->string('name')->nullable();
            $table->text('url');
            $table->text('placeholder')->nullable();
            $table->timestamps();

            $table->foreign('shot_id')
                ->references('id')
                ->on('shots')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shots_images');
    }
}
