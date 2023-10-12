<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Tipo_status_pessoa extends Model
{
    use HasFactory;
    protected $table = 'tipo_status_pessoa';

    /**
     * Get the atendentes associated with the Tipo_status_pessoa
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function atendentes(): HasOne
    {
        return $this->hasOne(Atendente::class,'status_atendente');
    }

}
