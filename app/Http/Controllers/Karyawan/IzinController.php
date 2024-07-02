<?php

namespace App\Http\Controllers\Karyawan;

use App\Models\Izin;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

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

    public function storeData(Request $request): RedirectResponse
    {
        // Validasi input
        $request->validate([
            'keterangan' => 'required',
            'alasan' => 'required',
            'mulai' => 'required|date',
            'selesai' => 'required|date|after_or_equal:mulai',
            'status' => 'required',
        ]);
        try {
            // Ambil ID karyawan dari user yang sedang login
            $id_user = Auth::user()->id;
            $karyawan = Karyawan::where('id_user', $id_user)->firstOrFail();
            $id_karyawan = $karyawan->id;

            // Gabungkan data request dengan ID karyawan
            // $data = array_merge($request->all(), ['id_karyawan' => $id_karyawan]);
            // dd($data);
            // Izin::create($data);

            // return redirect()->route('izin');
            return redirect()->intended(route('izin', absolute: false));
        } catch (\Exception $e) {
            return redirect()->back()
            ->with('error', 'Server error, gagal menambahkan data.')
            ->withInput();
        }

        
    }

}
