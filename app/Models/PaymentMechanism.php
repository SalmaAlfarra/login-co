<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\CustomerPaymenteMechanisms;

class PaymentMechanism extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'type'
    ];

    public function bill()
    {
        return $this->belongsToMany(Bill::class);
    }

    public function customer()
    {
        return $this->belongsToMany(Customer::class);
    }
    public function customerpaymentemechanisms()
    {
        return $this->belongsToMany(CustomerPaymenteMechanisms::class);
    }

}
