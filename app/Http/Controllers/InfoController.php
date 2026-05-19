<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InfoRequest;
use App\Info;
use App\Stat;
use Auth;
use Carbon\Carbon;

class InfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infos = Info::with('user')->orderBy('id', 'desc')->get();
        return view('belakang.info.list_info', compact('infos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('belakang.info.buat_info');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InfoRequest $request)
    {
        $slug = str_slug($request->judul, '-');
        $Info=new Info;
        $Info->user_id=Auth::user()->id;
        $Info->info=$request->info;
        $Info->judul=$request->judul;
        $Info->status=$request->status;
        $Info->slug=$slug;
        if(!empty($request->filepath)){
            $Info->gambar =$request->filepath;
        }
        $Info->tgl_buat=$request->tgl_buat;
        $Info->save();
        if($Info){
            $request->session()->flash('berhasil', 'Informasi berhasil ditambahkan');
            return redirect('/panel/info'); 
        }else{
            return redirect('/panel/info/create');
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
        $info = Info::findOrFail($id);
        $stats = Stat::all();
        return view('belakang.info.ubah_info', compact('info','stats'));
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
        $Info = Info::find($id);
        $slug = str_slug($request->judul, '-');
        $Info->info=$request->info;
        $Info->judul=$request->judul;
        $Info->status=$request->status;
        $Info->slug=$slug;
        if(!empty($request->filepath)){
            $Info->gambar =$request->filepath;
        }
        $Info->tgl_ubah=Carbon::now();
        $Info->save();
        if($Info){
            $request->session()->flash('berhasil', 'Data informasi berhasil diubah');
            return redirect('/panel/info'); 
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
        Info::destroy($id);
        session()->flash('berhasil', 'Informasi berhasil dihapus');
        return redirect('/panel/info');
    }
}
