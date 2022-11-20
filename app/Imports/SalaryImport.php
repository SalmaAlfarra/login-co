<?php

namespace App\Imports;

use App\Models\Salary;
use Maatwebsite\Excel\Concerns\ToModel;

class SalaryImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Salary([
            //
            'bank_account_number'   => $row[0],
            'salary'                => $row[1],
            'currency_id'           => $row[2],
            'bank_id'               => $row[3],
            'branch_id'             => $row[4],
            'customer_id'           => $row[5],
        ]);
    }
}