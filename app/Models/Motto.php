<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\About;

class Motto extends Model
{
    protected $table = 'motto';
    protected $fillable = [
        'motto'
    ];
    public function About()
    {
        return $this->belongsTo(About::class);
    }
}
