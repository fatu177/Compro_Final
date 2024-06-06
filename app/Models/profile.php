<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $fillable = [
        'id',
        'name',
        'email',
        'birthday',
        'phone',
        'address',
        'github',
        'linkedin',
        'twitter',
        'facebook',
        'instagram',
        'description',
    ];
    use HasFactory;
}
