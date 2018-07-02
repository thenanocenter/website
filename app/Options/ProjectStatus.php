<?php

namespace App\Options;

use KilroyWeb\Options\BaseOption;

class ProjectStatus extends BaseOption {

	public function getArray(){
        return [
            'unpublished'=>'Unpublished',
            'active'=>'Active',
            'funded' =>'Funded',
            'completed' =>'Completed',
        ];
    }

}