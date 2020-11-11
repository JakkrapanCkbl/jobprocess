<?php

namespace App\Imports;

use App\condo_temp;
use Maatwebsite\Excel\Concerns\ToModel;

class CondosImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new condo_temp([
            'web-scraper-order' => $row[0],
            'web-scraper-start-url' => $row[1],
            'pagination' => $row[2],
            'pagination-href' => $row[3],
            'list_project_name' => $row[4],
        ]);
    }
}
