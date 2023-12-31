<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use DB;

use Illuminate\Support\Arr;

class MasterController extends Controller
{
    // function __construct()
    // {
    //      $this->middleware('permission:master-list', ['only' => ['index']]);
    //      $this->middleware('permission:master-create', ['only' => ['create','store']]);
    //      $this->middleware('permission:master-edit', ['only' => ['edit','update']]);
    //      $this->middleware('permission:master-delete', ['only' => ['destroy']]);
    // }
    // public function index()
    // {
    //     $agents = User::orderBy('id','DESC')->where('type','user')->where('id','!=',auth()->user()->id)->get();

    //     if(auth()->user()->type == 'agent')
    //     {
    //          $agents = User::orderBy('id','DESC')->where('user_id',auth()->user()->id)->where('type','user')->where('id','!=',auth()->user()->id)->get();
    //         $roles = Role::where('name','Users')->pluck('name')->all();

    //     }else{
    //         $agents = User::orderBy('id','DESC')->where('type','user')->where('id','!=',auth()->user()->id)->get();
    //         $roles = Role::pluck('name')->all();
    //     }


    //     return view('admin.user.index',compact('agents','roles'));
    // }

    public function index()
    {

        $master = User::withCount('overall_users')->orderBy('id','DESC')->where('type','master')->where('id','!=',auth()->user()->id)->get();
        $roles = Role::where('name','Master')->pluck('name')->all();
        return view('admin.user.master',compact('master','roles'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name')->all();
        return view('admin.user.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function my_store(Request $request)
    {
        // return $request->all();



        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'phone_number' => 'required|unique:users,phone_number',
            'password' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect()->back()->with(['message'=>$validator->messages()->first(),'type' => 'error']);
         }

         $user = new User;
         $user->first_name= $request->first_name;
         $user->last_name= $request->last_name;
         $user->phone_number= $request->phone_number;
         $user->role_id= 'master';
         $user->type= 'master';
         $input['password'] = Hash::make($request->password);
         $user->password=$input['password'];
         $user->save();
         $user->assignRole($request->input('role_id'));
        // $input = $request->except(['_token', 'profile','password_confirm'],$request->all());
        //  if($request->role_id == 'Master'){
        //     $input['type'] ='master';
        // }

        // if($request->hasFile('profile'))
        // {
        //     $img = Str::random(20).$request->file('profile')->getClientOriginalName();
        //     $input['profile'] = $img;
        //     $request->profile->move(public_path("documents/profile"), $img);
        // }

    //    return  $request->input('role_id');
        // $input['user_id'] = auth()->user()->id;
        // $user = User::create($input);

        return redirect()->back()->with(['message'=>'Master created successfully','type'=>'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $user = User::find($id);
         return view('admin.user.edit',compact('user'));
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

        $this->validate($request, [
            // 'first_name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            // 'password' => 'same:confirm-password',
            // 'role_id' => 'required'
        ]);

        $input = $request->all();

        if($request->hasFile('profile'))
        {
            $img = Str::random(20).$request->file('profile')->getClientOriginalName();
            $input['profile'] = $img;
            $request->profile->move(public_path("documents/profile"), $img);
        }

        $user = User::find($id);
        $user->update($input);
        return redirect()->back()
                ->with(['message'=>'User update successfully','type'=>'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
                        ->with(['message'=>'User delete successfully','type'=>'success']);
    }

    public function users_get($id)
    {

        $user_get = User::where('user_id',$id)->get();
        return view('admin.user.user_get',compact('user_get'));
    }
}
