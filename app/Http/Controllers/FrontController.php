<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Licence_report;

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

        $data= DB::table('licence_report')->get();
        //card data
        $safety = DB::table('licence_report')->where('kategori', 'safety')->count();
        $health = DB::table('licence_report')->where('kategori', 'health')->count();
        $enviro = DB::table('licence_report')->where('kategori', 'environment')->count();
        $total = DB::table('licence_report')->count('kategori');
        $general = DB::table('licence_report')->where('kategori', 'umum')->count('kategori');

        //bar chart
        $labels = ['Umum', 'Environment', 'Safety', 'Health'];
        $notcomply = [];
        $notmandatory = [];
        $comply= [];
        foreach ($labels as $label) {
            $notcomply[] = DB::table('licence_report')->where('kategori', $label)->where('status_db', 'Not Comply')->count();
            $notmandatory[] = DB::table('licence_report')->where('kategori', $label)->where('status_db', 'Not Mandatory')->count();
            $comply[] = DB::table('licence_report')->where('kategori', $label)->where('status_db', 'Comply')->count();
        }

        //pie chart
        $label = ['Not Mandatory', 'Not Comply', 'Comply'];
        $pie=[];

        foreach($label as $name){
            $pie[] =  DB::table('licence_report')->where('status_db', $name)->count();
        }

        // filter
        $filter_status = DB::table('licence_report')->groupBy('status')->get();
        $filter_year = DB::table('licence_report')
                ->select(DB::raw('YEAR(tanggal_terbit_izin) as year'))
                ->groupBy(DB::raw('YEAR(tanggal_terbit_izin)'))
                ->get();
        $filter_area = DB::table('licence_report')->groupBy('area')->get();



        //area table
        $sites = DB::table('licence_report')
        ->select(
            'area',
            DB::raw('count(*) as total'),
            DB::raw('count(case when status_db = "comply" then 1 end) as total_comply'),
            DB::raw('count(case when status_db = "not comply" then 1 end) as total_not_comply'),
            DB::raw('ROUND((count(case when status_db = "comply" then 1 end) / count(*)) * 100) as persen_comply'),
            DB::raw('ROUND((count(case when status_db = "not comply" then 1 end) / count(*)) * 100) as persen_not_comply')
        )
        ->groupBy('area')
        ->paginate(5);

        // tipe table
        $tipe = DB::table('licence_report')->select('tipe_izin',
        DB::raw('count(case when status_db = "comply" then 1 end) as total_comply'),
        DB::raw('count(case when status_db = "not comply" then 1 end) as total_not_comply'),
        DB::raw('count(case when status_db = "not mandatory" then 1 end) as total_not_mandatory'),
        DB::raw('count(*) as total'),)->groupBy('tipe_izin')->paginate(5);


        // progress table
        $currentCek =  DB::table('licence_report')->select('progress')->get();
        $cekList = ["Arahan Dinas", "Penawaran Konsultan", "Proses Penawaran Cab/Site/PIN", "Submit Dokumen", "Verifikasi Lapangan", "Proses Sidang", "Izin Terbit"];
        $Progress=[];
        foreach($currentCek as $cek){
            $progressIndex = array_search($cek->progress, $cekList);
            if ($progressIndex !== false) {
                $cekSelesai = $progressIndex + 1;
                $totalCek = count($cekList);
                $Progress[] = ($cekSelesai / $totalCek) * 100;
            }
        }
        $data_progress = $data->map(function($currentCek, $key) use ($Progress) {
            return (object) array_merge((array) $currentCek, ['persen' => $Progress[$key]]);
        });




        return view('Front.legal-compliance.dashboard',compact('data','safety','health','enviro','total','general','notcomply','notmandatory','comply','pie','sites','tipe', 'data_progress','filter_status','filter_area','filter_year'));
    }


    public function acc_report()
    {
        $licenceReport = DB::table('licence_report')->get();
        return view("Front.legal-compliance.acc-report",compact('licenceReport'));
    }
    public function repository()
    {
        return view("Front.legal-compliance.repository");
    }
    public function licence_report()
    {
        $licenceReport = DB::table('licence_report')->get();
        return view("Front.legal-compliance.licence-report.licence-report",compact('licenceReport'));
    }

    public function add_licence_report()
    {
        return view('front.legal-compliance.licence-report.add-licence');
    }

    public function post_licence_report(Request $request)
    {
        $request->validate([
            'area' => 'required|string|max:255',
            'tipe_bisnis' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'klasifikasi' => 'required|string|max:255',
            'tipe_izin' => 'required|string|max:255',
            'nib' => 'required|string|max:255',
            'nomor_izin' => 'required|string|max:255',
            'tanggal_terbit_izin' => 'required|string|max:255',
            'tanggal_habis_izin' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'status_perizinan' => 'required|string|max:255',
            'status_db' => 'required|string|max:255',
            'status_lanjut' => 'required|string|max:255',
            'keterangan' => 'required|string|max:255',
            'progress' => 'nullable|string|max:255',
            'file' => 'nullable|file|max:10240',
        ]);

        $data = $request->only([
            'area', 'tipe_bisnis', 'kategori', 'klasifikasi', 'tipe_izin', 'nib',
            'nomor_izin', 'tanggal_terbit_izin', 'tanggal_habis_izin', 'status',
            'status_perizinan', 'status_db', 'status_lanjut', 'keterangan', 'progress'
        ]);
        $data['approve'] = $request->input('approve', '0');



        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension =$file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path ='docs/file/';
            $file->move($path,$filename);
            $data['file'] = $path .$filename;
        }


        $insert = Licence_report::create($data);

        if ($insert) {
            flash()->success('Success', 'Content created successfully!');
        } else {
            flash()->error('Error', 'Failed to create content!');
        }

        return redirect()->route('licence-report')->with('success', 'Data Created successfully.');
    }


    public function edit_licence_report($id){
        $data= licence_report::find($id);
        return view('Front.legal-compliance.licence-report.edit-licence',compact('data'));
    }

    public function post_edit_licence_report(Request $request)
{
    $request->validate([
        'area' => 'required|string|max:255',
        'tipe_bisnis' => 'required|string|max:255',
        'kategori' => 'required|string|max:255',
        'klasifikasi' => 'required|string|max:255',
        'tipe_izin' => 'required|string|max:255',
        'nib' => 'required|string|max:255',
        'nomor_izin' => 'required|string|max:255',
        'tanggal_terbit_izin' => 'required|string|max:255',
        'tanggal_habis_izin' => 'required|string|max:255',
        'status' => 'required|string|max:255',
        'status_perizinan' => 'required|string|max:255',
        'status_db' => 'required|string|max:255',
        'status_lanjut' => 'required|string|max:255',
        'keterangan' => 'required|string|max:255',
        'progress' => 'nullable|string|max:255',
        'file' => 'nullable|file|max:10240',
    ]);
    $licenceReport = licence_report::findOrFail($request->id);

    $data = $request->only([
        'area', 'tipe_bisnis', 'kategori', 'klasifikasi', 'tipe_izin', 'nib',
        'nomor_izin', 'tanggal_terbit_izin', 'tanggal_habis_izin', 'status',
        'status_perizinan', 'status_db', 'status_lanjut', 'keterangan', 'progress'
    ]);

    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $path = 'docs/file/';
        $file->move(public_path($path), $filename);
        $data['file'] = $path . $filename;

        if ($licenceReport->file && file_exists(public_path($licenceReport->file))) {
            unlink(public_path($licenceReport->file));
        }
    }

    $licenceReport->update($data);
    return redirect()->route('licence-report')->with('success', 'Data updated successfully.');
}


    public function delete_licence_report($id)
    {
        try {
            $hasil = Licence_report::findOrFail($id);


            $hasil->delete();
            return redirect()->route('licence-report')->with('success', 'Data has been deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete data.');
        }
    }

}
