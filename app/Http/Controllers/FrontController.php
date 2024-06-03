<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class FrontController extends Controller
{
    public function home()
    {
        return view('front.home');
    }

    // Menampilkan halaman tentang
    public function about()
    {
        return view('front.about');
    }

    // Menampilkan halaman PPA
    public function ppa()
    {
        return view('front.ppa');
    }

    // Menampilkan halaman PLB3
    public function plb3()
    {
        return view('front.plb3');
    }

    // Menampilkan halaman Legal Compliance
    public function legalCompliance()
    {
        return view('front.legal-compliance');
    }//

//fitur legal-compliance post
    public function dashboard()
    {
        return view('Front.legal-compliance.dashboard');
    }


    public function acc_report()
    {
        return view("Front.legal-compliance.acc-report");
    }
    public function repository()
    {
        return view("Front.legal-compliance.repository");
    }
    public function licence_report()
    {
        return view("Front.legal-compliance.licence-report");
    }
}
