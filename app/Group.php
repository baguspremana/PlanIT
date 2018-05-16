<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Group extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'group_name',
        'institution', 
        'username', 
        'password',
        'email',
        'competition_id',
        'verifyToken',
        'status',
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
     * Get the participants of the group.
     */

    public function object(){
        return $this->hasMany('App\Object');
    }

    public function participants(){
        return $this->hasMany('App\Participant');
    }

    public function competition(){
        return $this->belongsTo('App\Competition','competition_id');
    }

    public function adminMassage()
    {
        return $this->hasMany('App\AdminMassage');
    }

    public function adminMessageTemporary()
    {
        return $this->hasMany('App\AdminMessageTemporary');
    }

    public function userMassage()
    {
        return $this->hasMany('App\UserMassage');
    }

    public function userMessageTemporary()
    {
        return $this->hasMany('App\UserMessageTemporary');
    }

}
