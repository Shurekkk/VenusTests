<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

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

    //PAI! (Paga/Envia)
    public function atendentes(): HasOne
    {
        return $this->hasOne(Atendente::class,'id_pessoa')->withDefault();
    }

    // Filho de...(recebe)
    public function tp_nacionalidade(): BelongsTo
    {
        return $this->belongsTo(Tp_nacionalidade::class,'id', 'nacionalidade')->withDefault();
    }

    public function tp_cidade(): BelongsTo
    {
        return $this->belongsTo(Tp_cidade::class,'id', 'naturalidade')->withDefault();
    }


    public function tp_orgao_exp(): BelongsTo
    {
        return $this->belongsTo(Tp_orgao_exp::class, 'id', 'orgao_expedidor')->withDefault();
    }

    public function tipo_status_pessoa(): BelongsTo
    {
        return $this->belongsTo(Tipo_status_pessoa::class,'id','status')->withDefault();
    }

    public function tp_uf(): BelongsTo
    {
        return $this->belongsTo(Tp_uf::class,'id','uf_idt')->withDefault();
    }

    /*
    public function tp_uf(): BelongsTo
    {
        return $this->belongsTo(Tp_uf::class, 'id', 'uf_natural')->withDefault();
    }
    */










}
