<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PolicyFeature extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','code'
    ];

    public function departments()
{
    return $this->belongsToMany(Department::class, 'department_policy_feature');
}
}
