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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('name');
            $table->bigInteger('price');
            $table->enum('transmission', ['manual', 'automatic']);
            $table->enum('fuel', ['bensin', 'diesel', 'listrik'])->nullable();
            $table->string('color')->nullable();
            $table->unsignedInteger('capacity');
            $table->boolean('driver')->default(false);
            $table->boolean('bbm')->default(false);
            $table->boolean('is_active')->default(true);
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
        Schema::dropIfExists('cars');
    }
};
