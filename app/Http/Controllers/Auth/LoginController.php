<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use Validator;
//use App\Models\User;
//use App\Models\Role;
//use App\Models\UserRole;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = RouteServiceProvider::HOME;
    //protected $redirectTo;



    /*public function LoginForm()
    {
        return view('auth.login');
    }*/

    /*public function redirectTo()
    {
        switch (Auth::user()->roles->pluck('name')) {
            case "Admin":
            $this->redirectTo = '/admindashboard';
            return $this->redirectTo;
                break;
            case "Hod":
                $this->redirectTo = '/hoddashboard';
                return $this->redirectTo;
                break;
            case "Examiner":
                    $this->redirectTo = '/managerdashboard';
                return $this->redirectTo;
                break;
            default:
                $this->redirectTo = '/login'; //if user doesn't have any role
                return $this->redirectTo;
        }
    }

    /*public function Login(Request $request)
    {
        // $con=Auth::user()->id;
        //  dd($con);
        $user = User::all();
        // dd($Request);
        // return back();
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:8'
        ]);
        
        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );
        // dd($user_data);
       
        if(Auth::attempt($user_data))
        {
            //   dd($request);
            $cidus=UserRole::select('role_id')->where('user_roles.user_id', Auth::user()->id)->get();

            $roleid=$cidus['role_id'];
            
            if($roleid==1)
            {
                return redirect('/admindashboard');
            }

          
            if($roleid==2)
            {
                // dd( $roleid);
                return redirect('/hoddashboard');
            }
            if($roleid==3)
            {
                // dd( $roleid);

                return redirect('/examinerdashboard');
            }
            
        }
        else
        {
              return back()->with('error','Wrong Login Details');
        }
     
    }*/


    
    /*function logout()
    {
        Auth::logout();
        return redirect('/login');
    }*/



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$user = auth()->user();
        /*$user['role'] = $user->roles->pluck('name');
        if(Auth::check() && role_id == 1){
            $this->redirectTo = route('admindashboard');
        } elseif(Auth::check() && role_id == 2){
            $this->redirectTo = route('hoddashboard');
        } elseif(Auth::check() && role_id == 3){
            $this->redirectTo = route('managerdashboard');
        }
       
        $this->middleware('guest')->except('logout');*/

        $this->middleware('guest')->except('logout');
    }
}
