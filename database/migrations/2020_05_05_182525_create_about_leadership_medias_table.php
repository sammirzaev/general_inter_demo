<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutLeadershipMediasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_leadership_medias', function (Blueprint $table) {
            $table->id();
            $table->integer('is_publish')->default(0);
            $table->integer('story_id')->index()->unsigned()->nullable();
            $table->string('title')->nullable();
            $table->string('media')->nullable();
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
        Schema::dropIfExists('about_leadership_medias');
    }
}
