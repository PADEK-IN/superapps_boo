<?php

namespace App\Http\Controllers\Karyawan;

use App\Models\Absen;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AbsenController extends Controller
{
    public function listPage()
    {
        return view('pages.karyawan.absen.list');
    }

    public function createPage()
    {
        return view('pages.karyawan.absen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_karyawan' => 'required',
            'bukti' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'jarak' => 'required',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'status' => 'required',
        ]);

        $absen = Absen::create([
            'id_karyawan' => $request->id_karyawan,
            'bukti' => $request->bukti,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'jarak' => $request->jarak,
            'date' => $request->date,
            'time' => $request->time,
            'status' => $request->status
        ]);

        return redirect()->route('pages.karyawan.absen.list');
    }
}
