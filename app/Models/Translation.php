<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    protected $fillable = ['key', 'translations'];

    // protected $casts = [
    //     'translations' => 'array',
    // ];
}
