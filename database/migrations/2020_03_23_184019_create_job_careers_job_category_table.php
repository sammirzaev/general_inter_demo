<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobCareersJobCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_careers_job_category', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('job_category_id')->unsigned()->index();
            $table->foreign('job_category_id')->references('id')->on('job_categories')->onDelete('cascade');
            $table->bigInteger('job_careers_id')->unsigned()->index();
            $table->foreign('job_careers_id')->references('id')->on('job_careers')->onDelete('cascade');
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
        Schema::dropIfExists('job_careers_job_category');
    }
}
