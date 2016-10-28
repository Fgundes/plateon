<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'tipo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function isProf(){
        if($this->tipo == 1){
            return true;
        } else {
            return false;
        }
    }
    
    public function isAluno(){
       if($this->tipo == 0){
           return true;
       } else {
           return false;
       }
    }
}
