<?php

namespace App\Http\Controllers;

use App\cagnolini;

use Illuminate\Http\Request;

class cagnolini_controller extends Controller
{
    public function index(){
      $cagnoliniDb = cagnolini::all();

      return view('home', compact('cagnoliniDb'));
    }

    // public function showCani($id)
    //
    // $cane = User::findOrFail($id);
    //
    // return view('user.profile', )
}
