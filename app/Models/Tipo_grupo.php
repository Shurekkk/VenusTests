<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Tipo_grupo extends Model
{
    use HasFactory;
    protected $table = 'tipo_grupo';


    /**
     * Get the grupos associated with the Tipo_grupo
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function grupos(): HasOne
    {
        return $this->hasOne(Grupo::class,'id_tipo_grupo');
    }


}
