<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminIzinController extends Controller
{
    public function listPage()
    {
        return view('pages.admin.izin.list');
    }

    public function requestPage()
    {
        return view('pages.admin.izin.requestList');
    }
}
