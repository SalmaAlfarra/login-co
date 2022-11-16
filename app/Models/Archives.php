<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Archives extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'name'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function folder()
    {
        return $this->belongsToMany(Folder::class);
    }
}