<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nav_menus', function (Blueprint $table) {
            $table->id();
            $table->integer('is_publish')->default(0);
            $table->string('home');
            $table->string('about');
            $table->string('what_we_do');
            $table->string('fire');
            $table->string('security');
            $table->string('water');
            $table->string('facility');
            $table->string('projects');
            $table->string('insights');
            $table->string('news');
            $table->string('case');
            $table->string('contact');
            $table->string('search');
            $table->string('lang');
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
        Schema::dropIfExists('nav_menus');
    }
}
