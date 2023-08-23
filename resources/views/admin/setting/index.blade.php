
@extends('admin/layout/layout')

@section('header-script')

@endsection

@section('body-section')


<section class="input-validation dashboard-analytics">
<div class="row">
    <div class="col-md-12">
        <div class="card">

            <div class="card-content">
                <div class="card-body">
                    <form class="form-horizontal" action="{{route('setting.store')}}" novalidate enctype= "multipart/form-data" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Logo</label>
                                    <div class="controls">
                                        <input type="file" name="logo" class="form-control" >
                                         <input type="hidden" name="id" value="{{$setting->id??null}}" >
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    @php
                                    $logo = $setting->logo??null;
                                    @endphp
                                    <img src='{{asset("documents/setting/$logo")}}' alt=""  width="150px" style="border:1px solid black">
                                </div>
                            </div>




                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>footer Logo</label>
                                    <div class="controls">
                                        <input type="file" name="footer_logo" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                @php
                                $footer_logo = $setting->footer_logo??null;
                                @endphp
                                <img src='{{asset("documents/setting/$footer_logo")}}' alt=""  width="150px">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Facebook</label>
                                    <div class="controls">
                                        <input type="url" name="facebook" class="form-control" value="{{$setting->facebook??null}}">
                                    </div>
                                </div>
                            </div>

                             <div class="col-md-6">
                                <div class="form-group">
                                    <label>Linkdin</label>
                                    <div class="controls">
                                        <input type="url" name="linkdin" class="form-control" value="{{$setting->linkdin??null}}">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Twitter</label>
                                    <div class="controls">
                                        <input type="url" name="twitter" class="form-control" value="{{$setting->twitter??null}}">
                                    </div>
                                </div>
                            </div>

                             <div class="col-md-6">
                                <div class="form-group">
                                    <label>Google plus</label>
                                    <div class="controls">
                                        <input type="url" name="google_plus" class="form-control" value="{{$setting->google_plus??null}}">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Whatsapp</label>
                                    <div class="controls">
                                        <input type="url" name="whatsapp" class="form-control" value="{{$setting->whatsapp??null}}">
                                    </div>
                                </div>
                            </div>

                             <div class="col-md-6">
                                <div class="form-group">
                                    <label>Instagram</label>
                                    <div class="controls">
                                        <input type="url" name="instagram" class="form-control" value="{{$setting->instagram??null}}">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
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


</script>

@endsection
