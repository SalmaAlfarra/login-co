<?php

namespace App\Imports;

use App\Models\CustomerPaymenteMechanisms;
use Maatwebsite\Excel\Concerns\ToModel;

class CustomerPaymenteMechanismsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new CustomerPaymenteMechanisms([
            //
            'payment_mechanisms_id'  => $row[0],
            'customer_id'            => $row[1],
        ]);
    }
}