<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tipo_dia extends Model
{
    use HasFactory;
    protected $table = 'tipo_dia';

    // PAI (envia para)

    // $table->foreign('id_dia_semana')->references('id')->on('tipo_dia');
    public function grupo(): HasMany
    {
        return $this->hasMany(Grupo::class, 'id_dia_semana');
    }






    

    // SQL DATA For this Table:
    // INSERT INTO tipo_dia (nome, sigla) VALUES ('segunda', 'Seg');
    // INSERT INTO tipo_dia (nome, sigla) VALUES ('terça', 'Ter');
    // INSERT INTO tipo_dia (nome, sigla) VALUES ('quarta', 'Qua');
    // INSERT INTO tipo_dia (nome, sigla) VALUES ('quinta', 'Qui');
    // INSERT INTO tipo_dia (nome, sigla) VALUES ('sexta', 'Sex');
    // INSERT INTO tipo_dia (nome, sigla) VALUES ('sábado', 'Sab');
    // INSERT INTO tipo_dia (nome, sigla) VALUES ('domingo', 'Dom');



}
