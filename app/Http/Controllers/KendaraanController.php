<?php

namespace App\Http\Controllers;

use App\Model\Kendaraan;
use App\Http\Requests\KendaraanRequest;
use Illuminate\Support\Facades\Session;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kendaraan = Kendaraan::paginate('5');
        return view('kendaraan.index',compact('kendaraan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kendaraan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KendaraanRequest $request)
    {
        Kendaraan::create($request->all());
        Session::flash('flash_message','Data berhasil Ditambahkan');
        return redirect('kendaraan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function show(Kendaraan $kendaraan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kendaraan $kendaraan)
    {
        return view('kendaraan.edit',compact('kendaraan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function update(KendaraanRequest $request, Kendaraan $kendaraan)
    {
        $kendaraan->update($request->all());
        Session::flash('flash_message','Data berhasil diupdate');
        return redirect('kendaraan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kendaraan $kendaraan)
    {
        $kendaraan->delete();
        Session::flash('flash_message','Data Berhasil Dihapus');
        Session::flash('penting',true);
        return redirect('kendaraan');
    }
}
