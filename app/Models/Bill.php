<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bill extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'quntity',
        'selling_price_per_unit',
        'total',
        'first_batch',
        'remaining_amount',
        'Payment_period',
        'monthly_installment',
        'monthly_discount_amount',
        'Payment_due_date'
    ];

    public function warranty()
    {
        return $this->belongsToMany(Warranty::class);
    }

    public function product()
    {
        return $this->belongsToMany(Product::class);
    }

    public function payment_mechanism()
    {
        return $this->belongsToMany(PaymentMechanism::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}