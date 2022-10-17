<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_comics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('comic_id')->index()->nullable();
            $table->string('image');
            $table->string('title');
            $table->integer('episode');
            $table->enum('status', ['free', 'premium'])->default('free');
            $table->unsignedBigInteger('created_by')->index()->nullable();
            $table->timestamps();

            $table->foreign('comic_id')->references('id')->on('comics')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_comics');
    }
}
