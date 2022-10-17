<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListImageComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_image_comics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('detail_comic_id')->index()->nullable();
            $table->string('image');
            $table->integer('page_number')->default(1);
            $table->unsignedBigInteger('created_by')->index()->nullable();
            $table->timestamps();

            $table->foreign('detail_comic_id')->references('id')->on('detail_comics')->onDelete('cascade');
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
        Schema::dropIfExists('list_image_comics');
    }
}
