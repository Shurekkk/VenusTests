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
        Schema::table('atendentes', function (Blueprint $table) {
            //
            $table->foreign('id_pessoa')->references('id')->on('pessoas');
            $table->foreign('id_grupo')->references('id')->on('grupos');
            $table->foreign('status_atendente')->references('id')->on('tipo_status_pessoa');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('atendentes', function (Blueprint $table) {
            //
            $table->dropForeign(['id_pessoa']);
            $table->dropForeign(['id_grupo']);
            $table->dropForeign(['status_atendente']);
        });
    }
};
