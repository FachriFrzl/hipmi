<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identity extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    public $timestamps = false;
    protected $table = 'identities';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'description','address','gmap','phone','email','fb','ig','tt','yt'
    ];

    // public function getLogo()
    // {
    //     if(!$this->logo){
    //     return asset('/storage/identities/default.png');
    //     }

    //     return asset('/storage/identities/'.$this->logo);
    // }

    // public function getFavicon()
    // {
    //     if(!$this->favicon){
    //     return asset('/storage/identities/default.png');
    //     }

    //     return asset('/storage/identities/'.$this->favicon);
    // }

} 
