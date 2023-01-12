<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Logo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class LogoController extends Controller
{
    public function index()
  {
    $id = 1;
    $settinglogo = Logo::find($id);

    return view('admin.logo.index', [
      'folder' => 'pengaturanwebsite',
      'menu' => 'logo',
      'settinglogo' => $settinglogo
    ]);
  }

  public function update(Request $request, $id)
  {
    //dd($request->all());
    $id = 1;
    $settinglogo = Logo::find($id);
    $settinglogo->update($request->all());

    if($request->hasFile('upload_utama')){
      $request->file('upload_utama')->move('public/assets/logo/', $request->file('upload_utama')->getClientOriginalName());
      $settinglogo->logo = $request->file('upload_utama')->getClientOriginalName();
      $settinglogo->save();
    }

    if($request->hasFile('upload_utama2')){
      $request->file('upload_utama2')->move('public/assets/logo/', $request->file('upload_utama2')->getClientOriginalName());
      $settinglogo->logo2 = $request->file('upload_utama2')->getClientOriginalName();
      $settinglogo->save();
    }

    if($request->hasFile('upload_icon')){
      $request->file('upload_icon')->move('public/assets/favicon/', $request->file('upload_icon')->getClientOriginalName());
      $settinglogo->favicon = $request->file('upload_icon')->getClientOriginalName();
      $settinglogo->save();
    }

    return redirect()->route('admin.logo.index')->with('sukses', 'Data berhasil diupdate');
  }

  public function hapuslogo()
	{
    DB::table('logo')->where('id', 1)->update([
      'logo' => ''
    ]);
    return redirect()->route('admin.logo.index')->with('sukses', 'Logo berhasil dihapus');
	}

  // function hapuslogo2()
	// {
  //   DB::table('logo')->where('id', 1)->update([
  //     'logo2' => ''
  //   ]);
  //   return redirect('/logo')->with('sukses', 'Logo berhasil dihapus');
	// }

  function hapusfavicon()
	{
    DB::table('logo')->where('id', 1)->update([
      'favicon' => ''
    ]);
    return redirect()->route('admin.logo.index')->with('sukses', 'Favicon berhasil dihapus');
	}
}
