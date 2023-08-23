
@extends('admin/layout/layout')

@section('css_cdn')
@endsection
@section('custom_css')
<style type="text/css">

</style>
@endsection

@section('body-content')

<section class="input-validation dashboard-analytics">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">

                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form-horizontal" action="{{route('user_update',['id'=>$user->id])}}" novalidate enctype= "multipart/form-data" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Agent Name</label>
                                                        <div class="controls">
                                                            <input type="text"  class="form-control" data-validation-required-message="This field is required" placeholder=" Name" value="{{$user->user_agent->first_name}} {{$user->user_agent->last_name}}" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" value="{{$user->id}}" name="id">
                                                    <br>
                                                    <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Client First Name</label>
                                                        <div class="controls">
                                                            <input type="text" name="first_name" class="form-control" required data-validation-required-message="This field is required" value="{{$user->first_name}} ">
                                                        </div>
                                                    </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Client Last Name</label>
                                                        <div class="controls">
                                                            <input type="text" name="last_name" class="form-control" required data-validation-required-message="This field is required" value="{{$user->last_name}} ">
                                                        </div>
                                                    </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Client Id</label>
                                                        <div class="controls">
                                                            <input type="text"  class="form-control" required data-validation-required-message="This field is required" value="{{$user->phone_number}} " disabled>
                                                        </div>
                                                    </div>
                                                    </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="Amount">Status</label>
                                                        <select name="status" id="" class="form-control">
                                                            <option disabled select>Select Status</option>
                                                            <option value="1" @if($user->status=='1') selected  @endif>Active</option>
                                                            <option  value="0" @if($user->status=='0') selected  @endif>InActive</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Client Credit</label>
                                                        <div class="controls">
                                                            <input type="text" name="total_credit" class="form-control" required data-validation-required-message="This field is required" value="{{$user->total_credit}} "  >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <br>
                                            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

@endsection


@section('footer-section')
@endsection

@section('footer-script')

<!-- <script src="{{asset('assets/js/countrystatecity.js?v2')}}"></script> -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149371669-1"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyDMzBtl2TKTecLe_NEmSup5U-nkj93Ch7o"></script>
<link rel="stylesheet" href="{{asset('app-assets/css/toastr.min.css')}}" />

<script src="{{asset('app-assets/js/waitMe.js')}}"></script>
<script src="{{asset('app-assets/js/toastr.min.js')}}"></script>

<script>


var loadFile = function(event) {
   var image = document.getElementById('output');
   image.src = URL.createObjectURL(event.target.files[0]);
   };
</script>

<script type="text/javascript">

 var APP_URL = {!! json_encode(url('/')) !!}
 var type = "{{ Session::get('type') }}";
      switch (type) {
          case 'info':
              toastr.info("{{ Session::get('message') }}");
              break;

          case 'warning':
              toastr.warning("{{ Session::get('message') }}");
              break;

          case 'success':
              toastr.success("{{ Session::get('message') }}");
              break;

          case 'error':
              toastr.error("{{ Session::get('message') }}");
              break;

      }






</script>

@endsection


@section('javascript')
@endsection

@section('custom_js')

@endsection
