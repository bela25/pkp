<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengunjung;
use App\Models\Bisnis;
use App\Models\Kegiatan;
use Illuminate\Support\Facades\Hash;
use App\Classes\PHPInsight\Sentiment;


class PengunjungController extends Controller
{
    //
    public function index(Request $request)
    {
        $kegiatan =Kegiatan ::all();
        $bisnis =Bisnis ::all();

    }
    public function kegiatan(Request $request)
    {
        $kegiatans = Kegiatan ::paginate(10);
        return view('kegiatan', compact('kegiatans'));

    }
    public function bisnis(Request $request)
    {
        $bisniss =Bisnis ::paginate(10);
        return view('bisnis', compact('bisniss'));
    }

    
}
