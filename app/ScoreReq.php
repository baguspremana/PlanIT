<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScoreReq extends Model
{
	protected $fillable = [
        'file_id',
        'jury_id',
        'status', 
    ];

    public function object()
    {
    	return $this->belongsTo('App\Object','object_id');
    }

    public function jury()
    {
    	return $this->belongsTo('App\Jury','jury_id');
    }

    public function scoreList()
    {
    	return $this->hasMany('App\ScoreList');
    }
}
