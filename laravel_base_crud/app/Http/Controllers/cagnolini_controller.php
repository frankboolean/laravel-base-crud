<?php

namespace App\Http\Controllers;

use App\cagnolini;

use Illuminate\Http\Request;

class cagnolini_controller extends Controller
{
    public function index(){
      $cagnoliniDB = cagnolini::all();

      view('home', compact('cagnoliniDB'));
    }
}
