<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PengaduanRequest;
use App\Mainmenu;
use App\Alamat;
use App\Sosmed;
use App\Post;
use App\Info;
use App\Pengaduan;
use DB;


class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexberita()
    {
        $almt = Alamat::findOrFail(1);
        $sosmeds = Sosmed::all();
        $menus = Mainmenu::with('children')->where('parent','=',0)->orderBy('urutan')->get();
        $list = Post::with('user')->orderBy('id', 'desc')->paginate(6);
        $posts = Post::where('status', 'publish')->orderBy('tgl_buat','desc')->take(3)->get();
        $infos = Info::where('status', 'publish')->orderBy('tgl_buat','desc')->take(3)->get();
        return view('depan.berita_list', compact('almt','sosmeds','menus','posts','infos','list'));
    }
    public function indexinformasi()
    {
        $almt = Alamat::findOrFail(1);
        $sosmeds = Sosmed::all();
        $menus = Mainmenu::with('children')->where('parent','=',0)->orderBy('urutan')->get();
        $list = Info::with('user')->orderBy('id', 'desc')->paginate(6);
        $posts = Post::where('status', 'publish')->orderBy('tgl_buat','desc')->take(3)->get();
        $infos = Info::where('status', 'publish')->orderBy('tgl_buat','desc')->take(3)->get();
        return view('depan.info_list', compact('almt','sosmeds','menus','posts','infos','list'));
    }
    public function indexpengaduan()
    {
        $almt = Alamat::findOrFail(1);
        $sosmeds = Sosmed::all();
        $menus = Mainmenu::with('children')->where('parent','=',0)->orderBy('urutan')->get();
        $posts = Post::where('status', 'publish')->orderBy('tgl_buat','desc')->take(3)->get();
        $infos = Info::where('status', 'publish')->orderBy('tgl_buat','desc')->take(3)->get();
        $aduan = DB::table('pengaduans')->where('id_parent',"0")->orderBy('id','desc')->get();
        return view('depan.pengaduan', compact('almt','sosmeds','menus','posts','infos','aduan'));
    }
    public function storepengaduan(PengaduanRequest $request)
    {
        
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

        if (substr($request->nik,0,4) != '3512') {
            return redirect('/pengaduan-dpmptsp')->with('message', "Maaf Nomor NIK bukan dari Kabupaten Situbondo !" ); 
        }else{
            $aduan = new Pengaduan;
            $aduan->id_parent="0";
            $aduan->status_balas="belum";
            $aduan->nik=$request->nik;
            $aduan->nama=$request->nama;
            $aduan->file=$nama_file;
            $aduan->telp=$request->telp;
            $aduan->subject=$request->subject;
            $aduan->laporan=$request->laporan;
            $aduan->save();
            return redirect('/pengaduan-dpmptsp')->with('message', "Terima Kasih untuk Pengaduan yang anda sampaikan, Silahkan ditunggu untuk kita tanggapi." ); 
        }

        
       
       
    }
	
	public function alurpengaduan()
    {
        $almt = Alamat::findOrFail(1);
        $sosmeds = Sosmed::all();
        $menus = Mainmenu::with('children')->where('parent','=',0)->orderBy('urutan')->get();
        
        $posts = Post::where('status', 'publish')->orderBy('tgl_buat','desc')->take(3)->get();
        $infos = Info::where('status', 'publish')->orderBy('tgl_buat','desc')->take(3)->get();
        return view('depan.alur_layanan', compact('almt','sosmeds','menus','posts','infos'));
    }
	
	public function pejabat()
    {
        $almt = Alamat::findOrFail(1);
        $sosmeds = Sosmed::all();
        $menus = Mainmenu::with('children')->where('parent','=',0)->orderBy('urutan')->get();
        
        $posts = Post::where('status', 'publish')->orderBy('tgl_buat','desc')->take(3)->get();
        $infos = Info::where('status', 'publish')->orderBy('tgl_buat','desc')->take(3)->get();
        return view('depan.pejabat_penanganan', compact('almt','sosmeds','menus','posts','infos'));
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
    public function halaman($x)
    {
        $halaman = Mainmenu::where('alamat', $x)->first();
        $almt = Alamat::findOrFail(1);
        $sosmeds = Sosmed::all();
        $menus = Mainmenu::with('children')->where('parent','=',0)->orderBy('urutan')->get();
        $posts = Post::where('status', 'publish')->orderBy('tgl_buat','desc')->take(3)->get();
        $infos = Info::where('status', 'publish')->orderBy('tgl_buat','desc')->take(3)->get();
        return view('depan.halaman', compact('halaman','almt','sosmeds','menus','posts','infos'));
    }
    public function detailberita($x)
    {
        $halaman = Post::where('slug', $x)->first();
        $almt = Alamat::findOrFail(1);
        $sosmeds = Sosmed::all();
        $menus = Mainmenu::with('children')->where('parent','=',0)->orderBy('urutan')->get();
        $posts = Post::where('status', 'publish')->orderBy('tgl_buat','desc')->take(4)->get();
        $infos = Info::where('status', 'publish')->orderBy('tgl_buat','desc')->take(4)->get();
        return view('depan.berita_detail', compact('halaman','almt','sosmeds','menus','posts','infos'));
    }
    public function detailinformasi($x)
    {
        $halaman = Info::where('slug', $x)->first();
        $almt = Alamat::findOrFail(1);
        $sosmeds = Sosmed::all();
        $menus = Mainmenu::with('children')->where('parent','=',0)->orderBy('urutan')->get();
        $posts = Post::where('status', 'publish')->orderBy('tgl_buat','desc')->take(4)->get();
        $infos = Info::where('status', 'publish')->orderBy('tgl_buat','desc')->take(4)->get();
        return view('depan.info_detail', compact('halaman','almt','sosmeds','menus','posts','infos'));
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

    public function balasan(Request $request)
    {
        
        $validasi = DB::table('pengaduans')
            ->where('nik',$request->input('nik'))
            ->where('telp',$request->input('telp'))
            ->where('id',$request->input('id_parent'))
            ->count();
        if ($validasi>0) {

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
            $aduan->nama=$request->input('nama');
            $aduan->id_parent=$request->input('id_parent');
            $aduan->telp="-";
            $aduan->subject=$request->input('subject');
            $aduan->status_balas="belum";
            $aduan->file=$nama_file;
            $aduan->laporan=$request->input('isi_balasan');
            $aduan->save();
            $msg = "Terima Kasih untuk Pengaduan yang anda sampaikan, Silahkan ditunggu untuk kita tanggapi.";
        }else{
            $msg = "Mohon Maaf, NIK atau Nomor Telp yang anda masukkan tidak sesuai. Harap hubungi operator pengaduan";
        }

        return redirect('/pengaduan-dpmptsp')->with('message',"$msg"); 
       
    }

    public function ajax(Request $request)
    {
        $id = $request->input('id');
        $parent = DB::table('pengaduans')
            ->where('id',$id)
            ->get();
        $pengaduans = DB::table('pengaduans')
            ->where('id', $id)
            ->orWhere('id_parent', $id)
            ->get();
        return view('depan.ajax_pengaduan', compact('pengaduans','parent'));
    }
}
