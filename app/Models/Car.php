<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Car extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    //protected $guarded = [];
    protected $fillable = [
        'category',
        'brand_id',
        'model_id',
        'model_year',
        'engine_capacity',
        'horse_power',
        'torque',
        'odometer',
        'price',
        'status',
        'creator_user_id',
        'last_updater_user_id',
    ];
}
