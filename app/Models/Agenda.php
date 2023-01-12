<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'title', 'slug', 'start_date', 'end_date', 'start_time', 'end_time', 'content','location','yt_link','image','user_id'
    ];

    /**
     * image
     *
     * @return Attribute
     */
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => asset('/storage/agendas/' . $value),
        );
    }

    /**
     * start_date
     *
     * @return Attribute
     */
    protected function start_date(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::parse($value)->format('d-M-Y'),
        );
    }

    /**
     * end_date
     *
     * @return Attribute
     */
    protected function end_date(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::parse($value)->format('d-M-Y'),
        );
    }

    /**
     * start_time
     *
     * @return Attribute
     */
    protected function start_time(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::parse($value)->format('h:i:s'),
        );
    }

    /**
     * end_time
     *
     * @return Attribute
     */
    protected function end_time(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::parse($value)->format('h:i:s'),
        );
    }
}
