<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarian;

class FrontendController extends Controller
{
    public function about()
    {
        
        return view ('frontend.about', compact('datas'));
    }

    public function home()
    {
        $datas = Tarian::orderBy('updated_at', 'desc')->limit(3)->get();
        
        return view('frontend.beranda', compact('datas'));
    }

    public function tarian()
    {
        $datas = Tarian::orderBy('updated_at', 'asc')->get();
        return view('frontend.tarian', compact('datas'));
    }
    
    public function provinsi()
    {
        return view('frontend.provinsi');
    }
    
    public function shows1()
    {
        //$data = Tarian::find($provinsi);
        // dd($data);
        //$data = Tarian::where('provinsi')->get();
        return view('frontend.shows1');
    }

    public function shows2()
    {
        return view('frontend.shows2');
    }

    public function shows3()
    {
        return view('frontend.shows3');
    }

    public function shows4()
    {
        return view('frontend.shows4');
    }

    public function shows5()
    {
        return view('frontend.shows5');
    }

    public function shows6()
    {
        return view('frontend.shows6');
    }

    public function shows7()
    {
        return view('frontend.shows7');
    }

    public function shows8()
    {
        return view('frontend.shows8');
    }
    
    public function show($id_tarian)
    {
        $data =  Tarian::find($id_tarian);
        return view('frontend.show', compact('data'));
    }
}