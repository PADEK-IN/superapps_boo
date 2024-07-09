<?php

namespace App\Http\Controllers\Admin;

use App\Models\Izin;
use App\Models\Absen;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Routing\Controller;

class AdminIndexController extends Controller
{
    public function index()
    {
        // total karyawan aktif
        $karyawanAktif = Karyawan::where('status', 'aktif')->count();
        // total karyawan izin sakit
        $karyawanSakit = Karyawan::where('status', 'sakit')->count();
        // total karyawan izin cuti
        $karyawanCuti = Karyawan::where('status', 'cuti')->count();

        $count = [
            'karyawan_aktif' => $karyawanAktif,
            'karyawan_sakit' => $karyawanSakit,
            'karyawan_cuti' => $karyawanCuti
        ];

        return view('pages.admin.dashboard.index', compact('count'));
    }

    public function laporanPage(Request $request)
    {
       return view('pages.admin.laporan.index');
    }

    public function laporan(Request $request)
    {
        // Ambil tanggal awal dan tanggal akhir dari request
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        // Dapatkan semua karyawan
        $employees = Karyawan::all();

        // Buat array untuk menyimpan absensi per hari per karyawan
        $absens = [];

        // Iterate over each employee
        foreach ($employees as $employee) {
            $absens[$employee->id]['nama'] = $employee->nama;

            // Iterate over each day in the date range
            $currentDate = Carbon::parse($start_date);
            $end_date = Carbon::parse($end_date);
            while ($currentDate <= $end_date) {
                // Get the date for the current day
                $date = $currentDate->format('Y-m-d');

                // Find the attendance record for the current employee and date
                $absen = Absen::where('id_karyawan', $employee->id)
                    ->whereDate('waktu_masuk', $date)
                    ->first();

                // Store the check-in time or 'N/A' if not found
                $absens[$employee->id]['days'][$currentDate->format('Y-m-d')] = $absen ? Carbon::parse($absen->waktu_masuk)->format('H:i') : '-';

                // Move to the next day
                $currentDate->addDay();
            }
        }

        return view('pages.admin.laporan.index', compact('absens', 'start_date', 'end_date'));
    }

}
