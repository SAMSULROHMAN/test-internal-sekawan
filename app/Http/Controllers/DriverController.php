<?php

namespace App\Http\Controllers;

use App\Model\Driver;
use App\Http\Requests\DriverRequest;
use Illuminate\Support\Facades\Session;


class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $driver = Driver::all();
        return view('driver.index',compact('driver'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('driver.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DriverRequest $request)
    {
        Driver::create($request->all());
        Session::flash('flash_message','Data berhasil Ditambahkan');
        return redirect('driver');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function show(Driver $driver)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function edit(Driver $driver)
    {
        return view('driver.edit',compact('driver'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function update(DriverRequest $request, Driver $driver)
    {
        $driver->update($request->all());
        Session::flash('flash_message','Data berhasil diupdate');
        return redirect('driver');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy(Driver $driver)
    {
        $driver->delete();
        Session::flash('flash_message','Data Berhasil Dihapus');
        Session::flash('penting',true);
        return redirect('driver');
    }
}
