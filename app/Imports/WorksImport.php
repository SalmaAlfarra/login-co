<?php

namespace App\Imports;

use App\Models\Work;
use Maatwebsite\Excel\Concerns\ToModel;

class WorksImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Work([
            //
            'job_title'    => $row[0],
            'job_type'     => $row[1],
            'employer'     => $row[2],
            'job_status'   => $row[3],
            'customer_id'  => $row[4],
        ]);
    }
}