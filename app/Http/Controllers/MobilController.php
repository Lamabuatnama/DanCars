<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Mobil;
class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datas = Mobil::all();
       return view('mobil/index',compact(
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
        $model = new Mobil;
        return view('tambah', compact(
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
        {


            $model = new mobil;
            $model->kode_mobil  = $request->kode_mobil;
            $model->merk        = $request->merk;
            $model->type        = $request->type;
            $model->warna       = $request->warna;
            $model->harga_mobil = $request->harga_mobil;
            if($request->hasFile('gambar')){
                $request->file('gambar')->move('img/', $request->file('gambar')->getClientOriginalName());
                $model->gambar = $request->file('gambar')->getClientOriginalName();
            }
            $model->save();


            return redirect('tambah')->with('success', 'Data Sudah Ditambahkan');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $kode_mobil
     * @return \Illuminate\Http\Response
     */
    public function edit($kode_mobil)
    {

        $model = Mobil::find($kode_mobil); // Mengambil satu pegawai.

        return view('tambah', compact(
            'model'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $kode_mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode_mobil)
    {
        {

            $model = mobil::find($kode_mobil);
            $model->kode_mobil  = $request->kode_mobil;
            $model->merk        = $request->merk;
            $model->type        = $request->type;
            $model->warna       = $request->warna;
            $model->harga_mobil = $request->harga_mobil;
            if($request->hasFile('gambar')){
                $request->file('gambar')->move('img/', $request->file('gambar')->getClientOriginalName());
                $model->gambar = $request->file('gambar')->getClientOriginalName();
            }
            $model->save();
            return redirect('tambah')->with('success', 'Data Sudah DiUpdate');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $kode_mobil
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode_mobil)
    {
        $model = mobil::find($kode_mobil);
        $model->delete();
        return redirect('tambah')->with('success', 'Data Sudah Terhapus');
    }
}
