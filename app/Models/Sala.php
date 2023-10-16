<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Sala extends Model
{
    use HasFactory;

    /**
     * Get the grupos associated with the Sala
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function grupos(): HasOne
    {
        return $this->hasOne(Grupo::class, 'id_sala')->withDefault();
    }
}
