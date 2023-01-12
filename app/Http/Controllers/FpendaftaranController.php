<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unggulan;
use App\Models\Testimony;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller\Admin;
use Carbon\Carbon;


class FPendaftaranController extends Controller
{
    public function index(){
        $unggulans = Unggulan::oldest()->take(8)->get();;
        $testimonies = Testimony::latest()->take(4)->get();;
        
        return view('front.pages.pendaftaran', compact('unggulans','testimonies'));
    }
}