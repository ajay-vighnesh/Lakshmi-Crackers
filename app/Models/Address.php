<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['address','city_town', 'district', 'city', 'state', 'pin_code'];


    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
