<?php

namespace App\Imports;

use App\Models\MaterialStatus;
use Maatwebsite\Excel\Concerns\ToModel;

class MaterialStatusImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new MaterialStatus([
            //
            'marital_status'                 => $row[0],
            'partner_name'                   => $row[1],
            'partner_identification_number'  => $row[2],
            'phone'                          => $row[3],
            'partner_family_address'         => $row[4],
            'customer_id'                    => $row[5],

        ]);
    }
}