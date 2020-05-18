<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_services', function (Blueprint $table) {
            $table->id();
            $table->integer('is_publish')->default(0);
            $table->integer('service_id')->index()->unsigned()->nullable();
            $table->string('title');
            $table->text('description');
            $table->string('read_more');
            $table->string('read_link');
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
        Schema::dropIfExists('home_services');
    }
}
