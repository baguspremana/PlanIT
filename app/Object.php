<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Object extends Model
{
    protected $fillable = [
        'group_id',
        'title',
        'link',
        'etc',
        'status', 
    ];

    public function group(){
        return $this->belongsTo('App\Group','group_id');
    }

    public function scoreList(){
    	return $this->hasMany('App\ScoreList');
    }

}
