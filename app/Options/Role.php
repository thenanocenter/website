<?php

namespace App\Options;

use KilroyWeb\Options\BaseOption;

class Role extends BaseOption {

	public function getArray(){
        return [
            'admin' => 'admin',
            'authenticated' => 'authenticated',
        ];
    }

}