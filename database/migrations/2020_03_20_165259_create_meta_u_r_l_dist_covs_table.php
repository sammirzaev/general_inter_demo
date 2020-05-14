<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetaURLDistCovsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meta_u_r_l_dist_covs', function (Blueprint $table) {
            $table->id();
            $table->integer('is_publish')->default(0);
            $table->string('url')->nullable();
            $table->string('distribution')->nullable();
            $table->string('coverage')->nullable();
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
        Schema::dropIfExists('meta_u_r_l_dist_covs');
    }
}
