<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'name',
        'address',
        'phone',
        'email',
    ];

    public function product()
    {
        return $this->belongsToMany(Product::class);
    }

    public function delegate()
    {
        return $this->hasMany(Delegate::class);
    }

    public function phone()
    {
        return $this->hasMany(Phone::class);
    }
}