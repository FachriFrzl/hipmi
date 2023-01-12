<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestasi;
use App\Models\Categoriprestasi;

class FprestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestasis = Prestasi::Latest()->get();
        $prestasiimage = Prestasi::Latest()->take(10)->get();
        
        return view('front.fprestasi.index', compact('prestasis','prestasiimage'));
    }
}
