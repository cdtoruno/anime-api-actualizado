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
    public function up(): void
    {
        Schema::create('animes', function (Blueprint $table) {
            $table->id();
            $table->string('titulo'); 
            $table->string('genero');
            $table->string('estudio');
            $table->enum('estado', ['En emisión', 'Completado', 'En pausa']);
            $table->string('personaje_principal');
            $table->enum('clasificacion', ['G', 'PG', 'PG-13', 'R', 'R+', 'NC-17']);
            $table->unsignedInteger('numero_episodios');
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
        Schema::dropIfExists('animes');
    }
};
