<?php

namespace App\Models;

use App\Models\Address;
use App\Models\Customer;
use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
 
    protected $fillable = ['customer_id', 'email', 'net_total', 'discount_total', 'sub_total', 'address_id', 'status'];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function address(){
        return $this->belongsTo(Address::class);
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }
    public function bank_account(){
        return $this->belongsTo(BankAccount::class);
    }
    
}
