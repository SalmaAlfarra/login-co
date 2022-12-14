<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Issue extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'issue_number',
        'title',
        'description',
        'issue_amount',
        'issue_cost'
    ];

    public function issue_statment()
    {
        return $this->hasOne(Issue_Statment::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}