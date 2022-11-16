<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CardStatment extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'date',
        'explanation_and_statement',
        'collected_amount',
        'remaining_amount',
        'agreed_nstallment'
    ];

    public function credit_card()
    {
        return $this->belongsTo(Credit_Card::class);
    }
}