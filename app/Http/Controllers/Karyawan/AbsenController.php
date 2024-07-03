<?php

namespace App\Http\Controllers\Karyawan;

use Carbon\Carbon;
use App\Models\Absen;
use App\Models\Karyawan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

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
                'latitude' => 'required|string|max:20',
                'longitude' => 'required|string|max:20',
                'jarak' => 'required|string|max:20',
                'waktu' => 'required',
            ]);

            // Mendekode data base64
            $imageData = $request->input('bukti'); // Mengambil input dari field 'bukti'

            // Validasi format data base64
            if (!preg_match('/^data:image\/(\w+);base64,/', $imageData, $type)) {
                return response()->json(['error' => 'Invalid image data'], 400);
            }

            $imageData = substr($imageData, strpos($imageData, ',') + 1);
            $imageType = strtolower($type[1]); // png, jpg, jpeg, gif

            // Memeriksa jenis gambar yang diizinkan (misalnya hanya png dan jpeg)
            if (!in_array($imageType, ['png', 'jpeg', 'jpg'])) {
                return response()->json(['error' => 'Invalid image type'], 400);
            }

            $imageBase64 = base64_decode($imageData);

            if ($imageBase64 === false) {
                return response()->json(['error' => 'Base64 decode failed'], 400);
            }

            // Mendapatkan nama pengguna
            $userName = Auth::user()->karyawan->nama;
            $userName = Str::slug($userName); // Mengubah nama menjadi slug untuk nama file yang valid

            // Membuat nama file unik dengan format tanggal-waktu-nama
            $dateTime = now()->format('Y-m-d_H-i-s');
            $imageName = "{$dateTime}_{$userName}.{$imageType}";

            // Menentukan path untuk menyimpan file
            $folderPath = public_path('assets/img/absen');
            if (!File::exists($folderPath)) {
                File::makeDirectory($folderPath, 0755, true, true);
            }
            $filePath = $folderPath . '/' . $imageName;

            // Menyimpan file ke folder tujuan
            File::put($filePath, $imageBase64);

            // Konversi waktu dari string ke timestamp
            $waktu = date('Y-m-d H:i:s', strtotime($request->input('waktu')));

            $id_karyawan = Auth::user()->karyawan->id;

            // Gabungkan data request dengan ID karyawan dan path file gambar
            $data = array_merge($request->all(), [
                'id_karyawan' => $id_karyawan,
                'bukti' => $imageName,
                'waktu' => $waktu,
            ]);

            // Simpan data absen ke dalam database
            Absen::create($data);

            return redirect()->route('absen')->with('status', 'Absen berhasil disimpan.');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
