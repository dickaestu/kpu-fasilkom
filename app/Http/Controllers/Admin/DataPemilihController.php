<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\User;
use PDF;

class DataPemilihController extends Controller
{
    public function index()
    {
        $items = User::where('roles','mahasiswa')->where('status_verifikasi',true)->get();
        return view('admin.data-pemilih',compact('items'));
    }

    public function exportPdf()
    {
       $items = User::all();
       $pdf = PDF::loadView('admin.export.exportpdf-pemilih', ['items' =>$items]);
       return $pdf->download('data-pemilih.pdf');
    }

    public function exportExcel()
    {
       
       return Excel::download(new UsersExport, 'data-pemilih.xlsx');
    }
}
