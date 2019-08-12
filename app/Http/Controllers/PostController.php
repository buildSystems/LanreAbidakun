<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Traits\Random;
use Carbon\Carbon;

class PostController extends Controller
{

    public function __construct()
    {
        //
        $this->middleware('auth')->except(['blog', 'show']);
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

        // foreach($posts as $post){
        //     $post->created_at = '123';//Carbon::createFromFormat('Y-m-d H:i:s', $post->created_at)->toFormattedDateString();
        // }

        return view('dashboard')->with(['posts' => $posts]);
    }

     public function blog()
    {
        //
        $posts = Post::all()->reverse();

        // foreach($posts as $post){
        //     $post->created_at = Carbon::createFromTimestamp($post->created_at, config('app.timezone'));
        // }

        // $posts = $posts->map(function($item, $key){
        //             return $item->created_at = '0000000';
        //         });

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
    public function show($id)
    {
        //
        $post = Post::find($id);

        return view('show-post')->with(['post' => $post ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Post::find($id);

        return view('dashboard')->with(['post' => $post ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //return $request->all();

        $title = $request->title;
        $body = $request->body;

        $post = Post::find($id);


        if($post){


            if($post->title != $title)
                $post->title = $title;

            if($post->body != $body)
                $post->body = $body;
           
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
                    session()->flash('success_submit', 'Post updated successfully...');
                    return back();
                    //return response()->json(['status' => 'success', 'message' => ''], 200);
                }
            }else{
                
                if($post->save()){
                    session()->flash('success_submit', 'Post updated successfully...');
                    return back();
                    //return response()->json(['status' => 'success', 'message' => ''], 200);
                }
            }

        }else{
            session()->flash('failure_submit', 'Post was not found.');
                    return back();
            //return response()->json(['status' => 'failure', 'message' => 'Post could not be created.'], 203);
        }        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Post::find($id);
        if($post){

            if($post->delete()){
                session()->flash('success_submit', 'Post was deleted successfully.');
                    return back();
                }else{
                    session()->flash('failure_submit', 'Post could not be deleted.');
                    return back();
                }

            
        }else{
            session()->flash('failure_submit', 'post could not be found.');
                    return back();
        }
    }
}
