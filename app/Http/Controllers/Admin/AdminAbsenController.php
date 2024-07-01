<?php

namespace App\Http\Controllers\Admin;

use App\Models\Absen;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminAbsenController extends Controller
{
    public function listPage()
    {
        $absens = Absen::all()->orderBy('created_at', 'desc')->get();
        return view('pages.admin.absen.list', compact('absens'));
    }

    public function requestPage()
    {
        $absens = Absen::where('status', 'tertunda')->orderBy('created_at', 'desc')->get();
        return view('pages.admin.absen.requestList', compact('absens'));
    }
}
