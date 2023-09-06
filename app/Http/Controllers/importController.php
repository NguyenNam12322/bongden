<?php

namespace App\Http\Controllers;

use App\Imports\ProductImport;

use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;

class importController extends Controller
{   
    public function index()
    {
        return view('tool.import');
    }
    public function store(Request $request)
    {
        $request->validate([
            'file'=> 'required|mimes:xlsx, csv, xls'
        ]);
        Excel::import(new ProductImport,request()->file('file'));
             
        return back()->with('success', 'User Imported Successfully.');
    }


}
