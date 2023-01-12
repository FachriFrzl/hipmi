<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formdaftar extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'grade_need','jalur_masuk','name','id_number','birth_place','birth_date','phone','email','address','school_before','school_class_before','parent_name','parent_phone','parent_address','achievement','quran_memorized','image'
    ];

    /**
     * image
     *
     * @return Attribute
     */
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => asset('/storage/formdaftars/' . $value),
        );
    }

    /**
     * birth_date
     *
     * @return Attribute
     */
    protected function birt_date(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::parse($value)->format('d-M-Y'),
        );
    }

}
