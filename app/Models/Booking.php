<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Booking extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'customer_id',
        'car_list_id',
        'driver_id',
        'pick_up_date',
        'drop_off_date',
        'amount',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    

    public function car_list(){
        return $this->BelongsTo(Carlist::class);
    }

    public function driver(){
        return $this->BelongsTo(Driver::class);
    }

    // public function customer(){
    //     return $this->BelongsTo(Customer::class);
    // }


    public function customer() { 
        return $this->belongsTo(Customer::class, 'customer_id'); 
    }

    public function payment(){
        return $this->hasMany(Payment::class);
    }

}

