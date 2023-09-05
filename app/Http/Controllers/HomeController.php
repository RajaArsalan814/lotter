<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function logout()
    {

        $user_id = Auth::user()->id;
        $current_user = User::where('id',$user_id)->first();
        if($current_user->type=='user'){
            Auth::logout();
            return redirect()->route('home_page');
        }else{
            Auth::logout();
            return redirect('/');
        }
    }
}
