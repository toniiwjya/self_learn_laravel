<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
       public function formsederhana()
    {
            return View::make('form');
    }
     
    public function postformsederhana()
    {
            $nama = Input::get('nama');
            $jeniskelamin = Input::get('jeniskelamin');
            $alamat = Input::get('alamat');
     
            return 'Nama : '.$nama.'< br/> Jenis Kelamin : '.$jeniskelamin.'< br/> Alamat '.$alamat;
    }

}
