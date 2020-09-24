<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class VerifikasiController extends Controller
{
    public function index()
    {
        $items = User::where('status_verifikasi', false)->get();
        return view('admin.verifikasi',compact('items'));
    }

    public function verifikasi($id)
    {
        $item = User::findOrFail($id);
        $item->status_verifikasi = true;
        $item->save();

        return redirect()->route('verifikasi')->with('sukses', 'Akun berhasil di verifikasi');
    }

    public function tolak($id)
    {
        $item = User::findOrFail($id);
        $item->delete();

        return redirect()->route('verifikasi')->with('sukses', 'Akun berhasil di tolak');
    }
}
