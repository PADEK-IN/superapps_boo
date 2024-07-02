<?php

namespace App\Http\Controllers\Karyawan;

use App\Models\Izin;
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

    public function store(Request $request)
    {
        $request->validate([
            'id_karyawan' => 'required',
            'keterangan' => 'required',
            'alasan' => 'required',
            'mulai' => 'required',
            'sampai' => 'required',
            'status' => 'required',
        ]);

        Izin::create($request->all());

        return redirect()->route('karyawan.izin.list');
    }
}
