
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
                                        <form class="form-horizontal" action="{{route('lottery.lottery_set_update')}}" novalidate enctype= "multipart/form-data" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label> Lottery Number Select</label>
                                                        <div class="controls">
                                                            <select name="lottery_number_select" id="" class="form-control">
                                                                <option disabled selected>Select Number</option>
                                                                   @if ($lottery_set->lottery_id== '3')

                                                                   <option value="12">12</option>
                                                                   <option value="13">13</option>
                                                                   <option value="14">14</option>
                                                                   <option value="15">15</option>
                                                                   <option value="16">16</option>

                                                                   <option value="21">21</option>
                                                                   <option value="23">23</option>
                                                                   <option value="24">24</option>
                                                                   <option value="25">25</option>
                                                                   <option value="26">26</option>

                                                                   <option value="31">31</option>
                                                                   <option value="32">32</option>
                                                                   <option value="34">34</option>
                                                                   <option value="35">35</option>
                                                                   <option value="36">36</option>

                                                                   <option value="41">41</option>
                                                                   <option value="42">42</option>
                                                                   <option value="43">43</option>
                                                                   <option value="45">45</option>
                                                                   <option value="46">46</option>

                                                                   <option value="51">51</option>
                                                                   <option value="52">52</option>
                                                                   <option value="54">54</option>
                                                                   <option value="55">55</option>
                                                                   <option value="56">56</option>

                                                                   <option value="61">61</option>
                                                                   <option value="62">62</option>
                                                                   <option value="64">64</option>
                                                                   <option value="65">65</option>

                                                                   @else
                                                                   <option value="1">1</option>
                                                                   <option value="2">2</option>
                                                                   <option value="3">3</option>
                                                                   <option value="4">4</option>
                                                                   <option value="5">5</option>
                                                                   <option value="6">6</option>
                                                                   <option value="7">7</option>
                                                                   <option value="8">8</option>
                                                                   <option value="9">9</option>
                                                                   <option value="10">10</option>
                                                                   @endif
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <input type="hidden" name="lottery_set_id" value="{{$lottery_set->id}}">

                                                    {{-- <div class="form-group">
                                                        <label></label>
                                                        <div class="controls">
                                                            <input type="datetime-local" name="start_date" class="form-control" required data-validation-required-message="This field is required" placeholder="Amount">
                                                        </div>
                                                    </div> --}}

                                                    {{-- <div class="form-group">
                                                        <label>End Date Time</label>
                                                        <div class="controls">
                                                            <input type="datetime-local" name="end_date" class="form-control" required data-validation-required-message="This field is required" placeholder="Amount">
                                                        </div>
                                                    </div> --}}

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
