@extends('admin/layout/layout')

@section('css_cdn')
@endsection
@section('custom_css')
<style type="text/css">

</style>
@endsection

@section('body-content')

<div class="row">

    @if (Auth::user()->type=='user')
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">Total Credit</div>
            <div class="card-body">Rs {{$user->total_credit}}</div>
        </div>
    </div>
    @endif

</div>
@endsection


@section('javascript')
@endsection

@section('custom_js')

@endsection
