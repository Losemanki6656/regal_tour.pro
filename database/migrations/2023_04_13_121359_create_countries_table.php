<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable();
            $table->string('flag')->nullable();
            $table->string('name_uz')->nullable();
            $table->text('description_uz')->nullable();
            $table->string('name_ru')->nullable();
            $table->text('description_ru')->nullable();
            $table->string('name_en')->nullable();
            $table->text('description_en')->nullable();
            $table->integer('days')->nullable();
            $table->string('price')->nullable();
            $table->integer('rate')->nullable();
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
        Schema::dropIfExists('countries');
    }
}
