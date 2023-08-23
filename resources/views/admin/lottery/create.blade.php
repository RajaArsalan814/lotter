
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
                                        <form class="form-horizontal" action="{{route('lottery.store')}}" novalidate enctype= "multipart/form-data" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label> Name</label>
                                                        <div class="controls">
                                                            <input type="text" name="name" class="form-control" data-validation-required-message="This field is required" placeholder=" Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Amount</label>
                                                        <div class="controls">
                                                            <input type="text" name="amount" class="form-control" required data-validation-required-message="This field is required" placeholder="Amount">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                    <label class="form-label" for="Amount">Status</label>
                                                        <select name="status" id="" class="form-control">
                                                            <option disabled select>Select Status</option>
                                                            <option value="Active">Active</option>
                                                            <option  value="InActive">InActive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                            </div>
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