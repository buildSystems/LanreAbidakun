<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Hash;
use Illuminate\Http\Request;
use App\User;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/dashboard/view-posts';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function tryLogin(Request $request){
        
        $email =  $request->email;
        $password = $request->password;

        $user = User::whereEmail($email)->first();
        
        if($user){

            //dd($user->status_id);
            //dd('password: '.$password . ' old-password: '.$user->password);
            
            if(Hash::check($password, $user->password)){

                //dd('passwords match!');

                if($user->status_id == 2){
                    session()->flash('failure_submit', 'Your account has been suspended.');                        
                    return back();
                }else if($user->status_id == 3){
                    session()->flash('failure_submit', 'Your account has been deleted.');                        
                    return back();
                }

                auth()->login($user);

                return redirect($this->redirectTo);
                
            }else{
                session()->flash('failure_submit', 'invalid login credentials.');                        
                return back();
            }

        }else{
            session()->flash('failure_submit', 'User could not be found.');                        
            return back();
        }
    }
}
