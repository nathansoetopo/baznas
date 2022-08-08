<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Galeri;
use App\Models\KabarModel;
use App\Models\CategoryData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class KabarController extends Controller
{
    public function __construct()
    {
        $this->category = CategoryData::where('jenis', 'kabar')->get();
    }

    public function Galeri()
    {
        $category = $this->category;
        $galeri = Galeri::latest()->paginate(6);
        return view('galeri', compact('galeri', 'category'));
    }

    public function detailKabar($id){
        $data = KabarModel::find($id);
        $category = $this->category;
        return view('kabar.article-detail', compact('data', 'category'));
    }

    public function listKabar($id){
        $category = $this->category;
        $data = KabarModel::where('kategori', $id)->get();
        if(Auth::user()->hasRole('admin')){
            return view('admin.kabarzakat.index', compact('data', 'category', 'id'));
        }else{
            return view('kabar.article', compact('data', 'category', 'id'));
        }
    }

    public function viewAddKabar($id){
        $category = $this->category;
        $detail = CategoryData::where('id', $id)->first();
        return view('admin.kabar.add', compact('id', 'detail', 'category'));
    }

    public function storeKabar($id, Request $request){
        $detail = CategoryData::where('id', $id)->first();
        $validated = $request->validate(
            [
                'judul' => 'required|unique:kabar',
                'deskripsi' => 'required',
                'gambar' => 'required|mimes:jpg,jpeg,png',
            ]

        );

        if(!$validated){
            return redirect()->back()->withErrors($validated)->withInput();
        }

        $gambar = $request->file('gambar');
        $name_gen = hexdec(uniqid()) . '.' . $gambar->getClientOriginalExtension();
        // Image::make($gambar)->resize(500, 300)->save('images/wilayah/' . $name_gen);

        $gambar->move(public_path('uploads/'.$detail->name.''), $name_gen);
        $last_img = 'uploads/'.$detail->name.'/' . $name_gen;

        KabarModel::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $last_img,
            'penulis' => Auth::user()->id,
            'kategori' => $id,
            'created_at' => Carbon::now()
        ]);

        return redirect('admin/kabar/'.$id.'/category')->with('success', ''.$detail->display.', Sukses Ditambahkan');
    }

    public function viewEditKabar($id, $cat){
        $data = KabarModel::find($id);
        $category = $this->category;
        $detail = CategoryData::where('id', $cat)->first();
        return view('admin.kabar.edit', compact('data', 'detail', 'category'));
    }

    public function storeEditKabar($id, $cat, Request $request){
        $berita = KabarModel::find($id);
        $detail = CategoryData::find($cat);

        $old_image = $request->old_image;
        $berita_image = $request->file('gambar');

        if ($berita_image) {

            $name_gen = hexdec(uniqid()) . '.' . $berita_image->getClientOriginalExtension();
            $berita_image->move(public_path('uploads/'.$detail->name.''), $name_gen);
            $last_img = 'uploads/'.$detail->name.'/' . $name_gen;
            if (file_exists($old_image)) {
                @unlink($old_image);
            }
            $berita->update([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'gambar' => $last_img,
            ]);
            return redirect()->back()->with('success', 'Berita Updated Successfully');
        } else {
            $berita->update([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
            ]);
            return redirect()->back()->with('success', 'Berita Updated Successfully');
        }
    }

    public function statusKabar($id){
        $data = KabarModel::find($id);
        if($data->status == 'ACTIVE'){
            $data->update([
                'status' => 'INACTIVE',
            ]);
        }else{
            $data->update([
                'status' => 'ACTIVE',
            ]);
        }
        return redirect()->back()->with('success', 'Berita Status Updated');
    }

    public function deleteKabar($id, $cat){
        $data = KabarModel::where('status', 'INACTIVE')->where('id', $id)->first();
        $all = KabarModel::where('kategori', $cat)->get();
        if($all->count() < 4 || empty($data)){
            return redirect()->back()->with('success', 'Data Tidak Ditemukan');
        }else{
            if(file_exists($data->gambar)){
                unlink($data->gambar);
            }
            KabarModel::find($id)->delete();
            return redirect()->back()->with('success', 'Kabar Delete Successfully');
        }
    }
}
