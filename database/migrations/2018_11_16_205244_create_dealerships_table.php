<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dealerships', function (Blueprint $table) {
            $table->increments('id');
            $table->string('store_name', 500)->unique();
            $table->string('contact_name', 500)->default('Marketing Manager');
            $table->string('email', 500);
            $table->string('language', 500)->default('English');
            $table->string('phone', 40)->nullable();
            $table->string('address', 500)->nullable();
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
        Schema::dropIfExists('dealerships');
    }
}
