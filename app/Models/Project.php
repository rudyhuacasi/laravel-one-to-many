<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'slug',
        // Agrega aquí otros campos que deban ser asignados masivamente
    ];
    public function Type()
    {
        return $this->belongsTo(Type::class);
    }
}
