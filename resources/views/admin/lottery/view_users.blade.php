
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
                                        <table class=" table border-top">
                                            <thead>
                                              <tr>
                                                  <th>Lottery</th>
                                                  <th>id</th>
                                                  <th>Name</th>
                                                  <th>Quantity</th>
                                              </tr>
                                            </thead>
                                            <tbody>

                                              @if(count($all_users)>0)
                                              @foreach($all_users as $item)
                                              <tr>
                                                <td>{{$item->lottery->name}}</td>
                                                <td>{{$item->users->phone_number}}</td>
                                                <td>{{$item->users->first_name}} {{$item->users->last_name}}</td>
                                                <td>{{$item->total_quantity}}</td>
                                                {{-- @endif --}}
                                              </tr>
                                              @endforeach
                                              @endif
                                            </tbody>
                                          </table>
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
