<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialStatusList extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'name'
    ];

    public function materialstatus()
    {
        return $this->hasMany(MaterialStatus::class);
    }


}