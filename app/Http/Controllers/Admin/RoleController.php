<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use DB;


class RoleController extends Controller
{

    function __construct()
    {
     
         $this->middleware('permission:role-list', ['only' => ['index']]);
         $this->middleware('permission:role-create', ['only' => ['create','store']]);
         $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:role-delete', ['only' => ['destroy']]);
        
   
    }

    public function index(Request $request)
    {
        // return Role::with('users')->WithCount('users')->get();
          $roles = Role::with('users:id,profile,first_name,last_name')->WithCount('users')->orderBy('id','ASC')->get();
         
         $permissions = Permission::get();
        return view('admin.roles.index',compact('roles','permissions'));
    }
    
    public function create()
    {
         $permission = Permission::get();
        return view('admin.role.role-create',compact('permission'));
    }
    
    public function store(Request $request)
    {
        // return $request->all();
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:roles',
           
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with(['message'=>$validator->messages()->first(),'type' => 'error']);
         }
        
        $disply_name =  $request->input('name');
        $slug = str_replace(' ', '-', $disply_name);
        $role = Role::create(['name' => $request->input('name'),'display_name'=>$slug]);
        $role->syncPermissions($request->input('permission'));
    
        return redirect()->route('roles.index')
                ->with(['message'=>'Role created successfully','type'=>'success']);
    }

    public function show($id)
    {
        $role = Role::find($id);
        $rolePermissions = Permission::join("role_has_permissions","role_has_permissions.permission_id","=","permissions.id")
            ->where("role_has_permissions.role_id",$id)
            ->get();
    
        return view('admin.roles.show',compact('role','rolePermissions'));
    }
    
    public function edit($id)
    {
        $role = Role::find($id);
        $permission = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
            ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
            ->all();
    
        return view('admin.roles.edit',compact('role','permission','rolePermissions'));
    }

    public function update(Request $request, $id)
    {
        // return  $request->all();
        $permission = [];
        $permission = $request->input('permission');
                
        $role_id =  Role::where('name',$request->name)->first()->id;
        $this->validate($request, [
            'name' => 'required',
            // 'permission' => 'required',
        ]);
    
        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();
        if($permission != null)
        {
            $role->syncPermissions($request->input('permission'));
        }else{
           $role = DB::table('role_has_permissions')->where('role_id', $role_id)->delete();
        }
       
        return redirect()->back()
                ->with(['message'=>'Role Update successfully','type'=>'success']);
    }

    public function destroy($id)
    {
        DB::table("roles")->where('id',$id)->delete();
        return redirect()->route('roles.index')
            ->with(['message'=>'Role deleted successfully','type'=>'success']);
    }
    
    public function roleChangeStatus(Request $request)
    {
        $statusChange = Role::where('id',$request->id)->update(['status'=>$request->status]);
        if($statusChange)
        {
            return array('message'=>'Role status  has been changed successfully','type'=>'success');
        }else{
            return array('message'=>'Role status has not changed please try again','type'=>'error');
        }
    }
}
