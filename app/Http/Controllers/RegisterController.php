<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // index page register
    public function index()
    {
        return view('registrasi.index');
    }

    // store function 
    public function store(Request $request)
    {

        $nama_lengkap = $request->input('nama_lengkap');
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::create([

            'name' => $nama_lengkap,
            'email' => $email,
            'password' => Hash::make($password)

        ]);

        if ($user) {
            return response()->json([
                'success' => true,
                'message' => 'Registrasi Berhasil!'
            ], 201);
        } else {
            return response()->json([
                'succes' => false,
                'message' => 'Registrasi Gagal!'
            ], 400);
        }
    }
}
