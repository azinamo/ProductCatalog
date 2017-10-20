<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //
    public function import(Request $request)
    {
        return view('admin.products.import');
    }

    public function importSave(Request $request)
    {
        if ($request->hasFile('import_file')) {

        }
        return view('admin.products.import');
    }
}
