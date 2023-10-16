<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Grupo extends Model
{
    use HasFactory;
    /*
        Foreing Fields:
        $table->foreign('id_dia_semana')->references('id')->on('tipo_dia');
        $table->foreign('id_tipo_grupo')->references('id')->on('tipo_grupo');
        $table->foreign('id_sala')->references('id')->on('salas');
    */

    /**
     * Get the tipo_dia that owns the Grupo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipo_dia(): BelongsTo
    {
        return $this->belongsTo(Tipo_dia::class,'id','tipo_dia')->withDefault();
    }

    /**
     * Get the tipo_grupo that owns the Grupo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipo_grupo(): BelongsTo
    {
        return $this->belongsTo(Tipo_grupo::class,'id','tipo_grupo')->withDefault();
    }

    /**
     * Get the salas that owns the Grupo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function salas(): BelongsTo
    {
        return $this->belongsTo(Sala::class,'id','salas')->withDefault();
    }




}
