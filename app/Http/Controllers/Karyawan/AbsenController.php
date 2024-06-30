<?php

namespace App\Http\Controllers\Karyawan;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AbsenController extends Controller
{
    public function listPage()
    {
        return view('pages.karyawan.absen.list');
    }

    public function createPage()
    {
        return view('pages.karyawan.absen.create');
    }
}
