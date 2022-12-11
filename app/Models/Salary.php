<?php

namespace App\Models;

use App\Models\Bank;
use App\Models\Branch;
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
        return $this->belongsTo(Customer::class,);
    }
    public function bank()
    {
        return $this->belongsTo(Bank::class,);
    }
    public function branch()
    {
        return $this->belongsTo(Branch::class,);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class,);
    }
}
