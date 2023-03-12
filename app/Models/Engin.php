<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Engin extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function arrets()
    {
        return $this->hasMany(Arret::class);
    }
    public function personnels()
    {
        return $this->hasMany(Personnel::class);
    }
}
