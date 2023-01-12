<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Formdaftar;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FformdaftarController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.formdaftar.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.formdaftar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image'                     => 'required|image|mimes:jpeg,jpg,png|max:2000',
            'grade_need'                => 'required',
            'name'                      => 'required',
            'id_number'                 => 'required',
            'birth_place'               => 'required',
            'birth_date'                => 'required',
            'address'                   => 'required',
            'school_before'             => 'required',
            'school_class_before'       => 'required',
            'parent_name'               => 'required',
            'parent_phone'              => 'required',
        ]); 
 
        //upload image
        $image = $request->file('image');
        $image->storeAs('public/formdaftars', $image->hashName());
 
        //save to DB
        $formdaftar = Formdaftar::create([
            'image'                     => $image->hashName(),
            'grade_need'                => $request->grade_need,
            'jalur_masuk'                => $request->jalur_masuk,
            'name'                      => $request->name,
            'id_number'                 => $request->id_number,
            'birth_place'               => $request->birth_place,
            'birth_date'                => $request->birth_date,
            'phone'                     => $request->phone,
            'address'                   => $request->address,
            'school_before'             => $request->school_before,
            'school_class_before'       => $request->school_class_before,
            'parent_name'               => $request->parent_name,
            'parent_phone'              => $request->parent_phone,
            'parent_address'            => $request->parent_address,
            'achievement'               => $request->achievement,
            'quran_memorized'           => $request->quran_memorized,
        ]);
 
        if($formdaftar){
             //redirect dengan pesan sukses
             return redirect()->route('front.pages.prosedur')->with(['success' => 'Data Berhasil Disimpan!']);
         }else{
             //redirect dengan pesan error
             return redirect()->route('front.pages.prosedur')->with(['error' => 'Data Gagal Disimpan!']);
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Formdaftar $formdaftar)
    {
        return view('front.fpost.show');
    }
}
