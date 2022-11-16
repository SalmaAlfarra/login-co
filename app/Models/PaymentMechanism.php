<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
}