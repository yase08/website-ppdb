<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class RegisterController extends Controller
{
    public function indexRegister()
    {
        return view('pages.register');
    }

    public function registerStore(Request $request, User $user)
    {
        $select = $request->asal_sekolah;

        if($select == "lainnya") {
            $sekolah = $request->sekolah_lainnya;
        }else {
            $sekolah = $request->asal_sekolah;
        }

        $request->validate([
            'nisn' => 'required',
            'jk' => 'required',
            'asal_sekolah' => 'required',
            'name' => 'required',
            'nohp' => 'required',
            'nohp_ayah' => 'required',
            'nohp_ibu' => 'required',
            'email' => 'required|email'
        ]);

        $data = User::create([
            'name' => $request->name,
            'nisn' => $request->nisn,
            'jk' => $request->jk,
            'asal_sekolah' => $sekolah,
            'password' => Hash::make($request->nisn),
            'nohp' => $request->nohp,
            'nohp_ayah' => $request->nohp_ayah,
            'nohp_ibu' => $request->nohp_ibu,
            'email' => $request->email,
        ]);

        return view('print', compact('data'));
    }
}
