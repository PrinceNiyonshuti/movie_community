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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('genre_id');
            $table->text('name')->unique();
            $table->text('description');
            $table->text('released_date');
            $table->text('director');
            $table->text('writer');
            $table->text('thumbnail');
            $table->text('video')->nullable();
            $table->text('alternative_video')->nullable();
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
        Schema::dropIfExists('movies');
    }
};
