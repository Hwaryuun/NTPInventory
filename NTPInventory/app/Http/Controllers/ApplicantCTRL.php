<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicantCTRL extends Controller
{
    public function index(){
        return view('Applicant.ApplicantTBL');
   }
}
