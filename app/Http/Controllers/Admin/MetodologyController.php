<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Metodology;
use Illuminate\Support\Str;

class MetodologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $metodologies = metodology::latest()->when(request()->m, function($metodologies) {
            $metodologies = $metodologies->where('name', 'like', '%'. request()->m . '%');
        })->paginate(10);

        return view('admin.metodology.index', compact('metodologies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.metodology.create');
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
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2000',
            'title'  => 'required',
        ]); 
 
        //upload image
        $image = $request->file('image');
        $image->storeAs('public/metodologies', $image->hashName());
 
        //save to DB
        $metodology = metodology::create([
            'image'             => $image->hashName(),
            'title'              => $request->title,
            'slug'              => Str::slug($request->name, '-'),
            'description'           => $request->description,
        ]);
 
        if($metodology){
             //redirect dengan pesan sukses
             return redirect()->route('admin.metodology.index')->with(['success' => 'Data Berhasil Disimpan!']);
         }else{
             //redirect dengan pesan error
             return redirect()->route('admin.metodology.index')->with(['error' => 'Data Gagal Disimpan!']);
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Metodology  $metodology
     * @return \Illuminate\Http\Response
     */
    public function show(Metodology $metodology)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Metodology  $metodology
     * @return \Illuminate\Http\Response
     */
    public function edit(Metodology $metodology)
    {
        return view('admin.metodology.edit', compact('metodology'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Metodology  $metodology
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Metodology $metodology)
    {
        $this->validate($request, [
            'title'         => 'required',
        ]); 

        //check jika image kosong
        if($request->file('image') == '') {
            
            //update data tanpa image
            $metodology = metodology::findOrFail($metodology->id);
            $metodology->update([
                'title'                 => $request->title,
                'slug'                  => Str::slug($request->name, '-'),
                'description'           => $request->description,
            ]);

        } else {

            //hapus image lama
            Storage::disk('local')->delete('public/metodologies/'.basename($metodology->image));

            //upload image baru
            $image = $request->file('image');
            $image->storeAs('public/metodologies', $image->hashName());

            //update dengan image baru
            $metodology = metodology::findOrFail($metodology->id);
            $metodology->update([
                'image'             => $image->hashName(),
                'title'              => $request->title,
                'slug'              => Str::slug($request->name, '-'),
                'description'           => $request->description,
            ]);
        }

        if($metodology){
            //redirect dengan pesan sukses
            return redirect()->route('admin.metodology.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.metodology.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $metodology = metodology::findOrFail($id);
        Storage::disk('local')->delete('public/metodologies/'.basename($metodology->image));
        $metodology->delete();

        if($metodology){
            return response()->json([
                'status' => 'success'
            ]);
        }else{
            return response()->json([
                'status' => 'error'
            ]);
        }
    }
}
