<?php

namespace App;

use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    use HasUUID;

    protected $fillable = [
        'uuid',
        'slug',
        'name',
        'image_path',
        'description_short',
        'description',
        'goal',
        'progress_percentage',
        'nano_goal',
        'nano_address',
    ];

    public function getKey(){
        if(!empty($this->slug)){
            return $this->slug;
        }
        return $this->uuid;
    }

    public function getPath(){
        return '/projects/'.$this->getKey();
    }

    public function getNanoCurrent(){
        return 0;
    }

    public function getNanoGoalPercent(){
        return intval($this->getNanoCurrent() / $this->nano_goal);
    }

    public static function findByKey($key){
        $project = static::findByUuid($key);
        if($project){
           return $project;
        }
        return static::where('slug',$key)->first();
    }

    public function replaceImage($image){
        $storeResult = $image->store('projects', 'public');
        $this->image_path = $storeResult;
        $this->save();
    }

    public function payments(){
        return $this->morphMany(\App\Payment::class,'paymentable');
    }

    public function successfulPayments(){
        return $this->payments()->where('success',true);
    }

    public function getPaymentsTotalNanoAttribute(){
        $amountRai = 0;
        foreach($this->successfulPayments as $successfulPayment){
            $amountRai+=$successfulPayment->amount_rai;
        }
        return \NanoUnits::convert('nano','ticker',$amountRai);
    }

}
