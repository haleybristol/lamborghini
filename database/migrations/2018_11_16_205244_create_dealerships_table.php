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
            $table->string('store_name', 255);
            $table->string('contact_name', 255)->default('Marketing Manager');
            $table->string('email', 191);
            $table->string('language', 255)->default('English');
            $table->string('country', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('website', 255)->default('https://www.lamborghini.com/en-en/');
            $table->timestamps();
            $table->unique([DB::raw('store_name(191)')]);
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
