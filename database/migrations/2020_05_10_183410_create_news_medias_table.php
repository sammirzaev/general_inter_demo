<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsMediasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_medias', function (Blueprint $table) {
            $table->id();
            $table->integer('is_publish')->default(0);
            $table->integer('cat_id')->index()->unsigned()->nullable();
            $table->integer('post_id')->index()->unsigned()->nullable();
            $table->string('media')->nullable();
            $table->string('title')->nullable();
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
        Schema::dropIfExists('news_medias');
    }
}
