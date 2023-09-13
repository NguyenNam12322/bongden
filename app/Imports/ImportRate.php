<?php

namespace App\Imports;

use App\Models\rate;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportRate implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new rate([
            //
        ]);
    }
}
