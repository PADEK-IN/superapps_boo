<?php

namespace App\Http\Controllers\Karyawan;

use App\Models\Absen;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AbsenController extends Controller
{
    public function listPage()
    {
        $id_karyawan = Auth::user()->karyawan->id;
        $absens = Absen::where('id_karyawan', $id_karyawan)->get();

        return view('pages.karyawan.absen.list', compact('absens'));
    }

    public function createPage()
    {
        $id_user = Auth::id();
        $nama = Karyawan::where('id_user', $id_user)->firstOrFail()->nama;
        return view('pages.karyawan.absen.create', compact('nama'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                // 'bukti' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'latitude' => 'required|string|max:20',
                'longitude' => 'required|string|max:20',
                'jarak' => 'required|string|max:20',
                'waktu' => 'required',
            ]);

            $id_user = Auth::id();
            $karyawan = Karyawan::where('id_user', $id_user)->firstOrFail();
            $id_karyawan = $karyawan->id;

            // Gabungkan data request dengan ID karyawan
            $data = array_merge($request->all(), ['id_karyawan' => $id_karyawan]);

            // Absen::create($data);

            return redirect()->route('pages.karyawan.absen.list')->with('status', $data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }
}
