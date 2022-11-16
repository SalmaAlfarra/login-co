<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plan extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'title',
        'stage',
        'description'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}