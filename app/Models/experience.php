<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class experience extends Model
{
    protected $fillable = [
        'id',
        'company_name',
        'position',
        'start_date',
        'end_date',
        'description',
    ];
    use HasFactory;
}
