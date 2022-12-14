<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Branch extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable =
    [
        'name',
        'phone',
        'address',
        'email'
    ];

  /*   public function customer()
    {
        return $this->hasMany(Customer::class);
    } */

    public function bank()
    {
        return $this->belongsTo(Bank::class,'id');
    }
    public function salary()
    {
        return $this->hasMany(Salary::class);
    }
}
