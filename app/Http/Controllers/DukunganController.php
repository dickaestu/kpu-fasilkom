<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kandidat;
use App\Komentar;

class DukunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dukungan($id)
    {
        
        $item = Kandidat::findOrFail($id);
 
        $komentar = Komentar::with(['user'])->where('kandidat_id',$id)->get();
      
        return view('dukungan',compact('item','komentar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id_kandidat, $id_user)
    {
         $request->validate([
           'isi_komentar' => 'required|max:150',
           'captcha' => 'required|captcha'
         ], [
            'isi_komentar.max' => 'Komentar terlalu panjang',
            'captcha.captcha' => 'Captcha Salah',
        ]);


        Komentar::create([
            'kandidat_id' => $id_kandidat,
            'user_id' => $id_user,
            'isi_komentar' => $request->isi_komentar,
        ]);


        return redirect()->back()->with('sukses','Komentar Berhasil Di Buat');



    }

     public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
