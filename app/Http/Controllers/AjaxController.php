<?php

namespace App\Http\Controllers;

use App\Models\DataZis;
use App\Models\KabarModel;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getDataZisCategory(Request $request){
        $id = $request->get('id');
        $output = '';
        $no = 1;
        if($id != NULL){
            $data = DataZis::where('kategori', $id)->get();
        }else{
            $data = DataZis::all();
        }
        foreach($data as $b){
            $output .= '
            <tr>
                <th scope="row">'.$no++.'</th>
                <td>'.$b->category->display.'</td>
                <td>'.$b->price.'</td>
                <td>
                    '.$b->created_at.'
                </td>
                <td>

                    <a href="'. url('admin/data-zis/edit/'.$b->id) .'"
                        class="btn btn-transparent text-center text-dark">
                        <i class="fas fa-edit fa-2x"></i>
                    </a>
                    <a  href="'. url('admin/data-zis/delete/'.$b->id) .'"
                        class="btn btn-transparent text-center text-dark" >
                        <i class="fas fa-trash-alt fa-2x"></i>
                    </a>
                </td>
            </tr>
            ';
        }

        return $output;
    }

    public function slideCarrousel(Request $request){
        $id = $request->get('data');
        $test = $request->get('array');
        $move = $request->get('move');
        if($move == 'next'){
            if($id == max(array_column($test, 'kategori'))){
                $to = min(array_column($test, 'kategori'));
            }else{
                $current_index = array_search($id, array_column($test, 'kategori'));
                $to = $test[$current_index+1]['kategori'];
            }
        }else{
            if($id == min(array_column($test, 'kategori'))){
                $to = max(array_column($test, 'kategori'));
            }else{
                $current_index = array_search($id, array_column($test, 'kategori'));
                $to = $test[$current_index-1]['kategori'];
            }
        }
        $output = '';
        $data = KabarModel::where('kategori', $to)->orderBy('created_at')->take(3)->get();
        if($data->count()>0){
            $output .= '
            <div class="carousel-item active">
            <div class="row" style="margin-left: 9%; margin-right: 9%;">
            ';
                foreach($data as $k){
                    $output .= '
                    <div class="col-md-4 col-sm-12 col-lg-4 mt-3">
                        <div class="card"
                            style="border-radius: 15px; width: 100%; display: flex; flex-flow: column; height: 100%; flex: 1 1 auto;">
                            <img src="'. asset($k->gambar) .'" class="card-img-top"
                                alt=""
                                style="background-color: #ECE8E8; border-top-left-radius: 15px; border-top-right-radius: 15px; height: 250px;">
                            <div class="card-body"
                                style="background-color: #ECE8E8; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; max-height: 170px;">
                                <a href="'. url('kabar-detail/' . $k->id) .'"
                                    style="color: #2E3192">
                                    <h5 class="font-highlight">'. $k->judul .'</h5>
                                </a>
                                <p class="card-text"
                                    style="background-color: #ECE8E8; text-align: left; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;">
                                    '. \Illuminate\Support\Str::words($k->deskripsi, 10, $end = '...') .'
                                </p>
                            </div>
                        </div>
                    </div>
                    ';
                }
            $output .= '
                </div>
                <button class="carousel-control-prev" type="button"
                    id="prev" data-bs-slide="prev" data-id="'.$id.'">
                    <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button"
                    id="next" data-bs-slide="next" data-id="'.$to.'">
                    <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
            ';
        }
        return $output;
    }
}
