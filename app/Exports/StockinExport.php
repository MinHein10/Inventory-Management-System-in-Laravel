<?php

namespace App\Exports;

use App\Stockin;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class StockinExport implements FromView
{
    public function view(): View
    {
        return view('exports-excel', [
            'stockdata' => Stockin::all()
        ]);
    }
}
