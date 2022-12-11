<?php

namespace App\Models;

use App\Models\PaymentMechanism;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomerPaymenteMechanisms extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'payment_mechanisms_id',
        'customer_id',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function paymentMechanism()
    {
        return $this->belongsTo(PaymentMechanism::class);
    }
}
