<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class CarList extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand', 'model', 'engine','price_per_day','image','status'
    ];

    public function driver(){
        return $this->hasMany(Driver::class);
    }

    public function booking(){
        return $this->hasMany(Booking::class);
    }

}
