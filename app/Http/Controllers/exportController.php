<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exports\productExport;

use Maatwebsite\Excel\Facades\Excel;

class exportController extends Controller
{

    public function exportPD()
    {
        $data = new productExport;

        return Excel::download($data, 'product.xlsx');
    }
    
}
