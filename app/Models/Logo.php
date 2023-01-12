<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'logo', 'favicon'
    ];

    public function getLogo()
    {
        if(!$this->logo){
        return asset('/storage/identities/default.png');
        }

        return asset('/storage/identities/'.$this->logo);
    }

    public function getFavicon()
    {
        if(!$this->favicon){
        return asset('/storage/identities/default.png');
        }

        return asset('/storage/identities/'.$this->favicon);
    }

}
