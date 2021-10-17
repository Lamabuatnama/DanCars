<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Mobil;
use App\Models\pembeli;
use App\Models\beli_cash;
use Symfony\Component\Console\Input\Input;

class beli_cashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['mobil']= Mobil::all();
        $data['pelanggan'] = Pembeli::all();
        return view('cash/cash', $data);
    }

    public function faktur(beli_Cash $cash){
        $cash->load(['mobil','pembeli']);
        $data['cash'] = $cash;
        return view('cash/faktur', $data);
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
        $validated = $request->validate([
            'ktp_pembeli' => 'required',
            'kode_mobil' => 'required',
            'tgl_pembeli' => 'required',
            'cash_bayar' => 'required'

        ]);
        $last_id = beli_cash::select('kode_cash')->ordeBy('created_at','desc')->first();
        $kode_cash = ($last_id==null)?sprintf('C%08d',1)
                        :sprintf('C%08d',substr($last_id->kode_cash,1,8)+1);
        $validated['kode_cash']= $kode_cash;
        $input = beli_cash::create($validated);

        if($input) return redirect('cash')->with('Success Masukan Data');
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
