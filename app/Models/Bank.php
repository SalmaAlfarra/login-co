<?php

namespace App\Models;

use App\Models\Salary;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bank extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable =
    [
        'name'
    ];

    public function branch()
    {
        return $this->hasMany(Branch::class);
    }
    public function salary()
    {
        return $this->hasMany(Salary::class);
    }
}
