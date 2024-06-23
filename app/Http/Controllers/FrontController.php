<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Licence_report;
use App\Models\Comment;
use App\Models\Repository;
class FrontController extends Controller
{
    public function home()
    {
        return view('front.home');
    }

    // Menampilkan halaman about
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
    }

    //fitur legal-compliance dashboard
    public function dashboard(Request $request)
    {

        $data = DB::table('licence_report');

        // Filter options
        $filter_area = DB::table('licence_report')->select('area')->groupBy('area')->get();
        $filter_status = DB::table('licence_report')->select('status')->groupBy('status')->get();

        // Data card counts
        $safetyQuery = DB::table('licence_report')->where('kategori', 'safety');
        $healthQuery = DB::table('licence_report')->where('kategori', 'health');
        $enviroQuery = DB::table('licence_report')->where('kategori', 'environment');
        $totalQuery = DB::table('licence_report');
        $generalQuery = DB::table('licence_report')->where('kategori', 'umum');



        // Bar chart counts
        $labels = ['Umum', 'Environment', 'Safety', 'Health'];
        $notcomply = [];
        $notmandatory = [];
        $comply = [];
        foreach ($labels as $label) {
            $notcomply[] = DB::table('licence_report')->where('kategori', $label)->where('status_db', 'Not Comply')->when($request->has('area') && $request->input('area') != '', function ($query) use ($request) {
            return $query->where('area', $request->input('area'));
            })->when($request->has('status') && $request->input('status') != '', function ($query) use ($request) {
            return $query->where('status', $request->input('status'));
            })->count();
            $notmandatory[] = DB::table('licence_report')->where('kategori', $label)->where('status_db', 'Not Mandatory')->when($request->has('area') && $request->input('area') != '', function ($query) use ($request) {
            return $query->where('area', $request->input('area'));
            })->when($request->has('status') && $request->input('status') != '', function ($query) use ($request) {
            return $query->where('status', $request->input('status'));
            })->count();
            $comply[] = DB::table('licence_report')->where('kategori', $label)->where('status_db', 'Comply')->when($request->has('area') && $request->input('area') != '', function ($query) use ($request) {
            return $query->where('area', $request->input('area'));
            })->when($request->has('status') && $request->input('status') != '', function ($query) use ($request) {
            return $query->where('status', $request->input('status'));
            })->count();
        }

        // Pie chart counts
        $label = ['Not Mandatory', 'Not Comply', 'Comply'];
        $pie = [];
        foreach ($label as $name) {
            $pie[] = DB::table('licence_report')
            ->where('status_db', $name)
            ->when($request->has('area') && $request->input('area') != '', function ($query) use ($request) {
                return $query->where('area', $request->input('area'));
            })
            ->when($request->has('status') && $request->input('status') != '', function ($query) use ($request) {
                return $query->where('status', $request->input('status'));
            })
            ->count();
        }

        // Area table
        $sitesQuery = DB::table('licence_report')
            ->select(
                'area',
                DB::raw('count(*) as total'),
                DB::raw('count(case when status_db = "comply" then 1 end) as total_comply'),
                DB::raw('count(case when status_db = "not comply" then 1 end) as total_not_comply'),
                DB::raw('ROUND((count(case when status_db = "comply" then 1 end) / count(*)) * 100) as persen_comply'),
                DB::raw('ROUND((count(case when status_db = "not comply" then 1 end) / count(*)) * 100) as persen_not_comply')
            )->groupBy('area');



        // Tipe table
        $tipeQuery = DB::table('licence_report')
            ->select(
                'tipe_izin',
                DB::raw('count(case when status_db = "comply" then 1 end) as total_comply'),
                DB::raw('count(case when status_db = "not comply" then 1 end) as total_not_comply'),
                DB::raw('count(case when status_db = "not mandatory" then 1 end) as total_not_mandatory'),
                DB::raw('count(*) as total')
            )
            ->groupBy('tipe_izin');





        // Progress table
        $currentCek = DB::table('licence_report')->select('progress')->get();
        $cekList = ["Arahan Dinas", "Penawaran Konsultan", "Proses Penawaran Cab/Site/PIN", "Submit Dokumen", "Verifikasi Lapangan", "Proses Sidang", "Izin Terbit"];
        $Progress = [];

        foreach ($currentCek as $cek) {
            $progressIndex = array_search($cek->progress, $cekList);
            if ($progressIndex !== false) {
                $cekSelesai = $progressIndex + 1;
                $totalCek = count($cekList);
                $Progress[] = ($cekSelesai / $totalCek) * 100;
            }
        }

        $data_progressQuery = DB::table('licence_report')->get()->map(function ($currentCek, $key) use ($Progress) {
            return (object)array_merge((array)$currentCek, ['persen' => $Progress[$key]]);
        });


        if ($request->has('status')&& $request->input('status') != '') {
            $sitesQuery->where('status', $request->input('status'));
            $tipeQuery->where('status', $request->input('status'));
            $data_progressQuery = $data_progressQuery->where('status', $request->input('status'));
            $safetyQuery->where('status', $request->input('status'));
            $healthQuery->where('status', $request->input('status'));
            $enviroQuery->where('status', $request->input('status'));
            $totalQuery->where('status', $request->input('status'));
            $generalQuery->where('status_db', $request->input('status'));
        }

        if ($request->has('area')&& $request->input('area') != '') {
            $sitesQuery->where('area', $request->input('area'));
            $tipeQuery->where('area', $request->input('area'));
            $data_progressQuery = $data_progressQuery->where('area', $request->input('area'));
            $safetyQuery->where('area', $request->input('area'));
            $healthQuery->where('area', $request->input('area'));
            $enviroQuery->where('area', $request->input('area'));
            $totalQuery->where('area', $request->input('area'));
            $generalQuery->where('area', $request->input('area'));
        }


        $safety = $safetyQuery->count();
        $health = $healthQuery ->count();
        $enviro = $enviroQuery ->count();
        $total = $totalQuery->count('kategori');
        $general = $generalQuery->count();
        $sites = $sitesQuery->paginate(5);
        $tipe = $tipeQuery->paginate(5);
        $data_progress = $data_progressQuery;

        return view('Front.legal-compliance.dashboard', compact('data', 'safety', 'health', 'enviro', 'total', 'general', 'notcomply', 'notmandatory', 'comply', 'pie', 'sites', 'tipe', 'data_progress', 'filter_area', 'filter_status'));
    }



    public function acc_report()
    {
        $licenceReport = DB::table('licence_report')->get();
        return view("Front.legal-compliance.acc-report",compact('licenceReport'));
    }
    public function repository()
    {

        $repo = DB::table('repository')
            ->join('users', 'repository.user_id', '=', 'users.id')
            ->select('repository.*', 'users.email')
            ->get();
        return view("Front.legal-compliance.repository.repository",compact('repo'));
    }
    public function add_repository()
    {
        return view('front.legal-compliance.repository.add-repository');
    }
    public function post_repository(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'year' => 'required|string|max:255',
            'file' => 'nullable|file|mimes:pdf|max:10240',
        ]);

        $data = $request->only([
            'name', 'category', 'year'
        ]);
        $data['user_id'] = auth()->user()->id;


        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension =$file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path ='docs/file/';
            $file->move($path,$filename);
            $data['file'] = $path .$filename;
        }


        $insert = repository::create($data);


        return redirect()->route('repository')->with('success', 'Repository Created successfully.');
    }
    public function edit_repository($id){
        $repo= repository::find($id);
        return view('front.legal-compliance.repository.edit-repository',compact('repo'));
    }
    public function post_edit_repository(Request $request)
    {
        $repo = repository::findOrFail($request->id);
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'year' => 'required|string|max:255',
            'file' => 'nullable|file|mimes:pdf|max:10240',
        ]);

        $data = $request->only([
            'name', 'category', 'year'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'docs/file/';
            $file->move(public_path($path), $filename);
            $data['file'] = $path . $filename;

            if ($repo->file && file_exists(public_path($repo->file))) {
                unlink(public_path($repo->file));
            }
        }

        $repo->update($data);
        return redirect()->route('repository')->with('success', 'Data updated successfully.');
    }
    public function delete_repository($id)
    {
        try {
            $hasil = repository::findOrFail($id);
            $hasil->delete();
            return redirect()->route('repository')->with('success', 'Data has been deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete data.');
        }
    }
    public function licence_report(){
        $licenceReport = DB::table('licence_report')->get();
        return view("Front.legal-compliance.licence-report.licence-report",compact('licenceReport'));
    }

    public function add_licence_report()
    {
        return view('front.legal-compliance.licence-report.add-licence');
    }

    public function post_licence_report(Request $request) {
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
            'progress' => 'nullable|string|max:255',
            'file' => 'nullable|file|mimes:pdf|max:10240',
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
        'keterangan' => 'nullable|string|max:255',
        'progress' => 'nullable|string|max:255',
        'file' => 'nullable|file|mimes:pdf|max:10240',
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

    public function approve(Request $request)
    {
        $licenceReport = licence_report::find($request->input('licence_id'));

        if ($licenceReport) {
            // Update the approve field to 1
            $licenceReport->approve = 1;
            $licenceReport->save();
        }


        $data = $request->only([
            'licence_id', 'comment'
        ]);
        $insert = Comment::create($data);


        return redirect()->back()->with('success', 'Licence updated successfully.');
    }


}
