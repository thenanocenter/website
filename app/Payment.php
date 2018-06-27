<?php

namespace App;

use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{

    use HasUUID;

    protected $fillable = [
        'uuid',
        'paymentable_id',
        'paymentable_type',
        'name',
        'email',
        'selected_amount',
        'selected_currency',
        'amount_rai',
        'brainblocks_token',
        'send_block',
        'sender',
        'success',
    ];

    public function paymentable(){
        return $this->morphTo('paymentable');
    }

    public function getBlockURL(){
        return 'https://www.nanode.co/block/'.$this->send_block;
    }

    public function getPath(){
        return $this->paymentable->getPath().'/payment/'.$this->uuid;
    }

    public function getBrainblocksCurrency(){
        if($this->selected_currency == 'nano'){
            return 'rai';
        }
        return $this->selected_currency;
    }

    public function getBrainblocksAmount(){
        if($this->selected_currency == 'nano'){
            return \NanoUnits::convert('ticker','nano',$this->selected_amount);
        }
        return $this->selected_amount;
    }

}
