<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
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

    /**
     * Relation->many to one (∞:1) with Brand to MOdel
     * Model belongs to the Brand and Model can have only one Brand
     */
    public function model()
    {
        return $this->hasMany(Model::class);
    }

}
