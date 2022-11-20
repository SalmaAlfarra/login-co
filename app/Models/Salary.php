<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Salary extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'bank_account_number',
        'salary',
        'currency_id',
        'bank_id',
        'branch_id',
        'customer_id'
    ];

    public function customer()
    {
        return $this->hasOne(Customer::class);
    }

    public function currency()
    {
        return $this->hasOne(Currency::class);
    }
}