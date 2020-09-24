<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vote;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('index');
    }

    public function perhitunganlangsung()
    {
        $dpm = Vote::where('jenis_kandidat', 'dpm')->count();
        $bem = Vote::where('jenis_kandidat', 'bem')->count();
        $himti = Vote::where('jenis_kandidat', 'himti')->count();
        $himsisfo = Vote::where('jenis_kandidat', 'himsisfo')->count();
        return view('perhitunganlangsung',compact('dpm','bem','himsisfo','himti'));
    }

    public function login()
    {
        return view('layouts.login');
    }

    public function registrasi()
    {
        return view('layouts.registrasi');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
