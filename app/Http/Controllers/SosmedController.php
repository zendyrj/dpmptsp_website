<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sosmed;

class SosmedController extends Controller
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
        //
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
    public function edit($x)
    {
        $sosmed = Sosmed::where('nama', $x)->first();
        return view('belakang.sosmed.ubah_sosmed', compact('sosmed'));
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
        if($id > 2){
            $Sosmed = Sosmed::find($id);
            $Sosmed->link=$request->link;
            $Sosmed->save();
        }else{
            $Sosmed = Sosmed::find($id);
            $Sosmed->link=$request->link;
            $Sosmed->embed=$request->embed;
            $Sosmed->save();
        }
        
    
        $request->session()->flash('berhasil', 'Data media sosial berhasil diubah');
        return redirect()->back();        
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
