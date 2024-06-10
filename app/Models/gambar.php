<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gambar extends Model
{
    protected $fillable = [
        'id',
        'id_project',
        'image',
    ];
    public function project()
    {
        return $this->belongsTo(Project::class, 'id_project');
    }
    use HasFactory;
}
