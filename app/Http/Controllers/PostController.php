<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Traits\Random;

class PostController extends Controller
{

    public function __construct()
    {
        //
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::all()->reverse();

        return view('dashboard')->with(['posts' => $posts]);
    }

     public function blog()
    {
        //
        $posts = Post::all()->reverse();

        return view('blog')->with(['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //return $request->all();
        $title = $request->title;
        $body = $request->body;

        $post = Post::create([
            'title'  => $title,
            'body'  => $body
        ]);

        if($post){
           
            if($request->has('post_img')){

                $post_photo = $request->file('post_img');

                $file_original_extension = $post_photo->getClientOriginalExtension();
                $file_name = 'post-image-' . Random::makeRandom() .'.' . $file_original_extension;

                $request->post_img->storeAs(config('lanre.post_pic_directory'), $file_name, 'public');

                $file_path = '/storage' . config('lanre.post_pic_directory') . $file_name;
                //public_path('storage' . config('entranx.post_pic_directory') . $file_name);

                //Set the user's photo field
                $post->post_img = asset($file_path);

                if($post->save()){
                    session()->flash('success_submit', 'Post created successfully...');
                    return back();
                    //return response()->json(['status' => 'success', 'message' => ''], 200);
                }else{
                    session()->flash('success_submit', 'Post created successfully.<br> Please try adding a photo...');
                    return back();
                    // return response()->json(['status' => 'success', 'message' => 'Post created successfully. \n Please try adding a photo...'], 201);
                }
            }else{
                session()->flash('success_submit', 'Post created successfully...');
                    return back();
                // return response()->json(['status' => 'success', 'message' => 'Post created successfully. \n Please try adding a photo...'], 200);
            }

        }else{
            session()->flash('failure_submit', 'Post could not be created.');
                    return back();
            //return response()->json(['status' => 'failure', 'message' => 'Post could not be created.'], 203);
        }        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
