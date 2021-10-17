<?php

namespace App\Http\Controllers;

use App\Models\pembeli;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Pembeli::all();
        return view('pembeli/pembeli',compact(
            'datas'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Pembeli;
        return view('pembeli', compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $model = new Pembeli;
        $model->ktp_pembeli  = $request->ktp_pembeli;
        $model->nama_pembeli = $request->nama_pembeli;
        $model->alamat_pembeli        = $request->alamat_pembeli;
        $model->telp_pembeli       = $request->telp_pembeli;

        $model->save();


        return redirect('pembeli')->with('success', 'Data Sudah Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pembeli  $ktp_pembeli
     * @return \Illuminate\Http\Response
     */
    public function edit(pembeli $ktp_pembeli)
    {
        $model = Pembeli::find($ktp_pembeli); // Mengambil satu pegawai.

        return view('pembeli', compact(
            'model'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pembeli $ktp_pembeli)
    {
        $model = Pembeli::find($ktp_pembeli);
        $model->ktp_pembeli  = $request->ktp_pembeli;
        $model->nama_pembeli = $request->nama_pembeli;
        $model->alamat_pembeli        = $request->alamat_pembeli;
        $model->telp_pembeli       = $request->telp_pembeli;

        $model->save();


        return redirect('pembeli')->with('success', 'Data Sudah Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function destroy(pembeli $pembeli)
    {
        //
    }
}
