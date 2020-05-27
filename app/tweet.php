<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tweet extends Model
{
    use likable;
    protected $fillable = ["user_id", "body"];

    protected  static function boot()
    {

        parent::boot();
        static::creating(function ($tweet) {
            $tweet->user_id = auth()->id();
        });
    }
    public function user()
    {

        return $this->belongsTo(User::class);
    }

}
