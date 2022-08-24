<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Smartphone extends Model
{
    protected $fillable = [
        'phone_name', 'code', 'quantity', 'android_version', 'processor', 'display', 'storage', 'camera', 'battery', 'phone_image', 'old_image'
    ];
}
