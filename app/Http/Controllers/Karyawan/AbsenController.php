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
            if ($request->hasFile('bukti')) {
                $imageData = $request->file('bukti');
                dd($imageData->getMimeType());
            } else {
                return redirect()->route('absen.create')->with('status', 'Gagal');
            }
            
            // $request->validate([
            //     'latitude' => 'required|string|max:20',
            //     'longitude' => 'required|string|max:20',
            //     'jarak' => 'required|string|max:20',
            //     'waktu' => 'required',
            //     'bukti' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Ubah sesuai dengan kebutuhan validasi untuk file gambar
            // ]);

            // $id_user = Auth::id();
            // $karyawan = Karyawan::where('id_user', $id_user)->firstOrFail();
            // $id_karyawan = $karyawan->id;

            // // Simpan file gambar ke folder public/assets/img/absen dengan nama yang diinginkan
            // $imageData = $request->file('bukti'); // Ambil file gambar dari request
            // $imageName = time() . '_' . str_replace(' ', '', $karyawan->nama) . '_' . $id_karyawan . '.' . $imageData->getClientOriginalExtension();
            // $imagePath = 'public/assets/img/absen/' . $imageName; // Path penyimpanan file

            // // Pindahkan file ke folder tujuan dengan nama yang diinginkan
            // $imageData->move(public_path('assets/img/absen'), $imageName);

            // // Gabungkan data request dengan ID karyawan dan path file gambar
            // $data = array_merge($request->all(), [
            //     'id_karyawan' => $id_karyawan,
            //     'bukti' => $imagePath, // Simpan path file gambar, jika perlu
            //     'status' => 'tertunda',
            // ]);

            // // Simpan data absen ke dalam database
            // Absen::create($data);

            // return redirect()->route('absen')->with('status', 'Absen berhasil disimpan.');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
