<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MaterialStatus extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'marital_status',
        'partner_name',
        'partner_identification_number',
        'phone',
        'partner_family_address',
        'customer_id',
    ];

    public function customer()
    {
        return $this->hasOne(Customer::class);
    }

    public function materialstatuslist()
    {
        return $this->hasOne(MaterialStatusList::class);
    }
}