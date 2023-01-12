<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

class DashboardController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {

        //category
        $categories = Category::count();

        //post
        $posts = Post::count();


        return view('admin.dashboard.index', compact('categories', 'posts'));
    }
}