<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_careers', function (Blueprint $table) {
            $table->id();
            $table->integer('is_publish')->default(0);
            $table->string('job_name');
            $table->string('job_title');
            $table->text('job_desc');
            $table->integer('type_id')->index();
            $table->integer('location_id')->index()->unsigned();
            $table->integer('salary_id')->index()->unsigned();
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
        Schema::dropIfExists('job_careers');
    }
}
