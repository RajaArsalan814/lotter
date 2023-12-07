
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
    <div class="d-flex justify-content-between align-items-center row pb-2 gap-3 gap-md-0">
      <div class="col-md-4 user_role"></div>
      <div class="col-md-4 user_plan"></div>
      <div class="col-md-4 user_status"></div>
    </div>
    <div class="dt-buttons btn-group flex-wrap">
   <button class="btn btn-secondary add-new btn-primary" tabindex="0" aria-controls="DataTables_Table_00" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser"><span><i class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span class="d-none d-sm-inline-block">Widhdraw Amount</span></span></button>
    </div>
    <div class="dt-buttons btn-group flex-wrap">
    <button class="btn btn-secondary add-new btn-primary" tabindex="0" aria-controls="DataTables_Table_00" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddAmount"><span><i class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span class="d-none d-sm-inline-block">Deposit Amount</span></span></button>
    </div>

    <div class="dt-buttons btn-group flex-wrap">
        <button class="btn btn-secondary add-new btn-primary" tabindex="0" aria-controls="" type="button" data-bs-toggle="offcanvas" data-bs-target="#"><span><i class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span class="d-none d-sm-inline-block">Total Amount Rs: {{$user->total_credit}}</span></span></button>
    </div>

  </div>
  <div class="card-datatable table-responsive">
    <table class=" table border-top">
      <thead>
        <tr>
          <th>User Name</th>
          <th>Phone Number</th>
          <th>Status</th>
          <th>Amount</th>
          <th>Date</th>
        </tr>
      </thead>
      <tbody>
        @if(count($user_transaction)>0)
        @foreach($user_transaction as $item)
        <tr>
          <td>{{$item->user->first_name}} {{$item->user->last_name}}</td>
          <td>{{$item->user->phone_number}}</td>
          <td>{{$item->status}}</td>
          <td>Rs: {{$item->amount}}</td>
          @php
                $date = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at, 'UTC');
                $date->setTimezone('Asia/Karachi');
          @endphp
          <td>{{$date}}</td>
        </tr>
        @endforeach
        @endif
      </tbody>
    </table>
  </div>
  <!-- Offcanvas to add new user -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser" aria-labelledby="offcanvasAddUserLabel">
    <div class="offcanvas-header">
      <h5 id="offcanvasAddUserLabel" class="offcanvas-title">WidhDraw Amount</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body mx-0 flex-grow-0 pt-0 h-100">
      <form class="" action="{{route('widhdraw_amount')}}" method="POST" id="addNewUserForm" >
        @csrf
        <div class="mb-3">
          <label class="form-label" for="first_name">Enter Amount</label>
          <input type="text" class="form-control" id="first_name" placeholder="0000" name="amount" aria-label="" required />
            <div class="valid-feedback"> Looks good! </div>
            <div class="invalid-feedback"> Please enter your withdraw amount. </div>
        </div>

        <input type="hidden" name="user_id" value="{{$user->id}}">

        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
      </form>
    </div>
  </div>


    <!-- Offcanvas to add new user -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddAmount" aria-labelledby="offcanvasAddUserLabel">
        <div class="offcanvas-header">
          <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Despoit Amount</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body mx-0 flex-grow-0 pt-0 h-100">
            <form class="" action="{{route('deposit_amount')}}" method="POST" id="addNewUserForm" >
                @csrf
                <div class="mb-3">
                  <label class="form-label" for="first_name">Enter Amount</label>
                  <input type="text" class="form-control" id="first_name" placeholder="0000" name="amount" aria-label="" required />
                    <div class="valid-feedback"> Looks good! </div>
                    <div class="invalid-feedback"> Please enter your withdraw amount. </div>
                </div>
                <input type="hidden" name="user_id" value="{{$user->id}}">
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
