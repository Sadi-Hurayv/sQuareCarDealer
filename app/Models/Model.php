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
        'brand_id',
        'status',
    ];

    /**
     * Relation-> one to one (1:∞) with Brand to Model
     * Model can have only one Brand
     */
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

}
