<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function getCustomers(){
        return $this->belongsToMany(Customer::class,
            'account_services',
            'service_id',
            'customer_id');
    }

}
