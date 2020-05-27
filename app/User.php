<?php
namespace App;

use App\tweet;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable,Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', "username","avatar"
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }
    public function getAvatarAttribute($value)
    {
        return asset("storage/{$value}");
    }
    
    public function timeline()
    {
        $ids = $this->follows()->pluck("id");
        $ids->push($this->id);
        return tweet::whereIn("user_id", $ids)->withLikes()->latest()->paginate(10);
    }
    public function tweets()
    {
        return $this->hasMany(tweet::class)->withLikes()->latest();
    }
public function path($append=''){
    $path = route("profile", $this->username)   ;
    return $append ?"{$path}/{$append}":$path;
    }
    public function likes()
    {
        return $this->hasMany(like::class, "user_id");
    }
}
