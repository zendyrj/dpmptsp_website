<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Alamat1Request;
use App\Http\Requests\Alamat2Request;
use App\Alamat;
class AlamatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Alamat::findOrFail(1);
        return view('belakang.pengaturan.ubah_pengaturan', compact('setting'));
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
    public function update1(Alamat1Request $request, $id)
    {
        $Alamat = Alamat::find($id);
        $Alamat->nama=$request->nama;
        $Alamat->alamat=$request->alamat;
        $Alamat->telepon=$request->telepon;
        $Alamat->email=$request->email;
        $Alamat->save();
        if($Alamat){
            $request->session()->flash('berhasil', 'Pengaturan berhasil diubah');
            return redirect('/panel/pengaturan'); 
        }else{
            return redirect()->back();
        }
    }
    public function update2(Alamat2Request $request, $id)
    {
        $Alamat = Alamat::find($id);
        if(!empty($request->logo)){
            $file       = $request->file('logo');
            $ext   = $file->getClientOriginalExtension();
            $namafile = 'logo-inspektorat.'.$ext;
            $request->file('logo')->move("gambar/shares/", $namafile);
            $Alamat->logo='gambar/shares/'.$namafile;
        }
        if(!empty($request->gambar_header)){
            $file       = $request->file('gambar_header');
            $ext   = $file->getClientOriginalExtension();
            $namafile = 'inspektorat-1.'.$ext;
            $request->file('gambar_header')->move("gambar/shares/", $namafile);
            $Alamat->gambar_1='gambar/shares/'.$namafile;
        }
        if(!empty($request->gambar_1)){
            $file       = $request->file('gambar_1');
            $ext   = $file->getClientOriginalExtension();
            $namafile = 'inspektorat-2.'.$ext;
            $request->file('gambar_1')->move("gambar/shares/", $namafile);
            $Alamat->gambar_2='gambar/shares/'.$namafile;
        }
        $Alamat->save();
        if($Alamat){
            $request->session()->flash('berhasil', 'Pengaturan berhasil diubah');
            return redirect('/panel/pengaturan'); 
        }else{
            return redirect()->back();
        }
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
