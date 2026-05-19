<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserEditRequest;
use App\User;
use App\Level;
use Auth;

class UserController extends Controller
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
        $users = User::with('level')->where('id','>',1)->get();
        return view('belakang.pengguna.list_pengguna', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $levels = Level::all();
        return view('belakang.pengguna.buat_pengguna', compact('levels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $User=new User;
        $User->name     =$request->name;
        $User->email    =$request->email;
        $User->level_id  =$request->level_id;
        $User->password =bcrypt($request->password);
        $User->save();
        if($User){
            $request->session()->flash('berhasil', 'Pengguna berhasil ditambahkan');
            return redirect('/panel/pengguna'); 
        }else{
            return redirect('/panel/pengguna/create');
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
        $user = User::findOrFail($id);
        $levels = Level::all();
        return view('belakang.pengguna.ubah_pengguna', compact('user','levels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserEditRequest $request, $id)
    {
        $User = User::find($id);
        $User->name     =$request->name;
        $User->email    =$request->email;
        $User->level_id =$request->level_id;
        if(!empty($request->password)){
            $User->password =bcrypt($request->password);
        }
        $User->save();
        if($User){
            $request->session()->flash('berhasil', 'Data pengguna berhasil diubah');
            return redirect('/panel/pengguna'); 
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
        User::destroy($id);
        session()->flash('berhasil', 'Pengguna berhasil dihapus');
        return redirect('/panel/pengguna');
    }
}
