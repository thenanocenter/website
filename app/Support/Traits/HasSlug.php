<?php

namespace App\Support\Traits;

trait HasSlug{

    public static function findByKey($key){
        $model = static::findByUuid($key);
        if($model){
            return $model;
        }
        return static::where('slug',$key)->first();
    }

    public function getKey(){
        if(!empty($this->slug)){
            return $this->slug;
        }
        return $this->uuid;
    }

}