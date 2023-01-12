<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Unggulan;

class UnggulanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unggulans = Unggulan::latest()->when(request()->q, function($unggulans) {
            $unggulans = $unggulans->where('title', 'like', '%'. request()->q . '%');
        })->paginate(10);

        return view('admin.unggulan.index', compact('unggulans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.unggulan.create');
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
            'image'             => 'required|image|mimes:png,jpg,jpeg',
            'title'             => 'required',
            'description'       => 'required',
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/unggulans', $image->hashName());

        $unggulan = Unggulan::create([
            'title'             => $request->title,
            'slug'              => Str::slug($request->title, '-'),
            'description'       => $request->description,
            'link'              => $request->link,
            'image'             => $image->hashName(),
        ]);

        if($unggulan){
            //redirect dengan pesan sukses
            return redirect()->route('admin.unggulan.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.unggulan.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Unggulan $unggulan)
    {
        return view('admin.unggulan.edit', compact('unggulan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, unggulan $unggulan)
    {
        $this->validate($request, [
            'title'             => 'required',
            'description'       => 'required',
        ]); 

        //check jika image kosong
        if($request->file('image') == '') {
            
            //update data tanpa image
            $unggulan = unggulan::findOrFail($unggulan->id);
            $unggulan->update([
                'title'             => $request->title,
                'slug'              => Str::slug($request->title, '-'),
                'description'       => $request->description,
                'link'              => $request->link,
            ]);

        } else {

            //hapus image lama
            Storage::disk('local')->delete('public/unggulans/'.basename($unggulan->image));

            //upload image baru
            $image = $request->file('image');
            $image->storeAs('public/unggulans', $image->hashName());

            //update dengan image baru
            $unggulan = unggulan::findOrFail($unggulan->id);
            $unggulan->update([
                'title'             => $request->title,
                'slug'              => Str::slug($request->title, '-'),
                'description'       => $request->description,
                'link'              => $request->link,
                'image'             => $image->hashName(),
            ]);
        }

        if($unggulan){
            //redirect dengan pesan sukses
            return redirect()->route('admin.unggulan.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.unggulan.index')->with(['error' => 'Data Gagal Diupdate!']);
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
        $unggulan = Unggulan::findOrFail($id);
        Storage::disk('local')->delete('public/unggulans/'.basename($unggulan->image));
        $unggulan->delete();

        if($unggulan){
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
