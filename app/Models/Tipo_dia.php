<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Tipo_dia extends Model
{
    use HasFactory;
    protected $table = 'tipo_dia';

    /**
     * Get the grupos associated with the Tipo_dia
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function grupos(): HasOne
    {
        return $this->hasOne(Grupo::class, 'tipo_dia')->withDefault();
    }




}
