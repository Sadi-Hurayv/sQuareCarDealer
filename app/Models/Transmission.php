<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transmission extends Model
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
}
