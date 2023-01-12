<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facility;
use App\Models\Metodology;

class FsambutanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $metodology = Metodology::all();
        $facilities = Facility::latest()->take(3)->get();
        
        return view('front.pages.sambutan',['metodology' => $metodology], compact('facilities'));
    }
    public function sejarah()
    {
        return view('front.pages.sejarah');
    }
}
