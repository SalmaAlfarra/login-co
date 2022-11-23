<?php

namespace App\Imports;

use App\Models\Patron;
use Maatwebsite\Excel\Concerns\ToModel;

class PatronsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Patron([
            //
            'full_name'    => $row[0],
            'file_number'  => $row[1],
            'customer_id'  => $row[2],
        ]);
    }
}
