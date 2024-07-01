<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminKaryawanController extends Controller
{
    public function listPage()
    {
        return view('pages.admin.karyawan.list');
    }

    public function pendingPage()
    {
        return view('pages.admin.karyawan.pendingList');
    }
}
