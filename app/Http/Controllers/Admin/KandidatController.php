<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Kandidat;
use App\Http\Requests\KandidatRequest;

class KandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Kandidat::all();
        return view('admin.kandidat.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kandidat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KandidatRequest $request)
    {
        $data = $request->all();
        $data['foto'] = $request->file('foto')->store(
            'assets/image', 'public'
        );
        Kandidat::create($data);
        return redirect()->route('kandidat.index')->with('sukses','Data Berhasil Dibuat');
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
        $item = Kandidat::findOrFail($id);
        return view('admin.kandidat.edit',compact('item'));
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
        $request->validate([
           'nama' => 'required|max:150',
            'nim' => 'required|max:15',
            'jurusan' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'jenis_kandidat' => 'required',
        ]);
         $item = Kandidat::findOrFail($id);
        $data = $request->all();
       
        $item->update($data);
        return redirect()->route('kandidat.index')->with('sukses', 'Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Kandidat::findOrFail($id);
        $item->delete();
        return redirect()->route('kandidat.index')->with('sukses', 'Data berhasil di hapus');
    }
}
