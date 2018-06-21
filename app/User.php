<?php

namespace App;

use App\Support\Traits\HasPassword;
use BinaryCabin\LaravelReporting\Traits\Filterable;
use BinaryCabin\LaravelReporting\Traits\Sortable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    use HasPassword;
    use Sortable;
    use Filterable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'password_input',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $filterable = [
        'name',
        'email',
        'global',
    ];

    protected $filterableGlobal = [
        'name',
        'email',
    ];

    protected $sortFieldDefault = 'id';
    protected $sortOrderDefault = 'DESC';

    public static function boot() {
        parent::boot();
        static::creating(function(User $user){
            $user = static::setPasswordToPasswordInputIfOnModel($user);
            $user = static::setPasswordIfEmptyOnModel($user);
        });
        static::updating(function(User $user){
            $user = static::setPasswordToPasswordInputIfOnModel($user);
        });
    }

    public function getRoleAttribute(){
        return $this->getRoleNames()->first();
    }

}
