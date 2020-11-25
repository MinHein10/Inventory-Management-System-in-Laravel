<?php

namespace App\Http\Controllers;

use App\Exports\StockinExport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function export() 
    {
        return Excel::download(new StockinExport, 'stockin.xlsx');
    }
}
