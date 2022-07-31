<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    //protected $guarded = [];
    protected $fillable = [
        'name',
        'description',
        'status',
    ];
}
