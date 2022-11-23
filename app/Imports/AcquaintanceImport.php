<?php

namespace App\Imports;

use App\Models\Acquaintance;
use Maatwebsite\Excel\Concerns\ToModel;

class AcquaintanceImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Acquaintance([
            //
            'name'                   => $row[0],
            'identification_number'  => $row[1],
            'relationship'           => $row[2],
            'address'                => $row[3],
            'phone'                  => $row[4],
            'city_id'                => $row[5],
            'customer_id'            => $row[6],
        ]);
    }
}