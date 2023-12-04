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


    @if (Auth::user()->type=='admin'  OR Auth::user()->type=='master')

    {{-- <div class="col-md-3">
        <div class="card">
            <div class="card-body">Lottery For Today</div>
            <div class="card-body">
                @if(isset($already_lottery))
                    <p>Already Created</p>
                @else
                    <button type="submit" class="btn btn-primary" >Click Me</button>
                @endif
            </div>
        </div>
    </div> --}}


    <div class="col-md-3">
        <div class="card">
            <div class="card-body">Total Users</div>
            <div class="card-body"> {{$total_users}}</div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
            <div class="card-body">Total Agents</div>
            <div class="card-body"> {{$total_agents}}</div>
        </div>
    </div>


    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <label class="">Who Win</label>
                <form action="{{route('who_win')}}" method="POST">
                        @csrf
                        <select name="win" id="" class="form-control">
                            <option selected disabled>Select Winner</option>
                            <option value="1"
                            @if ($setting->win=='1')
                                selected
                            @endif
                            >Highest</option>
                            <option value="2"
                            @if ($setting->win=='2')
                            selected
                            @endif
                        >Second Highest</option>
                            <option value="3"
                            @if ($setting->win=='3')
                            selected
                        @endif
                        >Third  Highest</option>
                            <option value="4"
                            @if ($setting->win=='4')
                            selected
                        @endif
                            >Fourth Highest</option>
                            <option value="5"
                            @if ($setting->win=='5')
                            selected
                        @endif
                        >Lowest </option>
                            <option value="6"
                            @if ($setting->win=='6')
                            selected
                        @endif
                        >Second Lowest </option>
                            <option value="0"
                            @if ($setting->win=='0')
                                selected
                            @endif
                            >No Win</option>
                        </select>

                        <br>
                        <input type="submit" class="btn btn-primary form-control btn-xs">
                </form>
            </div>
        </div>
    </div>

    @endif


    @if (Auth::user()->type=='agent')
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">Total Users</div>
            <div class="card-body"> {{$total_users_by_agents}}</div>
        </div>
    </div>

    @endif

</div>
@endsection


@section('javascript')
@endsection

@section('custom_js')

@endsection
