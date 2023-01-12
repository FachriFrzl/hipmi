<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Agenda;
use Carbon\Carbon;


class FpostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->when(request()->q, function($posts) {
            $posts = $posts->where('title', 'like', '%'. request()->q . '%');
        })->paginate(10);
        $agendas = Agenda::oldest()->where('end_date', '>', Carbon::today())->take(4)->get();
        
        return view('front.fpost.index', compact('posts','agendas'));
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $categories = Category::latest()->get();
        $posts = Post::latest()->take(4)->get();
        $agendas = Agenda::oldest()->where('end_date', '>', Carbon::today())->take(4)->get();
        return view('front.fpost.show', compact('post','categories','posts','agendas'));
    }

}
