<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Featurephone extends Model
{
    protected $fillable = [
        'phone_name', 'code', 'quantity', 'phone_details', 'image_one', 'image_two', 'image_three'
    ];
}
