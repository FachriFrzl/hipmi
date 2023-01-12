<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Visi;
use App\Models\Misi;
use App\Models\Motto;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::with('Visi','Misi','Motto')->get();
        return view('admin.about.index', ['about' => $about]);
    }
    public function tentangkami()
    {
        $about = About::with('Visi','Misi','Motto')->get();
        return view('front.pages.tentang-kami', ['about' => $about]);
    }
    public function create()
    {

        return view('admin.about.create');
    }
}
