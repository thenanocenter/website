<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use BinaryCabin\LaravelUUID\Traits\HasUUID;

class ProjectProposal extends Model
{
    use HasUUID;

    protected $fillable = [
        'uuid',
        'email',
        'links',
        'description_short',
        'description',
        'nano_goal',
        'nano_address'
    ];

    public function getDescriptionHtmlAttribute(){
        return \GrahamCampbell\Markdown\Facades\Markdown::convertToHtml($this->description);
    }

    public function getPath(){
        return '/proposals/'.$this->getKey();
    }

    public function getKey(){
        if(!empty($this->uuid)){
            return $this->uuid;
        }
        return null;
    }

    public function replaceImage($image){
        $storeResult = $image->store('projects', 'public');
        $this->image_path = $storeResult;
        $this->save();
    }

}
