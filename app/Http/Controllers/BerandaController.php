<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Artikel;
use App\Models\CategoryData;
use App\Models\DataZis;
use App\Models\Inspirasi;
use App\Models\KabarModel;
use App\Models\KabarZakat;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BerandaController extends Controller
{
    protected $category;
    public function __construct()
    {
        $this->category = CategoryData::where('jenis', 'kabar')->get();
    }

    public function index()
    {
        $category = $this->category;
        $min = CategoryData::where('jenis', 'kabar')->min('id');
        $data = KabarModel::with('category')->where('kategori', $min)->orderBy('created_at', 'DESC')->take(3)->get();
        $highlight = KabarModel::with('category')->latest('created_at')->take(3)->get();
        $test = KabarModel::select('kategori')->distinct('kategori')->orderBy('kategori', 'ASC')->get();
        $galeri = Galeri::latest()->take(4)->get();
        $penyalur = DB::table('penyaluran')->first();
        $fitrah = DataZis::where('kategori', 1)->sum('price');
        $infaq = DataZis::where('kategori', 2)->sum('price');
        $sedekah = DataZis::where('kategori', 3)->sum('price');
        $fidyah = DataZis::where('kategori', 4)->sum('price');
        return view('index',compact('data','highlight','galeri','penyalur','fitrah','infaq','sedekah', 'fidyah', 'min', 'test', 'category'));
    }

    public function legalitas()
    {
        $category = $this->category;
        return view('tentang-kami.legalitas', compact('category'));
    }

    public function visiMisi()
    {
        $category = $this->category;
        return view('tentang-kami.visi-misi', compact('category'));
    }

    public function strukturOrganisasi()
    {
        $category = $this->category;
        return view('tentang-kami.struktur-organisasi', compact('category'));
    }

    public function organisasi()
    {
        $category = $this->category;
        return view('tentang-kami.organisasi', compact('category'));
    }

    public function sejarahOrganisasi()
    {
        $category = $this->category;
        return view('tentang-kami.sejarah-organisasi', compact('category'));
    }

    public function zakat()
    {
        $category = $this->category;
        return view('bayar.zakat', compact('category'));
    }

    public function inspirasi()
    {
        $category = $this->category;
        return view('kabar.inspirasi', compact('category'));
    }

    public function article()
    {
        $category = $this->category;
        return view('kabar.article', compact('category'));
    }

    public function pendistribusian()
    {
        $category = $this->category;
        return view('kabar.pendistribusian', compact('category'));
    }

    public function videoKegiatan()
    {
        $category = $this->category;
        return view('kabar.video-kegiatan', compact('category'));
    }

    public function hubungiKami()
    {
        $category = $this->category;
        return view('hubungi-kami', compact('category'));
    }

    public function notFound()
    {
        $category = $this->category;
        return view('404', compact('category'));
    }

    public function rekeningZakat()
    {
        $category = $this->category;
        return view('layanan.rekening-zakat', compact('category'));
    }

    public function rekeningInfak()
    {
        $category = $this->category;
        return view('layanan.rekening-infak', compact('category'));
    }

    public function rekeningSedekah()
    {
        $category = $this->category;
        return view('layanan.rekening-sedekah', compact('category'));
    }

    public function rekeningFidyah()
    {
        $category = $this->category;
        return view('layanan.rekening-fidyah', compact('category'));
    }

    public function rekeningPembayaran()
    {
        $category = $this->category;
        return view('layanan.layanan-pembayaran', compact('category'));
    }

    public function programKKN()
    {
        $category = $this->category;
        return view('program.program-kkn', compact('$this->category'));
    }

    public function programBeasiswa()
    {
        $category = $this->category;
        return view('program.program-beasiswa', compact('category'));
    }

    public function programDistribusi()
    {
        $category = $this->category;
        return view('program.program-distribusi', compact('category'));
    }

    public function programPemberdayaan()
    {
        $category = $this->category;
        return view('program.program-permberdayaan', compact('category'));
    }

    public function programSantunan()
    {
        $category = $this->category;
        return view('program.program-santunan', compact('category'));
    }

    public function programSubsidi()
    {
        $category = $this->category;
        return view('program.program-subsidi', compact('category'));
    }

    // public function indexFitrah()
    // {
    //     $kabar = KabarZakat::latest()->take(3)->get();
    //     $artikel = Artikel::latest()->take(3)->get();
    //     $inspirasi = Inspirasi::latest()->take(3)->get();
    //     $distKabar = KabarZakat::latest()->first();
    //     $distArtikel = Artikel::latest()->first();
    //     $distInspirasi = Inspirasi::latest()->first();
    //     $galeri = Galeri::latest()->take(4)->get();
    //     return view('index-fitrah',compact('kabar','artikel','inspirasi','distArtikel','distKabar','distInspirasi','galeri'));
    // }

    // public function indexMaal()
    // {
    //     $kabar = KabarZakat::latest()->take(3)->get();
    //     $artikel = Artikel::latest()->take(3)->get();
    //     $inspirasi = Inspirasi::latest()->take(3)->get();
    //     $distKabar = KabarZakat::latest()->first();
    //     $distArtikel = Artikel::latest()->first();
    //     $distInspirasi = Inspirasi::latest()->first();
    //     $galeri = Galeri::latest()->take(4)->get();
    //     return view('index-maal',compact('kabar','artikel','inspirasi','distArtikel','distKabar','distInspirasi','galeri'));
    // }

    // public function indexFidyah()
    // {
    //     $kabar = KabarZakat::latest()->take(3)->get();
    //     $artikel = Artikel::latest()->take(3)->get();
    //     $inspirasi = Inspirasi::latest()->take(3)->get();
    //     $distKabar = KabarZakat::latest()->first();
    //     $distArtikel = Artikel::latest()->first();
    //     $distInspirasi = Inspirasi::latest()->first();
    //     $galeri = Galeri::latest()->take(4)->get();
    //     return view('index-fidyah',compact('kabar','artikel','inspirasi','distArtikel','distKabar','distInspirasi','galeri'));
    // }

    // public function indexQurban()
    // {
    //     $kabar = KabarZakat::latest()->take(3)->get();
    //     $artikel = Artikel::latest()->take(3)->get();
    //     $inspirasi = Inspirasi::latest()->take(3)->get();
    //     $distKabar = KabarZakat::latest()->first();
    //     $distArtikel = Artikel::latest()->first();
    //     $distInspirasi = Inspirasi::latest()->first();
    //     $galeri = Galeri::latest()->take(4)->get();
    //     return view('index-qurban',compact('kabar','artikel','inspirasi','distArtikel','distKabar','distInspirasi','galeri'));
    // }

    // public function indexInfaq()
    // {
    //     $kabar = KabarZakat::latest()->take(3)->get();
    //     $artikel = Artikel::latest()->take(3)->get();
    //     $inspirasi = Inspirasi::latest()->take(3)->get();
    //     $distKabar = KabarZakat::latest()->first();
    //     $distArtikel = Artikel::latest()->first();
    //     $distInspirasi = Inspirasi::latest()->first();
    //     $galeri = Galeri::latest()->take(4)->get();
    //     return view('index-infaq',compact('kabar','artikel','inspirasi','distArtikel','distKabar','distInspirasi','galeri'));
    // }

    public function editDanaTersalurkan(){
        $category = $this->category;
        $data = DB::table('penyaluran')->latest('updated_at')->first();
        return view('index.data-penyaluran',compact('data', 'category'));
    }

    public function storeDanaTersalurkan(Request $request){
        $validated = $request->validate(
            [
                'penerima' => 'required|min:0|numeric',
                'penghimpun' => 'required|min:0|numeric',
                'dana_tersalurkan' => 'required|min:0|numeric',
                'donatur' => 'required|min:0|numeric',
            ]
        );

        if(!$validated){
            return redirect()->back()->withErrors($validated)->withInput();
        }

        DB::table('penyaluran')->updateOrInsert(
            [
                'penerima' => $request->penerima,
                'penghimpun' => $request->penghimpun,
                'dana_tersalurkan' => $request->dana_tersalurkan,
                'donatur' => $request->donatur,
                'updated_at' => Carbon::now(),
            ]
        );

        return redirect()->back()->with('success', 'Penyaluran Sukses Di Update');
    }

    public function indexLaporanZis(){
        $data = DataZis::all();
        $category = CategoryData::all();
        return view('index.laporan-zis',compact('data', 'category'));
    }

    public function editLaporanZis($id){
        $data = DataZis::find($id);
        $category = CategoryData::all();
        return view('index.edit-laporan-zis',compact('data', 'category'));
    }

    public function updateLaporanZis($id, Request $request){
        $validated = $request->validate(
            [
                'kategori' => 'required|numeric',
                'price' => 'required|min:0|numeric',
            ]
        );

        if(!$validated){
            return redirect()->back()->withErrors($validated)->withInput();
        }

        DataZis::find($id)->update([
            'kategori' => $request->kategori,
            'price' => $request->price,
        ]);

        return redirect()->back()->with('success', 'Laporan Zis Sukses Di Update');
    }

    public function deleteLaporanZis($id){
        DataZis::find($id)->delete();
        return redirect()->back()->with('success', 'Laporan Zis Sukses Di Hapus');
    }
}
