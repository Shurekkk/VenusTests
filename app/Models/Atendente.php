<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Atendente extends Model
{
        use HasFactory;
        use SoftDeletes;
    /*
        Foreing Fields:
        $table->foreign('id_pessoa')->references('id')->on('pessoas');
        $table->foreign('status_atendente')->references('id')->on('tipo_status_pessoa');
    */

    /**
     * Get the pessoas that owns the Atendente
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pessoas(): BelongsTo
    {
        return $this->belongsTo(Pessoa::class,'id','id_pessoa')->withDefault(
            [
            'nome_completo' => 'Pessoa não encontrada'
            ]
        );
    }

    /**
     * Get the tipo_status_pessoa that owns the Atendente
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipo_status_pessoa(): BelongsTo
    {
        return $this->belongsTo(Tipo_status_pessoa::class, 'id', 'status_atendente')->withDefault();
    }

}
