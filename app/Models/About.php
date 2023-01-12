<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Visi;
use App\Models\Misi;
use App\Models\Motto;

class About extends Model
{
    protected $table = 'about_us';
    protected $primarykey = 'id';
    protected $fillable =[
        'gambar_1','deskripsi','deskripsi_lanjutan','visi_id','misi_id','motto_id'
    ];
    public function visi()
    {
        return $this->belongsTo(Visi::class);
    }
    public function misi()
    {
        return $this->belongsTo(Misi::class);
    }
    public function motto()
    {
        return $this->belongsTo(Motto::class);
    }
}