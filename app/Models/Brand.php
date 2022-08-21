<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Brand extends Model
{
    use HasFactory;
    public const FIELD_NAME='name';
    public const FIELD_DESCRIPTION='name';
    public const FIELD_STATUS='name';

    /**
     * The attributes that are mass assignable.
     */
    //protected $guarded = [];
    protected $fillable = [
        self::FIELD_NAME,
        self::FIELD_DESCRIPTION,
        self::FIELD_STATUS,
    ];

    /**
     * Relation->many to one (∞:1) with Model to Brand
     * Model belongs to the Brand and Model can have only one Brand
     */
    public function models()
    {
        return $this->hasMany(Model::class);
    }

    /**
     * Relation->many to one (∞:1) with Car to Brand
     * Car belongs to the Brand and Car can have only one Brand
     */
    public function cars()
    {
        return $this->hasMany(Car::class);
    }

}
