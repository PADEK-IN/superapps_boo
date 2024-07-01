<?php

namespace App\Http\Controllers\Admin;

use App\Models\Izin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminIzinController extends Controller
{
    public function listPage()
    {
        $izins = Izin::orderBy('created_at', 'desc')->get();
        return view('pages.admin.izin.list', compact('izins'));
    }

    public function requestPage()
    {
        $izins = Izin::where('status', 'tertunda')->orderBy('created_at', 'desc')->get();
        return view('pages.admin.izin.requestList', compact('izins'));
    }
}
