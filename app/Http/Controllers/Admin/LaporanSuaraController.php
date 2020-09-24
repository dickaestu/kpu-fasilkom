<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exports\DpmExport;
use App\Exports\BemExport;
use App\Exports\HimtiExport;
use App\Exports\HimsisfoExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Vote;
use PDF;

class LaporanSuaraController extends Controller
{
    public function dpm()
    {
        $items = Vote::with(['kandidat','user'])->where('jenis_kandidat', 'dpm')->get();
        return view('admin.laporan-suara.dpm',compact('items'));
    }

     public function bem()
    {
        $items = Vote::with(['kandidat','user'])->where('jenis_kandidat', 'bem')->get();
        return view('admin.laporan-suara.bem',compact('items'));
    }

     public function himti()
    {
        $items = Vote::with(['kandidat','user'])->where('jenis_kandidat', 'himti')->get();
        return view('admin.laporan-suara.himti',compact('items'));
    }

     public function himsisfo()
    {
        $items = Vote::with(['kandidat','user'])->where('jenis_kandidat', 'himsisfo')->get();
        return view('admin.laporan-suara.himsisfo',compact('items'));
    }

    public function exportDpm()
    {
       $items = Vote::with(['kandidat','user'])->where('jenis_kandidat','dpm')->get();
       $pdf = PDF::loadView('admin.export.exportpdf-dpm', ['items' =>$items]);
       return $pdf->download('Laporan-SuaraDPM.pdf');
    }

    public function exportBem()
    {
       $items = Vote::with(['kandidat','user'])->where('jenis_kandidat','bem')->get();
       $pdf = PDF::loadView('admin.export.exportpdf-bem', ['items' =>$items]);
       return $pdf->download('Laporan-SuaraBEM.pdf');
    }

    public function exportHimti() 
    {
       $items = Vote::with(['kandidat','user'])->where('jenis_kandidat','himti')->get();
       $pdf = PDF::loadView('admin.export.exportpdf-himti', ['items' =>$items]);
       return $pdf->download('Laporan-SuaraHIMTI.pdf');
    }

    public function exportHimsisfo()
    {
       $items = Vote::with(['kandidat','user'])->where('jenis_kandidat','himsisfo')->get();
       $pdf = PDF::loadView('admin.export.exportpdf-himsisfo', ['items' =>$items]);
       return $pdf->download('Laporan-SuaraHIMSISFO.pdf');
    }

    public function exportExcelDpm()
    {
       
       return Excel::download(new DpmExport, 'Laporan-SuaraDPM.xlsx');
    }

    public function exportExcelBem()
    {
       
       return Excel::download(new BemExport, 'Laporan-SuaraBEM.xlsx');
    }

    public function exportExcelHimti()
    {
       
       return Excel::download(new HimtiExport, 'Laporan-SuaraHIMTI.xlsx');
    }

    public function exportExcelHimsisfo()
    {
       
       return Excel::download(new HimsisfoExport, 'Laporan-SuaraHIMSISFO.xlsx');
    }
}
