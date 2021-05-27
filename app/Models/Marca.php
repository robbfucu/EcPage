<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Marca extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'logo',
        'url'
    ];

    public function getLogoUrlAttribute()
    {
        return Storage::url($this->logo);
    }
}
