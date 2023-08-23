@extends('admin/layout/layout')

@section('css_cdn')
@endsection
@section('custom_css')
<style type="text/css">
  
</style>
@endsection

@section('body-content')

<h4 class="fw-semibold mb-4">Roles List</h4>

<p class="mb-4">From this page you can change role and permission for users</p>
<!-- Role cards -->
<div class="row g-4">
  
   @if(count($roles)>0)
 
   @foreach($roles as $key => $item)
        
         @php
           
               $rolePermissions = \DB::table("role_has_permissions")
               ->where("role_id", $item->id)
               ->pluck('permission_id')
               ->all();     
            @endphp

   <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <h6 class="fw-normal mb-2">Total {{$item->users_count??null}} {{$item->name}}</h6>
          <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">

            @foreach($item->users as $userkey => $user)
            @php 
             $profile = $user->profile??'default.png'
            @endphp
            @if($userkey < 4)
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="{{$user->first_name}} {{$user->last_name}}" class="avatar avatar-sm pull-up">
              <img class="rounded-circle" src='{{asset("documents/profile/$profile")}}' alt="Avatar">
            </li>
            @endif
            @endforeach
           
          </ul>
        </div>
        <div class="d-flex justify-content-between align-items-end mt-1">
          <div class="role-heading">
            <h4 class="mb-1">{{$item->name}}</h4>
            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#EditRoleModal{{$item->id}}" class="role-edit-modal"><span>Edit Role</span></a>
          </div>
          <!-- <a href="javascript:void(0);" class="text-muted"><i class="ti ti-copy ti-md"></i></a> -->
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="EditRoleModal{{$item->id}}" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered modal-add-new-role">
      <div class="modal-content p-3 p-md-5">
         <button type="button" class="btn-close btn-pinned" data-bs-dismiss="modal" aria-label="Close"></button>
         <div class="modal-body">
         <div class="text-center mb-4">
            <h3 class="role-title mb-2">Edit New Role</h3>
            <p class="text-muted">Set role permissions</p>
         </div>
         <!-- Add role form -->
         <form id="addRoleForm" action="{{route('roles.update',$item->id)}}" class="row g-3"  method="POST">
            @csrf
            @method('PATCH')
            <div class="col-12 mb-4">
               <label class="form-label" for="modalRoleName">Role Name</label>
               <input type="text"  id="modalRoleName" name="name" class="form-control" placeholder="Enter a role name" tabindex="-1" value="{{$item->name}}" />
            </div>
            <div class="col-12">
               <h5>Role Permissions</h5>
               <!-- Permission table -->
               <div class="table-responsive">
               <table class="table table-flush-spacing">
                  <tbody>
                     <tr>
                     <td class="text-nowrap fw-semibold">Administrator Access <i class="ti ti-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Allows a full access to the system"></i></td>
                     <td>
                        <div class="form-check">
                           <input class="form-check-input" type="checkbox" id="selectAll" />
                           <label class="form-check-label" for="selectAll">
                           Select All
                           </label>
                        </div>
                     </td>
                     </tr>
                     
                    
                     @foreach($permissions->groupBy('type') as $type => $typePermissions)
                        <tr>
                           <td class="text-nowrap fw-semibold">{{ $type }}</td>
                           <td>
                                 <div class="d-flex">
                                    @foreach($typePermissions as $permission)
                                       @php
                                     
                                             $isChecked = in_array($permission->id, $rolePermissions);
                                             
                                       @endphp

                                       <div class="form-check me-3 me-lg-5">
                                             <input class="form-check-input" name="permission[]" type="checkbox" id="{{ $permission->name }}" value="{{ $permission->id }}" @if($isChecked) checked @endif />
                                             <label class="form-check-label" for="{{ $permission->name }}">
                                                {{ $permission->display_name }}
                                             </label>
                                       </div>
                                    @endforeach
                                 </div>
                           </td>
                        </tr>
                     @endforeach
                  
                  
                  </tbody>
               </table>
               </div>
               <!-- Permission table -->
            </div>
            <div class="col-12 text-center mt-4">
               <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
               <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
            </div>
         </form>
         <!--/ Add role form -->
         </div>
      </div>
   </div>
   
   </div>
  @endforeach
  @endif
  
 
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card h-100">
      <div class="row h-100">
        <div class="col-sm-5">
          <div class="d-flex align-items-end h-100 justify-content-center mt-sm-0 mt-3">
            <img src="{{asset('assets/img/illustrations/add-new-roles.png')}}" class="img-fluid mt-sm-4 mt-md-0" alt="add-new-roles" width="83">
          </div>
        </div>
        <div class="col-sm-7">
          <div class="card-body text-sm-end text-center ps-sm-0">
            <button data-bs-target="#addRoleModal" data-bs-toggle="modal" class="btn btn-primary mb-2 text-nowrap add-new-role">Add New Role</button>
            <p class="mb-0 mt-1">Add role, if it does not exist</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12">
    <!-- Role Table -->
   
    <!--/ Role Table -->
  </div>
</div>
<!--/ Role cards -->

<!-- Add Role Modal -->
<!-- Add Role Modal -->
<div class="modal fade" id="addRoleModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-add-new-role">
    <div class="modal-content p-3 p-md-5">
      <button type="button" class="btn-close btn-pinned" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body">
        <div class="text-center mb-4">
          <h3 class="role-title mb-2">Add New Role</h3>
          <p class="text-muted">Set role permissions</p>
        </div>
        <!-- Add role form -->
        <form  action="{{route('roles.store')}}" class="row g-3 needs-validation"  method="POST" id="addNewUserForm" novalidate>
          @csrf
          <div class="col-12 mb-4">
            <label class="form-label" for="modalRoleName">Role Name</label>
            <input type="text" id="modalRoleName" name="name" class="form-control" placeholder="Enter a role name" tabindex="-1" required />
          </div>
          <div class="col-12">
            <h5>Role Permissions</h5>
            <!-- Permission table -->
            <div class="table-responsive">
              <table class="table table-flush-spacing">
                <tbody>
                  <tr>
                    <td class="text-nowrap fw-semibold">Administrator Access <i class="ti ti-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Allows a full access to the system"></i></td>
                    <td>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="selectAll" />
                        <label class="form-check-label" for="selectAll">
                          Select All
                        </label>
                      </div>
                    </td>
                  </tr>
                  @foreach($permissions->groupBy('type') as $type => $typePermissions)
                     <tr>
                        <td class="text-nowrap fw-semibold">{{ $type }}</td>
                        <td>
                        <div class="d-flex">
                           @foreach($typePermissions as $permission)
                           <div class="form-check me-3 me-lg-5">
                              <input class="form-check-input" name="permission[]" type="checkbox" id="{{ $permission->name }}" value="{{$permission->id}}" />
                              <label class="form-check-label" for="{{ $permission->name }}">
                              {{ $permission->display_name }}
                              </label>
                           </div>
                           @endforeach
                        </div>
                        </td>
                     </tr>
                     @endforeach

                 
                 
                </tbody>
              </table>
            </div>
            <!-- Permission table -->
          </div>
          <div class="col-12 text-center mt-4">
            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        </form>
        <!--/ Add role form -->
      </div>
    </div>
  </div>
</div>
@endsection


@section('javascript')
@endsection

@section('custom_js')

@endsection