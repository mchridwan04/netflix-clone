<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

// Add library for image
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Function Search
        $data['title'] = 'Posts';
        $data['q'] = $request->query('q');
        $data['posts'] = Post::where('title', 'like', '%' . $data['q'] . '%')->get();
        return view('post.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Fuction Crete ()
        $data['title'] = 'Add Post';
        return view('post.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Function Validation Create  -> Resize image
        
        $request->validate([
            'title' => 'required',
            'image' => 'required',
        ]);
        // If Image Size Small name file image original
        $image = $request->file('image');
        $file_name = rand(1000, 9999) . $image->getClientOriginalName();

        // If image size big name file add small_ in front
        $img = Image::make($image->path());
        $img->resize('180', '120')
            ->save(public_path('images/post') . '/small_' . $file_name);

        //  Add image in patch Public/images/post/<name_file>
        $image->move('images/post', $file_name);

        $post = new Post();
        $post->title = $request->title;
        $post->image = $file_name;
        $post->description = $request->description;
        $post->save();
        return redirect()->route('post.index')->with('success', 'Post added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // Function Show
        $data['title'] = $post->title;
        $data['post'] = $post;
        return view('post.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        // Function Edit
        $data['title'] = 'Edit Post';
        $data['post'] = $post;
        return view('post.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        // Function Validation Create  -> Resize image
        $request->validate([
            'title' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $post->delete_image();
            $image = $request->file('image');
            $file_name = rand(1000, 9999) . $image->getClientOriginalName();
            $img = Image::make($image->path());
            $img->resize('180', '120')
                ->save(public_path('images/post') . '/small_' . $file_name);
            $image->move('images/post', $file_name);
            $post->image = $file_name;
        }
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect()->route('post.index')->with('success', 'Post edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        // Function Delete
        $post->delete_image();
        $post->delete();
        return redirect()->route('post.index')->with('success', 'Post deleted successfully');
    }
}
