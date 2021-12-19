<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title_1_uz')->nullable();
            $table->string('title_1_ru')->nullable();
            $table->string('title_2_uz')->nullable();
            $table->string('title_2_ru')->nullable();
            $table->longText('text_uz')->nullable();
            $table->longText('text_ru')->nullable();
            $table->string('image_uz')->nullable();
            $table->string('image_ru')->nullable();
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
        Schema::dropIfExists('services');
    }
}
