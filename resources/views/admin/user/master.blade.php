
@extends('admin/layout/layout')

@section('css_cdn')
@endsection
@section('custom_css')
<style type="text/css">

</style>
@endsection

@section('body-content')

<!-- Users List Table -->
<div class="card">
  <div class="card-header border-bottom">
    <!-- <h5 class="card-title mb-3">Search Filter</h5> -->
    <div class="d-flex justify-content-between align-items-center row pb-2 gap-3 gap-md-0">
      <div class="col-md-4 user_role"></div>
      <div class="col-md-4 user_plan"></div>
      <div class="col-md-4 user_status"></div>
    </div>

    <div class="dt-buttons btn-group flex-wrap">

   <button class="btn btn-secondary add-new btn-primary" tabindex="0" aria-controls="DataTables_Table_00" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser"><span><i class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span class="d-none d-sm-inline-block">Add New Master</span></span></button>
</div>

  </div>
  <div class="card-datatable table-responsive">
    <table class=" table border-top">
      <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Phone Number</th>
          <th>Role</th>
          {{-- <th>Users View</th> --}}
        </tr>
      </thead>
      <tbody>
        @if(count($master)>0)
        @foreach($master as $item)
        <tr>
          <td>{{$item->first_name}}</td>
          <td>{{$item->last_name}}</td>
          <td>{{$item->phone_number}}</td>
          <td>{{$item->role_id}}</td>
          {{-- <td><a href="{{route('users_get',['id'=>$item->id])}}">View</a></td> --}}
        </tr>
        @endforeach
        @endif
      </tbody>
    </table>
  </div>
  <!-- Offcanvas to add new user -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser" aria-labelledby="offcanvasAddUserLabel">
    <div class="offcanvas-header">
      <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Add Master</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body mx-0 flex-grow-0 pt-0 h-100">
      <form class="" action="{{route('master.my_store')}}" method="POST" id="addNewUserForm" novalidate>
        @csrf
        <div class="mb-3">
          <label class="form-label" for="first_name">First Name</label>
          <input type="text" class="form-control" id="first_name" placeholder="John" name="first_name" aria-label="John Doe" required />
            <div class="valid-feedback"> Looks good! </div>
            <div class="invalid-feedback"> Please enter your first name. </div>
        </div>

        <div class="mb-3">
          <label class="form-label" for="last_name">Last Name</label>
          <input type="text" class="form-control" id="last_name" placeholder="Doe" name="last_name" aria-label="John Doe" required/>
          <div class="valid-feedback"> Looks good! </div>
            <div class="invalid-feedback"> Please enter your last name. </div>
        </div>

        <!-- <div class="mb-3">
          <label class="form-label" for="email">Email</label>
          <input type="text" id="email" class="form-control" name="email" placeholder="john.doe@example.com"  required/>
          <div class="valid-feedback"> Looks good! </div>
            <div class="invalid-feedback"> Please enter email. </div>
        </div> -->
        <div class="mb-3">
          <label class="form-label" for="phone_numbert">Phone Number</label>
          <input type="number" id="phone_number" class="form-control phone-mask" placeholder="15451215451"  name="phone_number" required/>
          <div class="valid-feedback"> Looks good! </div>
          <div class="invalid-feedback"> Please enter phone number. </div>
        </div>

        <div class="mb-3">
          <label class="form-label" for="password">Password</label>
          <input type="password" id="password" class="form-control" name="password" placeholder="********"  required/>
          <div class="valid-feedback"> Looks good! </div>
          <div class="invalid-feedback"> Please enter password. </div>
        </div>



        @forelse($roles as $key => $item)
          <input type="hidden" name="role_id" value="{{$item}}">
          @empty
          @endforelse


        <!-- <div class="mb-3">
          <label class="form-label" for="user-role">User Role</label>


          <select name="role_id" id="role_id" class="form-control" required>
            <option disabled selected value="">Select</option>
            @forelse($roles as $key => $item)
                <option value="{{$item}}">{{$item}}</option>
            @empty
            @endforelse
            </select>
            <div class="valid-feedback"> Looks good! </div>
          <div class="invalid-feedback"> Please select role number. </div>
        </div> -->

        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
      </form>
    </div>
  </div>
</div>

@endsection


@section('javascript')
@endsection

@section('custom_js')

@endsection
