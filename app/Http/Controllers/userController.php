<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class userController extends Controller
{
    Public function halamanRegister(){
        return view('layouts.register');
    }

    public function simpanRegister(Request $request){

        $request->validate(
            [
                'nik'=>'required|unique:users,email|min:16|max:16',
                'name'=>'required'
            ],
            [
                'nik.required'=>'NIK tidak boleh kosong.',
                'nik.unique'=>'NIK Terdaftar.',
                'name.required'=>'Nama tidak boleh kosong'
            ]
        );

        $data=[
            'name'=>$request->name,
            'email'=>$request->nik,
            'password'=>bcrypt($request->nik)
        ];

        User::create($data);
        return redirect('/register')->with('success', "Registrasi berhasil. Silahkan login!");
    }
}