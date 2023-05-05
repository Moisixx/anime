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
        Schema::create('capitulos_animes', function (Blueprint $table) {
            $table->id();
            $table->text('titulo', '50');
            $table->unsignedBigInteger('episodio');
            $table->text('descripcion', '1000');
            $table->text('video', '100');
            $table->unsignedBigInteger('anime_id');
            $table->foreign('anime_id')->references('id')->on('animes')->onDelete('restrict');
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
        Schema::dropIfExists('capitulos_animes');
    }
};