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
                            <option value="highest"
                            @if ($setting->win=='highest')
                                selected
                            @endif
                            >Highest</option>
                            <option value="second_highest"
                            @if ($setting->win=='second_highest')
                            selected
                            @endif
                        >Second Highest</option>
                            <option value="third_highest"
                            @if ($setting->win=='third_highest')
                            selected
                        @endif
                        >Third  Highest</option>
                            <option value="fourth_highest"
                            @if ($setting->win=='fourth_highest')
                            selected
                        @endif
                            >Fourth Highest</option>
                            <option value="second_lowest"
                            @if ($setting->win=='second_lowest')
                            selected
                            @endif
                            >Second Lowest </option>
                            <option value="lowest"
                            @if ($setting->win=='lowest')
                            selected
                        @endif
                        >Lowest </option>
                            <option value="no_win"
                            @if ($setting->win=='no_win')
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
