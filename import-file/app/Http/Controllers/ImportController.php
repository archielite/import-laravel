<?php

namespace App\Http\Controllers;

use App\Imports\ImportUser;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function index() {

        return view('import');
    }

    public function import(Request $request) {

        $file = Excel::import(new ImportUser, $request->file);
    }
}
