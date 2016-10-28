<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resumo extends Model
{
    public function disciplina(){
        return $this->belongsTo('App\Disciplina');
    }
}
