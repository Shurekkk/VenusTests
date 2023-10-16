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
        Schema::create('atendentes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pessoa')->nullable();
            $table->unsignedBigInteger('status_atendente')->nullable();
            $table->timestamps();
            $table->softDeletes();


            $table->foreign('id_pessoa')->references('id')->on('pessoas');
            $table->foreign('status_atendente')->references('id')->on('tipo_status_pessoa');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atendentes');
    }
};
