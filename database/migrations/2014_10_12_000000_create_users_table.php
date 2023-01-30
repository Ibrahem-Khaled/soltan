<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('username')->unique();
            $table->string('offece')->unique();
            $table->string('contry');
            $table->string('city');
            $table->integer('phone')->unique();
            $table->timestamp('phonevrifed')->nullable();
            $table->string('password');
            $table->string('information')->nullable();
            $table->boolean('usd');
            $table->boolean('euro');
            $table->boolean('lira');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
