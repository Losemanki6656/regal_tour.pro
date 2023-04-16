<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('country_id')->unsigned()->nullable();
            $table->string('photo')->nullable();
            $table->string('name_uz')->nullable();
            $table->text('description_uz')->nullable();
            $table->string('name_ru')->nullable();
            $table->text('description_ru')->nullable();
            $table->string('name_en')->nullable();
            $table->text('description_en')->nullable();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('destinations');
    }
}
