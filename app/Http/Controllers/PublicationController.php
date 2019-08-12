<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publication;
use App\Traits\Random;
use Illuminate\Support\Facades\Storage;

class PublicationController extends Controller
{

    public function __construct()
    {
        //
        $this->middleware('auth')->except(['publications', 'show']);
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
        //return $request->all();

        $title = $request->title;
        $body = $request->body;

        $publication = Publication::create([
            'title'  => $title,
            'body'  => $body
        ]);

        if($publication){
           
            if($request->has('publication_img')){

                $publication_photo = $request->file('publication_img');

                $file_original_extension = $publication_photo->getClientOriginalExtension();
                $file_name = 'publication-image-' . Random::makeRandom() .'.' . $file_original_extension;

                $request->publication_img->storeAs(config('lanre.publication_pic_directory'), $file_name, 'public');

                $file_path = '/storage' . config('lanre.publication_pic_directory') . $file_name;
                //public_path('storage' . config('entranx.post_pic_directory') . $file_name);

                //Set the user's photo field
                $publication->publication_img = asset($file_path);

            }

            if($request->has('attachment')){

                $attachment = $request->file('attachment');

                $file_original_extension = $attachment->getClientOriginalExtension();
                $file_original_name = $attachment->getClientOriginalName();
                $file_name = 'post-attachment-' . Random::makeRandom() .'.' . $file_original_extension;

                $request->attachment->storeAs(config('lanre.publication_attachment_directory'), $file_name, 'public');

                $file_path = '/storage' . config('lanre.publication_attachment_directory') . $file_name;
                //public_path('storage' . config('entranx.post_pic_directory') . $file_name);

                //Set the user's photo field
                $publication->attachment = asset($file_path);
                $publication->attachment_name = $file_original_name;

            }

            if($publication->save()){
                session()->flash('success_submit', 'Publication saved successfully...');
                    return back();
                // return response()->json(['status' => 'success', 'message' => 'Post created successfully. \n Please try adding a photo...'], 200);
            }else{
                session()->flash('failure_submit', 'Publication could not be saved...');
                    return back();
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
        $publication = Publication::find($id);

        return view('show-publication')->with(['publication' => $publication ]);
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
        $publication = Publication::find($id);

        return view('dashboard')->with(['publication' => $publication ]);
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
        $title = $request->title;
        $body = $request->body;

        $publication = Publication::find($id);


        if($publication){


            if($publication->title != $title)
                $publication->title = $title;

            if($publication->body != $body)
                $publication->body = $body;
           
            if($request->has('publication_img')){

                $publication_photo = $request->file('publication_img');

                $file_original_extension = $publication_photo->getClientOriginalExtension();
                $file_name = 'post-image-' . Random::makeRandom() .'.' . $file_original_extension;

                $request->publication_img->storeAs(config('lanre.publication_pic_directory'), $file_name, 'public');

                $file_path = '/storage' . config('lanre.publication_pic_directory') . $file_name;
                //public_path('storage' . config('entranx.post_pic_directory') . $file_name);

                //Set the user's photo field
                $publication->publication_img = asset($file_path);

                
            }

            if($request->has('attachment')){

                $attachment = $request->file('attachment');

                $file_original_extension = $attachment->getClientOriginalExtension();
                $file_original_name = $attachment->getClientOriginalName();
                $file_name = 'post-attachment-' . Random::makeRandom() .'.' . $file_original_extension;

                $request->attachment->storeAs(config('lanre.publication_attachment_directory'), $file_name, 'public');

                $file_path = '/storage' . config('lanre.publication_attachment_directory') . $file_name;
                //public_path('storage' . config('entranx.post_pic_directory') . $file_name);

                //Set the user's photo field
                $publication->attachment = asset($file_path);
                $publication->attachment_name = $file_original_name;


            }

            if($publication->save()){
                session()->flash('success_submit', 'Publication updated successfully...');
                return back();
                //return response()->json(['status' => 'success', 'message' => ''], 200);
            }else{
                session()->flash('failure_submit', 'Couldn\'t update publication.');
                    return back();
            }


        }else{
            session()->flash('failure_submit', 'Publication was not found.');
                    return back();
            //return response()->json(['status' => 'failure', 'message' => 'Post could not be created.'], 203);
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
        //
        $publication = Publication::find($id);
        if($publication){

            if($publication->delete()){
                session()->flash('success_submit', 'Publication was deleted successfully.');
                    return back();
                }else{
                    session()->flash('failure_submit', 'Publication could not be deleted.');
                    return back();
                }

            
        }else{
            session()->flash('failure_submit', 'Publication could not be found.');
                    return back();
        }
    }

    public function download($id){

        $publication = Publication::find($id);

        if($publication){
            return Storage::download($publication->attachment, $publication->attachment_name);
        }

    }
}
