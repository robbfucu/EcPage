<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Aplicacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'logo',
        'pdf'
    ];

    public function getLogoUrlAttribute()
    {
        return Storage::url($this->logo);
    }
    
    public function getPdfUrlAttribute()
    {
        return Storage::url($this->pdf);
    }
}
