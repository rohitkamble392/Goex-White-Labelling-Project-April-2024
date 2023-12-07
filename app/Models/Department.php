<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PolicyFeature;
use App\Models\Application;


class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id','dname','demail','ddesc'
    ];

    public function policyFeatures()
    {
        return $this->belongsToMany(PolicyFeature::class, 'department_policy_feature')->withPivot('policy_feature_id');
    }
    public function applicationFeatures()
    {
        return $this->belongsToMany(Application::class, 'department_application_feature')->withPivot('checked');
    }
}
