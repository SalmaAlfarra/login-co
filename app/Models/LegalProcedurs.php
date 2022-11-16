<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LegalProcedurs extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'type',
        'description'
    ];

    public function customer()
    {
        return $this->belongsToMany(Customer::class);
    }
}