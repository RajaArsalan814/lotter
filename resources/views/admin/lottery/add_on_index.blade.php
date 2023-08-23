
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
      {{-- <a href="{{route('lottery.add_on')}}" class="btn btn-secondary add-new btn-primary">Lottery Create</a> --}}
   <!-- <button class="btn btn-secondary add-new btn-primary" tabindex="0" aria-controls="DataTables_Table_00" type="button" data-bs-toggle="offcanvas"><span><i class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span class="d-none d-sm-inline-block">Add Lottery</span></span></button>  -->
</div>

  </div>
  <div class="card-datatable table-responsive">
    <table class=" table border-top">
      <thead>
        <tr>
          <th>Name</th>
          <th>Start Date</th>
          <th>End Date</th>
        </tr>
      </thead>
      <tbody>
        @if(count($lottery)>0)
        @foreach($lottery as $item)
        <tr>
          <td>{{$item->lottery->name}}</td>
          <td>{{$item->start_date}}</td>
          <td>{{$item->end_date}}</td>
        </tr>
        @endforeach
        @endif
      </tbody>
    </table>
  </div>
</div>

@endsection


@section('javascript')
@endsection

@section('custom_js')

@endsection
