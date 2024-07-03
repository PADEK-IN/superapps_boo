<?php

namespace App\Http\Controllers\Admin;

use App\Models\Absen;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Vinkla\Hashids\Facades\Hashids;

class AdminAbsenController extends Controller
{
    public function listPage()
    {
        $absens = Absen::orderBy('created_at', 'desc')->get();
        return view('pages.admin.absen.list', compact('absens'));
    }

    public function requestPage()
    {
        $absens = Absen::where('status', 'tertunda')->orderBy('created_at', 'desc')->get();
        return view('pages.admin.absen.requestList', compact('absens'));
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
                        'message' => 'ID Absen karyawan tidak valid.'
                    ]
                ], 422);
            }

            // Update status Absen karyawan berdasarkan id
            Absen::whereIn('id', $ids)->update(['status' => 'disetujui']);

            return response()->json([
                'status' => [
                    'message' => 'Absen karyawan berhasil divalidasi.'
                ]
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => [
                    'message' => 'Terjadi kesalahan saat memvalidasi absen karyawan.',
                    'error' => $e->getMessage()
                ]
            ], 500);
        }
    }
}
