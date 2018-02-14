<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Siswa;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view('home', compact('siswa'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        
       $siswa = new Siswa();
       $siswa->nama = $request->nama;
       $siswa->jk = $request->jk;
       $siswa->ttl = $request->ttl;
       $siswa->agama = $request->agama;
       $siswa->alamat = $request->alamat;
       
       $siswa->save();

       return redirect()->route('home')->with('alert-success','Berhasil Menambahkan Data!');
              
    }

    public function edit($id)
    {
        $siswa = Siswa::where('id',$id)->get();

        return view('edit',compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $siswa = Siswa::where('id',$id)->first();
        $siswa->nama = $request->nama;
        $siswa->jk = $request->jk;
        $siswa->ttl = $request->ttl;
        $siswa->agama = $request->agama;
        $siswa->alamat = $request->alamat;
        $siswa->save();
        return redirect()->route('home')->with('alert-success','Data berhasil diubah!');
    }

    public function destroy($id)
    {
        $siswa = Siswa::where('id',$id)->first();
        $siswa->delete();
        return redirect()->route('home')->with('alert-success','Data berhasi dihapus!');
    }
}
