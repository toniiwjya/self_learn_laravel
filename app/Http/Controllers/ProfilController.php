<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProfilController extends Controller
{
    public function index(){

    	$nama="<strong>toni</strong>";
    	$umur=21;

    	return view('profil',compact('nama','umur'));
    }

    public function materi(){
    	
    	$datas=['html','css','js'];

    	return view('materi')->with('datas',$datas);

    }
}
