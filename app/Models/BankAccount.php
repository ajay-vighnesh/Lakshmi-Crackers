<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    use HasFactory;

    protected $fillable = [ 'bank_name' , 'branch', 'name','account_number','ifsc_code','upi_id','g_pay' ];

    
}
