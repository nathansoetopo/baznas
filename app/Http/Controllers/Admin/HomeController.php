<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryData;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $category = CategoryData::where('jenis', 'kabar')->get();
        return view('admin.admin', compact('category'));
    }
}
