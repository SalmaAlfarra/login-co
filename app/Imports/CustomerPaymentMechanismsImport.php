<?php

namespace App\Imports;

use App\Models\CustomerPaymentMechanisms;
use Maatwebsite\Excel\Concerns\ToModel;

class CustomerPaymentMechanismsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new CustomerPaymentMechanisms([
            //
        ]);
    }
}
