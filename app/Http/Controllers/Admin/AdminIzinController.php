<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminIzinController extends Controller
{
    public function listPage()
    {
        return view('pages.admin.izin.list');
    }
}
