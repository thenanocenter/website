<?php

namespace App;

use App\Support\Traits\HasSlug;
use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    use HasUUID;
    use HasSlug;

    protected $fillable = [
        'uuid',
        'slug',
        'title',
        'author',
        'external_url',
        'body',
    ];

    public function getPath(){
        return '/articles/'.$this->getKey();
    }

}
