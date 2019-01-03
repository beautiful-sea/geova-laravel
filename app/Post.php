<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;


class Post extends Authenticatable
{
    use Notifiable;

    public $with = ['user','likes','comments'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'text',
    ];

    protected $dates = ['created_at'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment','posts_id');
    }
    public function likes()
    {
        return $this->hasMany('App\LikePost','posts_id');
    }
}
