<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarian;
use auth;

class DataTarian extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informasis = Tarian::all();
        return view('admin.element.index', compact('informasis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $informasis = Tarian::all();
        return view('admin.element.create', compact('informasis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $informasis = Tarian::all();
        $informasi = new Tarian;
        $informasi->nama_tarian = $request->nama_tarian;
        $informasi->deskripsi = $request->deskripsi;
        $informasi->video = $request->video;
        $informasi->provinsi = $request->provinsi;
        $foto = $request->foto;
        $namafoto = $foto->getClientOriginalName();
        $foto->move('foto_tarian', $namafoto);
        $informasi->foto = $namafoto;
        $informasi->save();
        return redirect()->route('createInformasi', compact('informasis'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_tarian
     * @return \Illuminate\Http\Response
     */
    public function show($id_tarian)
    {
        $informasi = Tarian::find($id_tarian);

        return view('admin.element.show', compact('informasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_tarian
     * @return \Illuminate\Http\Response
     */
    public function edit($id_tarian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_tarian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $informasi = Tarian::find($request->id_tarian);
        $informasi->nama_tarian = $request->input('nama_tarian');
        $informasi->deskripsi = $request->input('deskripsi');
        $informasi->video = $request->input('video');
        $informasi->provinsi = $request->input('provinsi');
        $foto = $request->foto;
        $namafoto = $foto->getClientOriginalName();
        $foto->move('foto_tarian', $namafoto);
        $informasi->foto = $namafoto;
        
        $informasi->save();
        return redirect()->route('indexInformasi')->with('informasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_tarian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_tarian)
    {
        $informasi =  Tarian::find($id_tarian);
        $informasi->delete();

        return redirect('admin/index');
    }
}
