<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;


class Comment extends Authenticatable
{
    use Notifiable;

    public $with = ['user','likes'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'text'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function post()
    {
        return $this->belongsTo('App\Post');
    }
    public function user()
    {
        return $this->belongsTo('App\User','users_id');
    }
    public function likes()
    {
        return $this->hasMany('App\LikeComment','comments_id');
    }
}
