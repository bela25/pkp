<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\AnggotaExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function index()
    {
        return Excel::download(new AnggotaExport, 'anggotas.xlsx');
    }
    //
}
