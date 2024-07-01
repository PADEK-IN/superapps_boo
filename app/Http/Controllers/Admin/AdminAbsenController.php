<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminAbsenController extends Controller
{
    public function listPage()
    {
        return view('pages.admin.absen.list');
    }
}
