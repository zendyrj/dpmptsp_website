<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Post;
use App\Stat;
use Auth;
use Carbon\Carbon;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $posts = Post::with('user')->orderBy('id', 'desc')->get();
        return view('belakang.berita.list_berita', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('belakang.berita.buat_berita');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $slug = str_slug($request->judul, '-');
        $Post=new Post;
        $Post->user_id=Auth::user()->id;
        $Post->berita=$request->berita;
        $Post->judul=$request->judul;
        $Post->status=$request->status;
        $Post->slug=$slug;
        if(!empty($request->filepath)){
            $Post->gambar =$request->filepath;
        }
        $Post->tgl_buat=$request->tgl_buat;
        $Post->save();
        if($Post){
            $request->session()->flash('berhasil', 'Berita berhasil ditambahkan');
            return redirect('/panel/berita'); 
        }else{
            return redirect('/panel/berita/create');
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
        $post = Post::findOrFail($id);
        $stats = Stat::all();
        return view('belakang.berita.ubah_berita', compact('post','stats'));
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
        $Post = Post::find($id);
        $slug = str_slug($request->judul, '-');
        $Post->berita=$request->berita;
        $Post->judul=$request->judul;
        $Post->status=$request->status;
        $Post->slug=$slug;
        if(!empty($request->filepath)){
            $Post->gambar =$request->filepath;
        }
        $Post->tgl_ubah=Carbon::now();
        $Post->save();
        if($Post){
            $request->session()->flash('berhasil', 'Data berita berhasil diubah');
            return redirect('/panel/berita'); 
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
        Post::destroy($id);
        session()->flash('berhasil', 'Berita berhasil dihapus');
        return redirect('/panel/berita');
    }
}
