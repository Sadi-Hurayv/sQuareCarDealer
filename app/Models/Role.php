<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
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
     * Relation->many to one (∞:1) with Role to User
     * role belongs to the user and user can have only one role
     */
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
