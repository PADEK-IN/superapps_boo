<?php

namespace App\Http\Controllers\Karyawan;

use App\Models\Absen;
use App\Models\Izin;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController
{
    public function profile()
    {
        $id = Auth::id();
        $data = Karyawan::where('id_user', $id)->first();
        $jumlahAbsen = Absen::where('id_karyawan', $data->id)->count();
        $jumlahIzin = Izin::where('id_karyawan', $data->id)->count();
        return view('pages.karyawan.profile.index', compact('data', 'jumlahAbsen', 'jumlahIzin'));
    }

    public function edit()
    {
        $id = Auth::id();
        $data = Karyawan::findOrFail($id);
        return view('pages.karyawan.profile.edit', compact('data'));
    }
}
