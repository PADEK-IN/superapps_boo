<?php

namespace App\Http\Controllers\Karyawan;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class IzinController extends Controller
{
    public function listPage()
    {
        return view('pages.karyawan.izin.list');
    }

    public function createPage()
    {
        return view('pages.karyawan.izin.create');
    }
}
