<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Identity;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class IdentityController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        // $id = 1;
        // $identities = Identity::where('id',$id)->first();
        
        // return view('admin.identity.index', compact('identities'));

        // Mengambil semua data dari database
        $identities = Identity::all();

        // Mengirim data ke view dashboard admin
        return view('admin.identity.index', ['identities' => $identities]);
    }


    /**
     * edit
     *
     * @param  mixed $request
     * @param  mixed $idenitity
     * @return void
     */
    public function edit($id)
    {
        $id = 1;
        $identity = Identity::find($id);
        return view('admin.identity.index', compact('identity'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $identity
     * @return void
     */
    public function update(Request $request, Identity $identity) // <-- Request form post and $identity (from name params at url)
    {
        $this->validate($request, [
            // 'logo'             => 'required|image|mimes:png,jpg,jpeg',
            // 'favicon'          => 'required|image|mimes:png,jpg,jpeg',
            'name'             => 'required',
            'phone'            => 'required', // phone is not number, it's string value
            'email'            => 'email',
        ]); 

    // //hapus image lama
    // Storage::disk('local')->delete('public/identities/'.basename($identity->logo));
    // Storage::disk('local')->delete('public/identities/'.basename($identity->favicon));

    // //upload image baru
    // $logo = $request->file('logo');
    // $logo->storeAs('public/identities', $logo->hashName());

    // $favicon = $request->file('favicon');
    // $favicon->storeAs('public/identities', $favicon->hashName());

    //update dengan image baru
    $identity = identity::findOrFail($identity->id);
    $identity->update([
        // 'logo'                          => $logo->hashName(),
        // 'favicon'                       => $favicon->hashName(),
        'name'                          => $request->name,
        'description'                   => $request->description,
        'address'                       => $request->address,
        'gmap'                          => $request->gmap,
        'phone'                         => $request->phone,
        'email'                         => $request->email,
        'fb'                            => $request->fb,
        'ig'                            => $request->ig,
        'tt'                            => $request->tt,
        'yt'                            => $request->yt,
    ]);

        if($identity){
            //redirect dengan pesan sukses
            return redirect()->route('admin.identity.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.identity.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
}
