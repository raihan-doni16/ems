<?php

namespace App\Http\Controllers;

use App\Models\ruang_media;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    // public function index()
    // {
    //     $ruang_media = DB::table('ruang_media')->get()->map(
    //     function ($item) {
    //     $description = $item->description;
    //     $words = explode(' ', $description);
    //     if (count($words) > 10) {
    //         $item->description = implode(' ', array_slice($words, 0, 10)) . '...';
    //     }
    //     return $item;
    //     });



    // $hasil_kerja = DB::table('_hasil_kerja_perusahaan')->get();

    // $penghargaan =DB::table('penghargaan')->get();
    // $enviro_facility= DB::table('environment_facility')->get();

    // return view('Admin.Home.index', compact('ruang_media','hasil_kerja','penghargaan','enviro_facility'));
    // }
}
