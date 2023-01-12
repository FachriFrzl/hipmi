<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Post;
use Illuminate\Http\Request;
use Carbon\Carbon;


class FagendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agendas = Agenda::oldest()->where('end_date', '>', Carbon::today())->when(request()->q, function($agendas) {
            $agendas = $agendas->where('title', 'like', '%'. request()->q . '%');
        })->paginate(10);

        $agendaolds = Agenda::oldest()->where('end_date', '<', Carbon::today())->take(5)->get();
        $posts = Post::latest()->take(4)->get();
        
        return view('front.fagenda.index', compact('agendas','agendaolds','posts'));
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Agenda $agenda)
    {
        $agendas = Agenda::oldest()->where('end_date', '>', Carbon::today())->take(4)->get();
        $posts = Post::latest()->take(4)->get();
        return view('front.fagenda.show', compact('agenda','agendas','posts'));
    }
}
