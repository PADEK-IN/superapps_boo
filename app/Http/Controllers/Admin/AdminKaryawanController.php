<?php

namespace App\Http\Controllers\Admin;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminKaryawanController extends Controller
{
    public function listPage()
    {
        $karyawans = Karyawan::orderBy('created_at', 'desc')->get();
        return view('pages.admin.karyawan.list', compact('karyawans'));
    }

    public function pendingPage()
    {
        $karyawans = Karyawan::with('user')
                                ->whereHas('user', function ($query) {
                                    $query->whereNull('email_verified_at');
                                })
                                ->orderBy('created_at', 'desc')
                                ->get();
        return view('pages.admin.karyawan.pendingList', compact('karyawans'));
    }
}
