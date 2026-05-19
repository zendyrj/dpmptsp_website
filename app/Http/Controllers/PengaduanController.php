<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PengaduanRequest;
use App\Info;
use App\Stat;
use App\Pengaduan;
use Auth;
use Carbon\Carbon;
use DB;

class PengaduanController extends Controller
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
        $aduan = DB::table('pengaduans')->where('status_balas',"belum")->orderBy('id','desc')->get();
        $sudah = DB::table('pengaduans')->where('status_balas',"sudah")->orderBy('id_parent','asc')->orderBy('id','desc')->get();
        $balas_admin = DB::table('pengaduans')->where('status_balas',"admin")->orderBy('id','desc')->get();
        // $aduan = Pengaduan::all()->orderBy('id','desc')->get();
        return view('belakang.pengaduan.list_pengaduan', compact('aduan','sudah','balas_admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InfoRequest $request)
    {
       
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pengaduan::destroy($id);
        session()->flash('berhasil', 'Pengaduan berhasil dihapus');
        return redirect('/panel/pengaduan');
    }

    public function balas($id_parent)
    {
        $pengaduans = DB::table('pengaduans')->where('id', $id_parent)->get();
        return view('belakang.pengaduan.balas_pengaduan', compact('pengaduans'));
    }

    public function edit($id_parent)
    {
        $pengaduans = DB::table('pengaduans')->where('id', $id_parent)->get();
        foreach ($pengaduans as $value) {
            $id = $value->id_parent;
        }
        $ts = DB::table('pengaduans')->where('id', $id)->get();
        return view('belakang.pengaduan.edit_pengaduan', compact('pengaduans','ts'));
    }

    public function update(Request $request)
    {
        $parent = $request->input('id_parent');
        $file = $request->file('file');
        if (is_null($file)) {
            $nama_file = NULL;
            DB::table('pengaduans')
            ->where('id',$parent)
            ->update(['laporan'=>$request->input('laporan')]);
        }else{
            $tujuan_upload = 'pengaduan';
            $md5Name = md5_file($file->getRealPath()).date("YmdHis").$request->nik;
            $guessExtension = $file->guessExtension();
            $nama_file = $md5Name.'.'.$guessExtension;

            $file->move($tujuan_upload, $nama_file);
            DB::table('pengaduans')
            ->where('id',$parent)
            ->update(['laporan'=>$request->input('laporan'),'file'=>$nama_file]);
        }
        

        return redirect('/panel/pengaduan')->with('message', 'Terima Kasih untuk Pengaduan yang anda sampaikan, Silahkan ditunggu untuk kita tanggapi.'); 
    }

    public function tambah(Request $request)
    {
        if ($request->input('parent')=="0") {
            $parent = $request->input('id_parent');
            DB::table('pengaduans')
                ->where('id', $request->input('id_parent'))
                ->where('status_balas','<>', 'admin')
                ->orWhere('id_parent', $request->input('id_parent'))
                ->update(['status_balas' => "sudah"]);
        }else{
            DB::table('pengaduans')
                ->where('id_parent', $request->input('parent'))
                ->where('status_balas','<>', 'admin')
                ->orWhere('id', $request->input('parent'))
                ->update(['status_balas' => "sudah"]);
            $parent = $request->input('parent');
        }
        $file = $request->file('file');
        if (is_null($file)) {
            $nama_file = NULL;
        }else{
            $tujuan_upload = 'pengaduan';
            $md5Name = md5_file($file->getRealPath()).date("YmdHis").$request->nik;
            $guessExtension = $file->guessExtension();
            $nama_file = $md5Name.'.'.$guessExtension;

            $file->move($tujuan_upload, $nama_file);
        }
        $aduan = new Pengaduan;
        $aduan->id_parent=$parent;
        $aduan->nama="ADMIN-PENGADUAN";
        $aduan->telp="-";
        $aduan->file=$nama_file;
        $aduan->subject=$request->input('subject');
        $aduan->status_balas="admin";
        $aduan->laporan=$request->input('isi_balasan');
        $aduan->save();

        return redirect('/panel/pengaduan')->with('message', 'Terima Kasih untuk Pengaduan yang anda sampaikan, Silahkan ditunggu untuk kita tanggapi.'); 
       
    }

    
}
