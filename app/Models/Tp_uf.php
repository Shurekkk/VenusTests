<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Tp_uf extends Model
{
    use HasFactory;
    protected $table = 'tp_uf';

    /**
     * Get the pessoas associated with the Tp_uf
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pessoas(): HasOne
    {
        return $this->hasOne(Pessoa::class,'uf_idt')->withDefault();
    }

    /*
    public function pessoas(): HasOne
    {
        return $this->hasOne(Pessoa::class,'uf_natural')->withDefault();
    }
    */

}
