<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    public static $dir_photo = "uploads/identitas";
    protected $fillable = [
        'group_id',
        'code',
        'full_name', 
        'birthdate', 
        'email',
        'contact',
        'photo',
        'vegetarian',
        'buy_shirt',
        'size',
        'captain'
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

    public static function uploadPhoto($file, $file_name){
        $destinationPath = public_path(self::$dir_photo);
        $file->move($destinationPath, $file_name);
    }
}
