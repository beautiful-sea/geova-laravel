<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;


class Follower extends Authenticatable
{
    use Notifiable;

    public $with = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users_follow_users';

    protected $fillable = [
    	'users_id_follow'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       
    ];

    public function user()
    {
        return $this->belongsTo('App\User','users_id_followed');
    }
}
