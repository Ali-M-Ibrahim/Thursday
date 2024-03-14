<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerInfo extends Model
{
    use HasFactory;

    public function getCustomer(){
        return $this->belongsTo(Customer::class,'customer_id','id');
    }
}
