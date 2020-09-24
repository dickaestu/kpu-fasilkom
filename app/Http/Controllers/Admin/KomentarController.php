<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Komentar;

class KomentarController extends Controller
{
    public function index()
    {
        $items = Komentar::with(['user','kandidat'])->get();
        return view('admin.komentar', compact('items'));
    }

    public function hapus($id) {
        $item = Komentar::findOrFail($id);
        $item->delete();
        return redirect()->route('data-komentar')->with('sukses','Data berhasil dihapus');
    }
}
