<?php

namespace App\Exports;

use App\condo_temp;
use Maatwebsite\Excel\Concerns\FromCollection;

class CondosExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return condo_temp::all();
    }
}
