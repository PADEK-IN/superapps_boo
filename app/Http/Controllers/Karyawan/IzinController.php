<?php

namespace App\Http\Controllers\Karyawan;

use App\Models\Izin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

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
            'selesai' => 'required|date|after_or_equal:mulai',
            'status' => 'required',
        ]);

        $id_karyawan = Auth::user()->id;

        $data = array_merge($request->all(), ['id_karyawan' => $id_karyawan]);

        Izin::create($data);

        return redirect()->route('pages.karyawan.izin.list');
    }
}
