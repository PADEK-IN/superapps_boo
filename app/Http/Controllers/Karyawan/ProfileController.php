<?php

namespace App\Http\Controllers\Karyawan;

use Illuminate\Http\Request;

class ProfileController
{
    public function profile()
    {
        return view('pages.karyawan.profile.index');
    }

    public function edit()
    {
        return view('pages.karyawan.profile.edit');
    }
}
