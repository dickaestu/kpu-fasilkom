<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kandidat;
use App\Vote;
use Auth;
use Carbon\Carbon;

class PemungutanSuaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dpm()
    {
        $tglSekarang = Carbon::now()->format('y-m-d H:i:s');
        $tglKpu = Carbon::create('2020-09-30 07:00:00')->format('y-m-d H:i:s');
        $tglKpuTutup = Carbon::create('2020-09-30 15:00:00')->format('y-m-d H:i:s');

        if ($tglSekarang > $tglKpuTutup) {
            return view('page-pasca-kpu');
        } elseif ($tglSekarang < $tglKpu) {
            return view('page-pra-kpu');
        } elseif ($tglSekarang >= $tglKpu && $tglSekarang < $tglKpuTutup) {
            $items = Kandidat::where('jenis_kandidat', 'dpm')->get();
            return view('pemungutan-suara/dpm', compact('items'));
        }
    }

    public function bem()
    {

        $tglSekarang = Carbon::now()->format('y-m-d H:i:s');
        $tglKpu = Carbon::create('2020-09-30 07:00:00')->format('y-m-d H:i:s');
        $tglKpuTutup = Carbon::create('2020-09-30 15:00:00')->format('y-m-d H:i:s');

        if ($tglSekarang > $tglKpuTutup) {
            return view('page-pasca-kpu');
        } elseif ($tglSekarang < $tglKpu) {
            return view('page-pra-kpu');
        } elseif ($tglSekarang >= $tglKpu && $tglSekarang < $tglKpuTutup) {
            $items = Kandidat::where('jenis_kandidat', 'bem')->get();
            return view('pemungutan-suara/bem', compact('items'));
        }
    }

    public function himti()
    {
        $tglSekarang = Carbon::now()->format('y-m-d H:i:s');
        $tglKpu = Carbon::create('2020-09-30 07:00:00')->format('y-m-d H:i:s');
        $tglKpuTutup = Carbon::create('2020-09-30 15:00:00')->format('y-m-d H:i:s');

        if ($tglSekarang > $tglKpuTutup) {
            return view('page-pasca-kpu');
        } elseif ($tglSekarang < $tglKpu) {
            return view('page-pra-kpu');
        } elseif ($tglSekarang >= $tglKpu && $tglSekarang < $tglKpuTutup) {
            if (Auth::user()->jurusan == 'teknik informatika') {
                $items = Kandidat::where('jenis_kandidat', 'himti')->get();
                return view('pemungutan-suara/himti', compact('items'));
            } else {
                return redirect()->route('vote-himsisfo');
            }
        }
    }

    public function himsisfo()
    {

        $tglSekarang = Carbon::now()->format('y-m-d H:i:s');
        $tglKpu = Carbon::create('2020-09-30 07:00:00')->format('y-m-d H:i:s');
        $tglKpuTutup = Carbon::create('2020-09-30 15:00:00')->format('y-m-d H:i:s');

        if ($tglSekarang > $tglKpuTutup) {
            return view('page-pasca-kpu');
        } elseif ($tglSekarang < $tglKpu) {
            return view('page-pra-kpu');
        } elseif ($tglSekarang >= $tglKpu && $tglSekarang < $tglKpuTutup) {
            if (Auth::user()->jurusan == 'sistem informasi') {
                $items = Kandidat::where('jenis_kandidat', 'himsisfo')->get();
                return view('pemungutan-suara/himsisfo', compact('items'));
            } else {
                return redirect()->route('vote-himti');
            }
        }
    }

    public function dpm_vote(Request $request, $id_kandidat, $id_user)
    {
        if (Auth::user()->status_verifikasi == true) {
            Vote::create([
                'kandidat_id' => $id_kandidat,
                'user_id' => $id_user,
                'status_vote' => true,
                'jenis_kandidat' => 'dpm',
            ]);
        } else {
            return redirect()->back()->with('error', 'Akun Anda Belum Terverifikasi');
        }


        return redirect()->back()->with('sukses', 'Berhasil Vote');
    }

    public function bem_vote(Request $request, $id_kandidat, $id_user)
    {
        if (Auth::user()->status_verifikasi == true) {
            Vote::create([
                'kandidat_id' => $id_kandidat,
                'user_id' => $id_user,
                'status_vote' => true,
                'jenis_kandidat' => 'bem',
            ]);
        } else {
            return redirect()->back()->with('error', 'Akun Anda Belum Terverifikasi');
        }


        return redirect()->back()->with('sukses', 'Berhasil Vote');
    }


    public function himti_vote(Request $request, $id_kandidat, $id_user)
    {
        if (Auth::user()->status_verifikasi == true) {
            Vote::create([
                'kandidat_id' => $id_kandidat,
                'user_id' => $id_user,
                'status_vote' => true,
                'jenis_kandidat' => 'himti',
            ]);
        } else {
            return redirect()->back()->with('error', 'Akun Anda Belum Terverifikasi');
        }


        return redirect()->back()->with('sukses', 'Berhasil Vote');
    }

    public function himsisfo_vote(Request $request, $id_kandidat, $id_user)
    {
        if (Auth::user()->status_verifikasi == true) {
            Vote::create([
                'kandidat_id' => $id_kandidat,
                'user_id' => $id_user,
                'status_vote' => true,
                'jenis_kandidat' => 'himsisfo',
            ]);
        } else {
            return redirect()->back()->with('error', 'Akun Anda Belum Terverifikasi');
        }


        return redirect()->back()->with('sukses', 'Berhasil Vote');
    }
}
