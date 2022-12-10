<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'file_number',
        'file_status',
        'full_name',
        'identification_number',
        'government_service_portal_password',
        'address',
        'city_id',
        'police_office_id',
        'court_id',
    ];

    public function account_statment()
    {
        return $this->hasOne(Account_Statment::class);
    }

    public function archives()
    {
        return $this->hasOne(Archives::class);
    }

    public function installment()
    {
        return $this->hasOne(Installment::class);
    }

    public function order()
    {
        return $this->belongsToMany(Order::class);
    }

    public function legal_procedure()
    {
        return $this->belongsToMany(Legal_Procedur::class);
    }

    public function patron()
    {
        return $this->belongsToMany(Patron::class);
    }

    public function acquaintance()
    {
        return $this->belongsToMany(Acquaintance::class, 'acquaintances_customer');
    }

    public function issue()
    {
        return $this->hasMany(Issue::class);
    }

    public function credit_card()
    {
        return $this->hasMany(Credit_Card::class);
    }

    public function bill()
    {
        return $this->hasMany(Bill::class);
    }

    public function police_office()
    {
        return $this->belongsTo(Police_Office::class);
    }

    public function court()
    {
        return $this->belongsTo(Court::class);
    }

    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function phone()
    {
        return $this->hasMany(Phone::class);
    }

    public function work()
    {
        return $this->hasOne(Work::class);
    }

    public function material_status()
    {
        return $this->hasOne(Material_Status::class,'id');
    }

    public function salary()
    {
        return $this->hasOne(Salary::class);
    }

    public function customer_payment_mechanism()
    {
        return $this->hasOne(CustomerPaymentMechanisms::class);
    }
}
