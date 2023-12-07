<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','email','mobile','address','policy_type','per_price','total_policy','amount','paid_amount','remaining_amount'
    ];
}
