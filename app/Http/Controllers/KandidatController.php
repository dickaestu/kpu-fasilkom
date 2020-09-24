<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kandidat;

class KandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dpm()
    {
        $items = Kandidat::where('jenis_kandidat', 'dpm')->get();
        return view('kandidat/dpm', compact('items'));
    }

    public function bem()
    {
        $items = Kandidat::where('jenis_kandidat', 'bem')->get();
        return view('kandidat/bem', compact('items'));
    }
    public function himti()
    {
        $items = Kandidat::where('jenis_kandidat', 'himti')->get();
        return view('kandidat/himti', compact('items'));
    }
    public function himsisfo()
    {
        $items = Kandidat::where('jenis_kandidat', 'himsisfo')->get();
        return view('kandidat/himsisfo', compact('items'));
    }
}
