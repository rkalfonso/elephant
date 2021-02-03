<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'first_name',
        'middle_name',
        'last_name',
        'gender',
        'birthdate',
        'birthplace',
        'civil_status',
        'id_presented',
        'nationality',
        'phone_number',
        'cellphone_number',
        'occupation',
        'monthly_income',
        'email',
        'street_number',
        'street_name',
        'barangay',
        'municipality',
        'zip_code',
    ];

    public function dependent()
    {
        return $this->hasMany(Dependent::class);
    }

    public function auditrail()
    {
        return $this->hasMany(AuditTrail::class);
    }
}
