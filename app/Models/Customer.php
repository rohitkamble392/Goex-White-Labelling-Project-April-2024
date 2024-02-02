<?php

namespace App\Models;

class Customer
{
    protected $fillable = [
        'name','mobile','email','imei1','imei2','finance','device_amount','processing_fees','down_payment','emi_tenure','emi_amount','comment'
    ];
}
