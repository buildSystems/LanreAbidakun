<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Traits\Random;
use Illuminate\Support\Facades\Hash;
use App\Role;
use App\Status;

class UserController extends Controller
{

    public function __construct()
    {
        //
        $this->middleware(['auth', 'admin']);

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::whereVisibility('visible')->get();
        //$users = User::all();
        //return $users;

        return view('dashboard')->with(['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role::all();
        $statuses = Status::all();
        return view('dashboard')->with(['roles' => $roles, 'statuses' => $statuses]);
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

        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $confirm_password = $request->password_confirmation;
        $role_id = $request->role_id;
        $status_id = $request->status_id;

        if($password != $confirm_password){
            session()->flash('failure_submit', 'Passwords don\'t match.');
                return back();
        }

        try{


            $user = User::create([
                'name'  => $name,
                'email'  => $email,
                'password'  => Hash::make($password),
                'role_id'  => $role_id,
                'status_id'  => $status_id,

            ]);

            if($user){
               
                if($request->has('user_photo')){

                    $user_photo = $request->file('user_photo');

                    $file_original_extension = $user_photo->getClientOriginalExtension();
                    $file_name = 'user-image-' . Random::makeRandom() .'.' . $file_original_extension;

                    $request->user_photo->storeAs(config('lanre.user_pic_directory'), $file_name, 'public');

                    $file_path = '/storage' . config('lanre.user_pic_directory') . $file_name;
                    //public_path('storage' . config('entranx.post_pic_directory') . $file_name);

                    //Set the user's photo field
                    $user->photo = asset($file_path);

                    if($user->save()){
                        session()->flash('success_submit', 'user created successfully...');
                        return back();
                        //return response()->json(['status' => 'success', 'message' => ''], 200);
                    }else{
                        session()->flash('success_submit', 'User created successfully.<br> You may want to try adding a photo...');
                        return back();
                        // return response()->json(['status' => 'success', 'message' => 'Post created successfully. \n Please try adding a photo...'], 201);
                    }
                }else{
                    session()->flash('success_submit', 'User created successfully...');
                        return back();
                    // return response()->json(['status' => 'success', 'message' => 'Post created successfully. \n Please try adding a photo...'], 200);
                }

            }else{
                session()->flash('failure_submit', 'User could not be created.');
                        return back();
                //return response()->json(['status' => 'failure', 'message' => 'Post could not be created.'], 203);
            }    

        }catch(\Exception $e){
            session()->flash('failure_submit', 'User could not be created.');
                        return back();
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
        $user = User::find($id);
        $roles = Role::all();
        $statuses = Status::all();
        return view('dashboard')->with(['roles' => $roles, 'statuses' => $statuses, 'user' => $user]);
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

        //return $request->all();

        $name = $request->name;
        $email = $request->email;

        if($request->has('role_id'))
            $role_id = $request->role_id;
        
        if($request->has('status_id'))
            $status_id = $request->status_id;


        $user = User::find($id);

        

        if($user){

            if($user->name != $name)
            $user->name = $name;

            if($user->email != $email)
                $user->email = $email;

            if($request->has('role_id') && ($user->role_id != $role_id) )
                $user->role_id = $role_id;

            if($request->has('status_id') && ($user->status_id != $status_id) )
                $user->status_id = $status_id;

            if($request->has('user_photo')){

                $user_photo = $request->file('user_photo');

                $file_original_extension = $user_photo->getClientOriginalExtension();
                $file_name = 'user-image-' . Random::makeRandom() .'.' . $file_original_extension;

                $request->user_photo->storeAs(config('lanre.user_pic_directory'), $file_name, 'public');

                $file_path = '/storage' . config('lanre.user_pic_directory') . $file_name;
                //public_path('storage' . config('entranx.post_pic_directory') . $file_name);

                //Set the user's photo field
                $user->photo = asset($file_path);

                if($user->save()){
                    session()->flash('success_submit', 'User updated successfully...');
                    return redirect(route('view-users'));
                    //return response()->json(['status' => 'success', 'message' => ''], 200);
                }

            }else{
                if($user->save()){
                    session()->flash('success_submit', 'User updated successfully...');
                    return redirect(route('view-users'));
                    //return response()->json(['status' => 'success', 'message' => ''], 200);
                }
            }

        }else{
            session()->flash('failure_submit', 'User could not be found.');
                    return back();
            //return response()->json(['status' => 'failure', 'message' => 'Post could not be created.'], 203);
        }    

    }

    public function updatePassword(Request $request){
        //

        $old_password = $request->old_password;
        $new_password = $request->new_password;
        $confirm_new_password = $request->confirm_new_password;

        $user = auth()->user();

        if(! Hash::check($old_password, $user->password)){
            session()->flash('failure_submit', 'Old password is wrong');
                    return back();
        }else if($new_password != $confirm_new_password){
            session()->flash('failure_submit', 'Passwords don\'t match');
                    return back();
        }

        $user->password = Hash::make($new_password);

        if($user->save()){
            session()->flash('success_submit', 'Password updated successfully...');
                    return back();
        }else{
            session()->flash('failure_submit', 'Password could not be updated');
                    return back();
        }


        return $request->all();

    }

    public function changePassword(Request $request){
        return view('dashboard');
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
