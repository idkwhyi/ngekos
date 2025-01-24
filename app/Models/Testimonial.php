<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimonial extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'boarding_house_id',
        'photo',
        'content',
        'rating',
    ];

    function boardingHouse(){
        return $this->belongsTo(BoardingHouse::class);
    }
}
