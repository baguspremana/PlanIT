<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verified_req extends Model
{
    public static $dir_verifikasi = "uploads/verifikasi";

    protected $fillable = [
        'group_id',
        'request_at',
        'filename',
    ];
    
    public static function uploadVerification($file, $file_name){
        $destinationPath = public_path(self::$dir_verifikasi);
        $file->move($destinationPath, $file_name);
    }
}
