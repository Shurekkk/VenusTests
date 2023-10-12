<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pessoa extends Model
{
    use HasFactory;

    /*
        Foreing Fields:
        $table->foreign('nacionalidade')->references('id')->on('tp_nacionalidade');
        $table->foreign('naturalidade')->references('id_cidade')->on('tp_cidade');
        $table->foreign('orgao_expedidor')->references('id')->on('tp_orgao_exp');
        $table->foreign('status')->references('id')->on('tipo_status_pessoa');
        $table->foreign('uf_idt')->references('id')->on('tp_uf');
        $table->foreign('uf_natural')->references('id')->on('tp_uf');"
    */

    /**
     * Get the atendentes associated with the Pessoa
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function atendentes(): HasOne
    {
        return $this->hasOne(Atendente::class,'id_pessoa');
    }








}
