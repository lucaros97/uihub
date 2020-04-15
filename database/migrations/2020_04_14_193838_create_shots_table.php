<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shots', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('shots_type_id');
            $table->unsignedBigInteger('framework_id');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->text('code')->nullable();
            $table->timestamps();

            $table->foreign('shots_type_id')
                ->references('id')
                ->on('shots_type')
                ->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('framework_id')
                ->references('id')
                ->on('frameworks')
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
        Schema::dropIfExists('shot');
    }
}
