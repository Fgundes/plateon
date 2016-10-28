<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    public function resumos() {
        return $this->hasMany('App\Resumo');
    }
}
