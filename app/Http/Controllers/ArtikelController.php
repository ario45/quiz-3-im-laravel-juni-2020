<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    public function index(){
        
        $artikel = ArtikelModel::get_all();
        return view('layouts.master', compact('artikel'));
    }
}
