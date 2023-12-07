<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Employee extends Model
{
    use HasFactory;

    use HasRoles;

    protected $fillable = [
        'company_id','department_id','name','email','mobile','department','device','imei1','imei2'
    ];
}
