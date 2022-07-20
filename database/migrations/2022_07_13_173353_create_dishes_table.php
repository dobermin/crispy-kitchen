<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dishes', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('reviews', 10)->default('');
            $table->float('stars', 3);
            $table->boolean('main')->default(false);
            $table->string('price')->default('');
            $table->string('img', 255)->default('')->unique();
            $table->string('place', 255)->default('');
            $table->string('restaurant', 255)->default('');
            $table->string('meal', 255)->nullable();
            $table->string('oldPrice', 255)->nullable();
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
        Schema::dropIfExists('dishes');
    }
};
