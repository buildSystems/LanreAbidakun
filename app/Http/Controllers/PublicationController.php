<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publication;
use App\Traits\Random;

class PublicationController extends Controller
{

    public function __construct()
    {
        //
        $this->middleware('auth')->except('publications');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $publications = Publication::all()->reverse();

        return view('dashboard')->with(['publications' => $publications]);
    }

     public function publications()
    {
        //
        $publications = Publication::all()->reverse();

        return view('publications')->with(['publications' => $publications]);
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
        $title = $request->title;
        $body = $request->body;

        $post = Publication::create([
            'title'  => $title,
            'body'  => $body
        ]);

        if($publication){
           
            if($request->has('publication_photo')){

                $publication_photo = $request->file('publication_photo');

                $file_original_extension = $post_photo->getClientOriginalExtension();
                $file_name = 'publication-image-' . Random::makeRandom() .'.' . $file_original_extension;

                $request->publication_photo->storeAs(config('lanre.publication_pic_directory'), $file_name, 'public');

                $file_path = '/storage' . config('lanre.publication_pic_directory') . $file_name;
                //public_path('storage' . config('entranx.post_pic_directory') . $file_name);

                //Set the user's photo field
                $publication->publication_img = asset($file_path);

                if($post->save()){
                    session()->flash('success_submit', 'Publication created successfully...');
                    return back();
                    //return response()->json(['status' => 'success', 'message' => ''], 200);
                }else{
                    session()->flash('success_submit', 'Publication created successfully.<br> Please try adding a photo...');
                    return back();
                    // return response()->json(['status' => 'success', 'message' => 'Post created successfully. \n Please try adding a photo...'], 201);
                }
            }else{
                session()->flash('success_submit', 'Publication created successfully...');
                    return back();
                // return response()->json(['status' => 'success', 'message' => 'Post created successfully. \n Please try adding a photo...'], 200);
            }

        }else{
            session()->flash('failure_submit', 'Publication could not be created.');
                    return back();
            //return response()->json(['status' => 'failure', 'message' => 'Post could not be created.'], 203);
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
