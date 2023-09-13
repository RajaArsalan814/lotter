<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use DB;
use DataTables;
use Mail;
use Carbon\Carbon;
use Session;


class AdminController extends Controller
{

   public function dashboard(Request $request)
    {
        // Session::put('link', 'asas');
        //   Session::save();
        $user_id = Auth::user()->id;
        $user = User::where('id',$user_id)->first();

        $total_users_by_agents = User::where('type','user')->where('user_id',$user_id)->count();
        $total_agents = User::where('type','agent')->count();
        $total_users = User::where('type','user')->count();


       return view('admin/dashboard',compact('user','total_users','total_agents','total_users_by_agents'));
    }


    public function change_status(Request $request)
    {
        $statusChange = User::where('id',$request->id)->update(['status'=>$request->status]);
        if($statusChange)
        {
            return array('message'=>'User status  has been changed successfully','type'=>'success');
        }else{
            return array('message'=>'User status has not changed please try again','type'=>'error');
        }

    }


    public function profile()
   {
    // return $link = Session::get('link');
     return view('admin.profile');
   }

   public function profileUpdate(Request $request)
   {
        $user = User::find(auth()->user()->id);
        $input = $request->except(['profile','_token'],$request->all());

        if($request->hasFile('profile'))
        {
            $img = Str::random(20).$request->file('profile')->getClientOriginalName();
            $input['profile'] = $img;
            $request->profile->move(public_path("documents/profile/"), $img);
        }

        $user->update($input);

        return redirect()->back()
                ->with(['message'=>'User update successfully','type'=>'success']);
   }


   public function list()
   {
      $users = User::get();
      return view("admin.list2",compact('users'));
   }
}
