<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Address;
use App\Models\Order;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'mobile_number','whatsapp_number'];

    public function address(){
        return $this->hasMany(Address::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
