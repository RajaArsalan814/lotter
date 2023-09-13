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



class UserController extends Controller
{


    function __construct()
    {

         $this->middleware('permission:user-list', ['only' => ['index']]);
         $this->middleware('permission:user-create', ['only' => ['create','store']]);
         $this->middleware('permission:user-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:user-delete', ['only' => ['destroy']]);


    }

    public function index()
    {
        $agents = User::orderBy('id','DESC')->where('type','user')->where('id','!=',auth()->user()->id)->get();

        if(auth()->user()->type == 'agent')
        {

            $agents = User::orderBy('id','DESC')->where('user_id',auth()->user()->id)->where('type','user')->where('id','!=',auth()->user()->id)->get();
            $roles = Role::where('name','Users')->pluck('name')->all();

        }else{

            $agents = User::orderBy('id','DESC')->where('type','user')->where('id','!=',auth()->user()->id)->get();
            $roles = Role::where('name','Users')->pluck('name')->all();
        }


        return view('admin.user.index',compact('agents','roles'));
    }

    public function agent()
    {
        $agents = User::orderBy('id','DESC')->where('type','agent')->where('id','!=',auth()->user()->id)->get();
        $roles = Role::pluck('name')->all();
        return view('admin.user.agent',compact('agents','roles'));
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
    public function store(Request $request)
    {
        //  return $request->all();

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'phone_number' => 'required|unique:users,phone_number',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with(['message'=>$validator->messages()->first(),'type' => 'error']);
         }

        $input = $request->except(['_token', 'profile','password_confirm'],$request->all());

        if($request->role_id == 'Admin'){
            $input['type'] ='admin';
        }else if($request->role_id == 'Super Admin'){
            $input['type'] ='super admin';
        }else if($request->role_id == 'Agent'){
            $input['type'] ='agent';
        }else if($request->role_id == 'User'){
            $input['type'] ='user';
        }

        $input['password'] = Hash::make($input['password']);
        if($request->hasFile('profile'))
        {
            $img = Str::random(20).$request->file('profile')->getClientOriginalName();
            $input['profile'] = $img;
            $request->profile->move(public_path("documents/profile"), $img);
        }

        $input['user_id'] = auth()->user()->id;
        $user = User::create($input);
        $user->assignRole($request->input('role_id'));

        return redirect()->back()->with(['message'=>'User created successfully','type'=>'success']);
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

    public function user_edit($id){

        $user = User::with('user_agent')->find($id);
        return view('admin.user.user_edit',compact('user'));
    }

    public function user_update(Request $request){

            $id = $request->id;
            $user = User::find($id);
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->total_credit = $request->total_credit;
            $user->status = $request->status;
            $user->save();
            return redirect()->route('users.index');
    }
    //     public function edit($id)
    // {
    //      $user = User::find($id);
    //      return view('admin.user.edit',compact('user'));
    // }

}
