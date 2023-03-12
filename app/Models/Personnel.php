<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function engins()
    {
        return $this->belongsTo(Engin::class , 'engin_id', 'id');
    }
}
