<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patron extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'full_name',
        'ststus',
        'file_number',
        'customer_id',
        'identification_number',
        'government_service_portal_password',
        'salary',
        'bank_account_number',
        'job_type',
        'job_title',
        'address',
        'phone',
        'city_id',
        'customer_id'
    ];

    public function customer()
    {
        return $this->belongsToMany(Customer::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function phone()
    {
        return $this->hasMany(Phone::class);
    }
}