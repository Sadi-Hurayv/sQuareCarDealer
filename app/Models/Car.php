<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as Eloquent;


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

    /**
     * Relation-> one to many (1:∞) with Car to Brand
     * Car can have only one Brand
     */
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    /**
     * Relation-> one to many (1:∞) with Car to Model
     * Car can have only one Brand
     */
    public function model()
    {
        return $this->belongsTo(Model::class);
    }
}
