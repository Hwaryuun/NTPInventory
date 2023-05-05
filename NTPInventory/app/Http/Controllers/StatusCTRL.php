<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusCTRL extends Controller
{
    public function index(){
        return view('Status.StatusTBL');
   }
   public function create(){
        return view('Status.StatusADD');    
    }

}
