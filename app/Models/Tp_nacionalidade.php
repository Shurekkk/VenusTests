<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Tp_nacionalidade extends Model
{
    use HasFactory;
    protected $table = 'tp_nacionalidade';

    // PAI (Envia para)
    public function pessoas(): HasOne
    {
        return $this->hasOne(Pessoa::class,'nacionalidade')->withDefault();
    }

}
