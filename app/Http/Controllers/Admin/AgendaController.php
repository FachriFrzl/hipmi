<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Agenda;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agendas = Agenda::latest()->when(request()->q, function($agendas) {
            $agendas = $agendas->where('title', 'like', '%'. request()->q . '%');
        })->paginate(10);

        return view('admin.agenda.index', compact('agendas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.agenda.create');
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
            'start_date'        => 'required',
            'end_date'          => 'required',
            'start_time'        => 'required',
            'end_time'          => 'required',
            'content'           => 'required',
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/agendas', $image->hashName());

        $agenda = Agenda::create([
            'title'             => $request->title,
            'slug'              => Str::slug($request->title, '-'),
            'start_date'        => $request->start_date,
            'end_date'          => $request->end_date,
            'start_time'        => $request->start_time,
            'end_time'          => $request->end_time,
            'content'           => $request->content,
            'location'          => $request->location,
            'yt_link'           => $request->yt_link,
            'image'             => $image->hashName(),
            'user_id'           => auth()->user()->id,
        ]);

        if($agenda){
            //redirect dengan pesan sukses
            return redirect()->route('admin.agenda.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.agenda.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Agenda $agenda)
    {
        return view('admin.agenda.edit', compact('agenda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agenda $agenda)
    {
        $this->validate($request, [
            'start_date'        => 'required',
            'end_date'          => 'required',
            'start_time'        => 'required',
            'end_time'          => 'required',
            'content'           => 'required',
        ]); 

        //check jika image kosong
        if($request->file('image') == '') {
            
            //update data tanpa image
            $agenda = Agenda::findOrFail($agenda->id);
            $agenda->update([
                'title'             => $request->title,
                'slug'              => Str::slug($request->title, '-'),
                'start_date'        => $request->start_date,
                'end_date'          => $request->end_date,
                'start_time'        => $request->start_time,
                'end_time'          => $request->end_time,
                'content'           => $request->content,
                'location'          => $request->location,
                'yt_link'           => $request->yt_link,
                'user_id'           => auth()->user()->id,
            ]);

        } else {

            //hapus image lama
            Storage::disk('local')->delete('public/agendas/'.basename($agenda->image));

            //upload image baru
            $image = $request->file('image');
            $image->storeAs('public/agendas', $image->hashName());

            //update dengan image baru
            $agenda = Agenda::findOrFail($agenda->id);
            $agenda->update([
                'title'             => $request->title,
                'slug'              => Str::slug($request->title, '-'),
                'start_date'        => $request->start_date,
                'end_date'          => $request->end_date,
                'start_time'        => $request->start_time,
                'end_time'          => $request->end_time,
                'content'           => $request->content,
                'location'          => $request->location,
                'yt_link'           => $request->yt_link,
                'image'             => $image->hashName(),
                'user_id'           => auth()->user()->id
            ]);
        }

        if($agenda){
            //redirect dengan pesan sukses
            return redirect()->route('admin.agenda.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.agenda.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
    
    /**
     * destroy
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {
        $agenda = Agenda::findOrFail($id);
        Storage::disk('local')->delete('public/agendas/'.basename($agenda->image));
        $agenda->delete();

        if($agenda){
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
