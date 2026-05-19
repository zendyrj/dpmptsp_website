<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alamat;
use App\Mainmenu;
use App\Post;
use App\Info;
use App\Sosmed;
use App\Map;
use App\Slider;
class IndexDepanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $almt = Alamat::findOrFail(1);
        $menus = Mainmenu::with('children')->where('parent','=',0)->orderBy('urutan')->get();
        $posts1 = Post::where('status', 'publish')->orderBy('tgl_buat','desc')->skip(0)->take(3)->get();
        $infos1 = Info::where('status', 'publish')->orderBy('tgl_buat','desc')->skip(0)->take(6)->get();
        $sosmeds = Sosmed::all();
        $slides = Slider::orderBy('id','desc')->get();
        return view('depan.depan', compact('almt','menus','posts1','infos1','sosmeds','slides'));
    }
}
