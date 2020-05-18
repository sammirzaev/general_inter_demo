<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_details', function (Blueprint $table) {
            $table->id();
            $table->integer('is_publish')->default(0);
            $table->text('phone_icon')->nullable();
            $table->text('address_icon')->nullable();
            $table->text('email_icon')->nullable();
            $table->text('phone_title')->nullable();
            $table->text('address_title')->nullable();
            $table->text('email_title')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
