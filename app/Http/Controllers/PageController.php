<?php

namespace App\Http\Controllers;
use App\Models\Ruang_media;
use App\Http\Controllers\Controller;
use App\Models\Hasil_kerja_perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class PageController extends Controller
{
    /**
     * Display all the static pages when authenticated
     *
     * @param string $page
     * @return \Illuminate\View\View
     */
    // public function index(string $page)
    // {
    //     if (view()->exists("pages.{$page}")) {
    //         return view("pages.{$page}");
    //     }

    //     return abort(404);
    // }

    public function index()
    {
        $ruang_media = DB::table('ruang_media')->get()->map(
        function ($item) {
        $description = $item->description;
        $words = explode(' ', $description);
        if (count($words) > 10) {
            $item->description = implode(' ', array_slice($words, 0, 10)) . '...';
        }
        return $item;
        });



    $hasil_kerja = DB::table('hasil_kerja_perusahaan')->get();

    $penghargaan =DB::table('penghargaan')->get();
    $enviro_facility= DB::table('environment_facility')->get();

    return view('Admin.Home.index', compact('ruang_media','hasil_kerja','penghargaan','enviro_facility'));
    }


    public function kerja_add()
    {
        return view('Admin.Home.hasil-add');
    }


    public function kerja_post(Request $request){

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $extension =$file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path ='img/upload/';
            $file->move($path,$filename);
        }
        $data = [
            'img' => $path.$filename,
            'title' => $request->input('title'),
            'subtitle' => $request->input('subtitle'),
            'description' => $request->input('description'),
        ];


        $insert = Hasil_kerja_perusahaan::create($data);

        return redirect()->route('home')->with('success', 'Content added successfully!');

    }

    public function kerja_edit($id)
    {
        $hasil = Hasil_kerja_perusahaan::find($id);
        return view('Admin.Home.hasil-edit', compact('hasil'));
    }

    public function kerja_edit_post(Request $request){
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $extension =$file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path ='img/upload/';
            $file->move($path,$filename);
        }
        $data = [
            'img' => $path.$filename,
            'title' => $request->input('title'),
            'subtitle' => $request->input('subtitle'),
            'description' => $request->input('description'),
        ];
        $insert = Hasil_kerja_perusahaan::find($request->id)->update($data);
        return redirect()->route('home')->with('success', 'Content update successfully!');

    }

    public function kerja_delete($id)
    {
        try {
            $hasil = Hasil_kerja_perusahaan::findOrFail($id);


            if ($hasil->img) {
                Storage::delete($hasil->img);
            }

            // Hapus record dari database
            $hasil->delete();

            return redirect()->route('home')->with('success', 'Data has been deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete data.');
        }
    }

 public function plb3()
    {
        return view("Admin.PLB3.index");
    }

    public function plb3_add(){
        return view("Admin.PLB3.add");
    }
    public function plb3_post(Request $request){

    }
    public function ppa()
    {
        return view("Admin.PPA.index");
    }
    public function legalCompliance()
    {
        return view("Admin.Legal-Compliance.index");
    }

  public function profile()
    {
        return view("pages.profile-static");
    }

    public function signin()
    {
        return view("pages.sign-in-static");
    }

    public function signup()
    {
        return view("pages.sign-up-static");
    }
}
