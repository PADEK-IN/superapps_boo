<?php

namespace App\Http\Controllers\Admin;

use App\Models\Izin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Vinkla\Hashids\Facades\Hashids;

class AdminIzinController extends Controller
{
    public function listPage()
    {
        $izins = Izin::orderBy('created_at', 'desc')->get();
        return view('pages.admin.izin.list', compact('izins'));
    }

    public function requestPage()
    {
        $izins = Izin::where('status', 'tertunda')->orderBy('created_at', 'desc')->get();
        return view('pages.admin.izin.requestList', compact('izins'));
    }

    public function detail($id)
    {
        $izin = Izin::findOrFail($id);
        return view('pages.admin.izin.detail', compact('izin'));
    }

    public function validate(Request $request)
    {
        // Validasi input
        $request->validate([
            'ids' => 'required|array',
        ]);

        try {
            $hashedIds = $request->input('ids');

            $ids = array_map(function($hashedId) {
                return Hashids::decode($hashedId)[0] ?? null;
            }, $hashedIds);

            // Filter out null values (in case decoding failed)
            $ids = array_filter($ids);

            // Validasi id yang ter-decode
            if (empty($ids)) {
                return response()->json([
                    'status' => [
                        'message' => 'ID Izin karyawan tidak valid.'
                    ]
                ], 422);
            }

            // Update status Izin karyawan berdasarkan id
            Izin::whereIn('id', $ids)->update(['status' => 'disetujui']);

            return response()->json([
                'status' => [
                    'message' => 'Izin karyawan berhasil divalidasi.'
                ]
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => [
                    'message' => 'Terjadi kesalahan saat memvalidasi izin karyawan.',
                    'error' => $e->getMessage()
                ]
            ], 500);
        }
    }

}
