<?php

namespace App\Options;

use KilroyWeb\Options\BaseOption;

class PercentageInteger extends BaseOption {

	public function getArray(){
	    $items = [];
	    for($i=0;$i<=100;$i++){
	        $items[$i] = $i;
        }
        return $items;
    }

}