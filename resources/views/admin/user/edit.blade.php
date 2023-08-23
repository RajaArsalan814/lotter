
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
   <button class="btn btn-secondary add-new btn-primary" tabindex="0" aria-controls="DataTables_Table_00" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser"><span><i class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span class="d-none d-sm-inline-block">Add New User</span></span></button>
</div>

  </div>
  <div class="card-datatable table-responsive">
    <table class=" table border-top">
      <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <!-- <th>Email</th> -->
          <th>Phone Number</th>
          <th>Role</th>
          <!-- <th>Status</th> -->
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>

      </tbody>
    </table>
  </div>
</div>

@endsection


@section('javascript')
@endsection

@section('custom_js')

@endsection
