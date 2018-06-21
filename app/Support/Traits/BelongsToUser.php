<?php

namespace App\Support\Traits;

trait BelongsToUser{

    public function user(){
        return $this->belongsTo(\App\User::class,'user_id');
    }

}