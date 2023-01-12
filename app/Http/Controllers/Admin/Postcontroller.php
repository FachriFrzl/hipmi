<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;
use App\Models\Category;

class Postcontroller extends Controller
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

        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::latest()->get();
        return view('admin.post.create', compact('categories'));
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
            'category_id'       => 'required',
            'description'       => 'required'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        $post = Post::create([
            'title'             => $request->title,
            'slug'              => Str::slug($request->title, '-'),
            'category_id'       => $request->category_id,
            'description'       => $request->description,
            'content'           => $request->content,
            'user_id'           => auth()->user()->id,
            'image'             => $image->hashName()
        ]);

        if($post){
            //redirect dengan pesan sukses
            return redirect()->route('admin.post.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.post.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.post.show', compact('post'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function edit(Post $post)
    {
        $categories = Category::latest()->get();
        return view('admin.post.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->validate($request, [
            'title'             => 'required',
            'category_id'       => 'required',
            'description'       => 'required'
        ]); 

        //check jika image kosong
        if($request->file('image') == '') {
            
            //update data tanpa image
            $post = Post::findOrFail($post->id);
            $post->update([
                'title'             => $request->title,
                'slug'              => Str::slug($request->title, '-'),
                'category_id'       => $request->category_id,
                'description'       => $request->description,
                'content'           => $request->content,
                'user_id'           => auth()->user()->id,
            ]);

        } else {

            //hapus image lama
            Storage::disk('local')->delete('public/posts/'.basename($post->image));

            //upload image baru
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            //update dengan image baru
            $post = Post::findOrFail($post->id);
            $post->update([
                'title'             => $request->title,
                'slug'              => Str::slug($request->title, '-'),
                'category_id'       => $request->category_id,
                'description'       => $request->description,
                'content'           => $request->content,
                'user_id'           => auth()->user()->id,
                'image'             => $image->hashName()
            ]);
        }

        if($post){
            //redirect dengan pesan sukses
            return redirect()->route('admin.post.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.post.index')->with(['error' => 'Data Gagal Diupdate!']);
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
        $post = Post::findOrFail($id);
        Storage::disk('local')->delete('public/posts/'.basename($post->image));
        $post->delete();

        if($post){
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
