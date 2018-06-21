<?php

namespace App\Support\Traits;

trait HasPassword{

    public static function setPasswordToPasswordInputIfOnModel($model){
        if(!empty($model->password_input)){
            $model->password = bcrypt($model->password_input);
        }
        unset($model->password_input);
        return $model;
    }

    public static function setPasswordIfEmptyOnModel($model){
        if(empty($model->password)){
            $model->password = bcrypt(str_random('10'));
        }
        return $model;
    }

}