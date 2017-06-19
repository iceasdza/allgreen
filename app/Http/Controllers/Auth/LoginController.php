<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\adminLogin;
use Illuminate\Routing\Redirector;
use Hash;

// use Illuminate\Auth\EloquentUserProvider;
// use Illuminate\Contracts\Auth\Authenticatable;

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
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
        return view('auth.login');
    }


    public function username(Request $request)
{
    // $data = new adminLogin;
    // $user = Auth::user();
    $username = $request->user;
    $pass = $request->password;
    // $hash =   Hash::make($pass);
    // $data->user = $username;
    // $data->password = $hash;
    // $data->save();
if(Auth::attempt(['user'=>$username,'password'=>$pass],true)){
    // dd($username);
    // return redirect('safety-upload');
    // dd($username);
    return redirect('safety-upload');
    // ['username'=>$username]
    // return view('uploadProduct');
}else{
    dd('fail');
    return view('auth.login');
}
}

}
