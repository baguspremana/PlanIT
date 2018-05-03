<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScoreList extends Model
{
    protected $fillable = [
        'jury_id',
        'object_id',
        'stage', 
    ];

    public function object(){
    	return $this->belongsTo('App\Object', 'object_id');
    }

    public function jury(){
    	return $this->belongsTo('App\Jury', 'jury_id');
    }

    public function detailScore(){
    	return $this->hasMany('App\DetailScoreList');
    }
}
