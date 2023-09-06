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
        // $request->validate([
        //     'file'=> 'required|file|mimes:ppt,pptx,doc,docx,pdf,xls,xlsx|max:204800'
        // ]);
        Excel::import(new ProductImport,request()->file('file'));
             
        return back()->with('success', 'User Imported Successfully.');
    }


}
