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
        'title',
        'description_short',
        'description',
        'written_proposal_url',
        'goal',
        'nano_goal',
        'nano_address',
        'status',
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

    public static function findByKey($key){
        $project = static::findByUuid($key);
        if($project){
           return $project;
        }
        return static::where('uuid',$key)->first();
    }

    public function replaceImage($image){
        $storeResult = $image->store('projects', 'public');
        $this->image_path = $storeResult;
        $this->save();
    }

}
