<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Customer extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable;
    

    protected $guard = 'customer';
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];

    public function booking(){
        return $this->BelongsTo(Booking::class);
    }
}
