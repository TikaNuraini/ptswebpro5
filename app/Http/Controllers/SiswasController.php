<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
//Kartika Nuraini XI IPA 3
class SiswaController extends Controller
{
    public function index()
    {
        $siswas= Siswa::all();
        return view('siswas.index', compact('siswas'));
    }
}
