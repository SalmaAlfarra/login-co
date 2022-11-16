<?php

namespace App\Imports;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\ToModel;

class CustomersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Customer([
            //
            'file_number'                             => $row[0],
            'file_classification'                     => $row[1],
            'full_name'                               => $row[2],
            'identification_number'                   => $row[3],
            'government_service_portal_password'      => $row[4],
            'address'                                 => $row[5],
            'city_id'                                 => $row[6],
        ]);
    }
}