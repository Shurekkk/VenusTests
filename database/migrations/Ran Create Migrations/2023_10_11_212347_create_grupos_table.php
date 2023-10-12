<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->unsignedBigInteger('id_dia_semana');
            $table->time('hr_inicio');
            $table->time('hr_fim');
            $table->boolean('ativo')->default(true);
            $table->unsignedBigInteger('nr_vagas')->default(0);
            $table->unsignedBigInteger('id_tipo_grupo');
            $table->unsignedBigInteger('nr_trabalhadores')->nullable();
            $table->unsignedBigInteger('id_sala')->nullable();
            $table->timestamps();

            $table->foreign('id_dia_semana')->references('id')->on('tipo_dia');
            $table->foreign('id_tipo_grupo')->references('id')->on('tipo_grupo');
            $table->foreign('id_sala')->references('id')->on('salas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupos');
    }
};
