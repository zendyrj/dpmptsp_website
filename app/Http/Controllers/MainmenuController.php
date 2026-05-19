<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MainmenuRequest;
use App\Mainmenu;

class MainmenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Mainmenu::with('children')->where('parent','=',0)->orderBy('urutan')->get();
        return view('belakang.menu.list_menu', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parents = Mainmenu::where('parent','=',0)->orderBy('urutan')->get();
        return view('belakang.menu.buat_menu',compact('parents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MainmenuRequest $request)
    {
        $slug = str_slug($request->nama, '-');
        $cari = Mainmenu::where('parent','=', $request->parent)->orderBy('urutan','desc')->first();
        if(!empty($cari->urutan)){
            $urutan = $cari->urutan + 1;
        }else{
            $urutan = 0;
        }
        

        $Mainmenu=new Mainmenu;
        $Mainmenu->parent=$request->parent;
        $Mainmenu->nama=$request->nama;
        $Mainmenu->isi=$request->isi;
        $Mainmenu->urutan=$urutan;
        $Mainmenu->alamat=$slug;
        $Mainmenu->save();
        if($Mainmenu){
            $request->session()->flash('berhasil', 'Menu berhasil ditambahkan');
            return redirect('/panel/menu'); 
        }else{
            return redirect('/panel/menu/create');
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
        $post = Mainmenu::findOrFail($id);
        $parents = Mainmenu::where('parent','=',0)->orderBy('urutan')->get();
        return view('belakang.menu.ubah_menu', compact('post','parents'));
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
        $Mainmenu = Mainmenu::find($id);
        $slug = str_slug($request->nama, '-');
        $Mainmenu->nama=$request->nama;
        $Mainmenu->parent=$request->parent;
        $Mainmenu->urutan=$request->urutan;
        if($request->parent == 0){
            $Mainmenu->alamat = '#';
        }else{
            $Mainmenu->alamat = $slug;
        }
        $Mainmenu->isi=$request->isi;
        $Mainmenu->save();
        if($Mainmenu){
            $request->session()->flash('berhasil', 'Menu berita berhasil diubah');
            return redirect('/panel/menu'); 
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
        Mainmenu::destroy($id);
        session()->flash('berhasil', 'Menu berhasil dihapus');
        return redirect('/panel/menu');
    }
}
