<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Vote;
use App\User;

class DashboardController extends Controller
{
    public function index()
    {
        $pemilih = User::where('roles', 'mahasiswa')->where('status_verifikasi',true)->count();
        $dpm = Vote::where('jenis_kandidat', 'dpm')->count();
        $bem = Vote::where('jenis_kandidat', 'bem')->count();
        $himti = Vote::where('jenis_kandidat', 'himti')->count();
        $himsisfo = Vote::where('jenis_kandidat', 'himsisfo')->count();
        return view('admin.dashboard',compact('dpm','bem','himsisfo','himti','pemilih'));
    }
}