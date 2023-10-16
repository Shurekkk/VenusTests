<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Tp_cidade extends Model
{
    use HasFactory;

    protected $table = 'tp_cidade';

    /**
     * Get the pessoas associated with the Tp_cidade
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pessoas(): HasOne
    {
        return $this->hasOne(Pessoa::class,'naturalidade', 'id_cidade')->withDefault();
    }


}
