<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $fillable = [
        'group_id',
        'full_name', 
        'birthdate', 
        'email',
        'contact',
        'vegetarian',
        'buy_shirt',
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
     * Get the group that owns the participant.
     */
    public function group(){
        return $this->belongsTo('App\Group');
    }
}
