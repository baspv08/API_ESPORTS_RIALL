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
        Schema::create('partidos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('lugar', 50)->nullable(false);
            $table->boolean('jugado')->default(false);            
            $table->unsignedBigInteger('campeonato_id')->nullable(false);

            $table->foreign('campeonato_id')->references('id')->on('campeonatos');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partidos');
    }
};
