<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuperStokist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','shop','mobile','email','address','pin','district','state'
    ];
}
