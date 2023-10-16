<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Tp_orgao_exp extends Model
{
    use HasFactory;
    protected $table = 'tp_orgao_exp';

    /**
     * Get the pessoas associated with the Tp_orgao_exp
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pessoas(): HasOne
    {
        return $this->hasOne(Pessoa::class,'orgao_expedidor')->withDefault();
    }

}
