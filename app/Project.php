<?php

namespace App;

use App\Support\Traits\HasSlug;
use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    use HasUUID;
    use HasSlug;

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
        'status',
    ];

    public function getDescriptionHtmlAttribute(){
        return \GrahamCampbell\Markdown\Facades\Markdown::convertToHtml($this->description);
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

    public function getTopContributorNames(){
        $contributorNames = [];
        $payments = $this->successfulPayments()->whereNotNull('name')->orderBy('amount_rai','DESC')->limit(10)->get();
        foreach($payments as $payment){
            $contributorNames[] = $payment->name;
        }
        return $contributorNames;
    }

    public function getTopContributorsLine(){
        $contributorNames = $this->getTopContributorNames();
        return implode(', ',$contributorNames);
    }

}
