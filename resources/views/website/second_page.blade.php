<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from iamubaidah.com/html/poklotto/poklotto/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jul 2023 13:48:00 GMT -->
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Page</title>
        <!-- favicon -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <!-- bootstrap -->
        <link rel="stylesheet" href="{{asset('website_assets/css/bootstrap.min.css')}}">
        <!-- animate css -->
        <!-- <link rel="stylesheet" href="{{asset('website_assets/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('website_assets/css/animate.min.css')}}"> -->
        <!-- load all Font Awesome styles -->
        <link rel="stylesheet" href="{{asset('website_assets/css/all.min.css')}}">
        <!-- owl carousel css -->
        <!-- <link rel="stylesheet" href="{{asset('website_assets/css/owl.carousel.min.css')}}"> -->
        <!-- main css -->
        <link rel="stylesheet" href="{{asset('website_assets/css/style.css')}}">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
<!--
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>-->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/toastr/toastr.css')}}" />

    </head>
    <style>
        .header{
            background:darkred;
        }


        .card-input-element {
    display: none;
}

.card-input {
    margin: 10px;
}

.card-input:hover {
    cursor: pointer;
}

.card-input-element:checked + .card-input {

    height:30px;
    width:30px;
    line-height:30px;
    padding-left:5px;
     box-shadow: 0 0 1px 1px #2ecc71;
 }



    </style>
    <body>

        <!-- preloader begin -->
        <div class="preloader">
            <div class="loader"><div></div><div></div><div></div><div></div></div>
        </div>
        <!-- preloader end -->

        <!-- header begin -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 d-xl-flex d-lg-flex d-block align-items-center">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-6 d-xl-block d-lg-block d-flex align-items-center">
                                <div class="logo">
                                    <a href="index.html">
                                        <h2 style="color: white;">
                                             Logo
                                        </h2>
                                        <!-- <img src="assets/img/logo.png')}}" alt=""> -->
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 d-xl-none d-lg-none d-flex justify-content-end">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="fa-solid fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="main-menu">
                            <nav class="navbar navbar-expand-lg">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav m-auto">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="{{route('home_page')}}">Homepage</a>
                                        </li>
                                        <!-- <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Pages
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a class="dropdown-item" href="sign-in.html">Sign In</a></li>
                                                <li><a class="dropdown-item" href="register.html">Register / Sign up</a></li>
                                                <li><a class="dropdown-item" href="faq.html">Ques. & Ans.</a></li>
                                                <li><a class="dropdown-item" href="blog-posts.html">Blog Posts</a></li>
                                                <li><a class="dropdown-item" href="blog-details.html">Blog Details</a></li>
                                                <li><a class="dropdown-item" href="error.html">Error 404</a></li>
                                            </ul>
                                        </li> -->
                                        @if(!Auth::user())
                                        <li class="nav-item">
                                            <a class="" href="{{route('user-login')}}">Login</a>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <!-- <div class="col-xl-3 col-lg-3 d-xl-flex d-lg-flex d-none align-items-center justify-content-end">
                        <a href="lotteries.html" class="btn-pok mid">
                            play lottery <i class="fa-solid fa-angle-right"></i>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- header end -->

        <!-- banner begin -->
        <!-- <div class="banner">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="banner-content">
                            <h4 class="sub-title">passionate to online lotto?</h4>
                            <h1 class="title">choose a <span class="special">quick pick</span> for <span class="b-spc">Lotto online</span></h1>
                            <div class="all-btns">
                                <a href="lotteries.html" class="btn-pok">Play Lottery <i class="fa-solid fa-angle-right"></i></a>
                                <a href="about.html" class="btn-pok-2">Explore More <i class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-8 col-sm-9 d-xl-flex d-lg-flex d-block align-items-end">
                        <div class="part-img">
                            <img class="main-img" src="{{asset('website_assets/img/banner-img.png')}}" alt="">
                            <img src="{{asset('website_assets/img/power-ball.png')}}" alt="" class="power-ball pok-1">
                            <img src="{{asset('website_assets/img/power-ball2.png')}}" alt="" class="power-ball pok-2">
                            <img src="{{asset('website_assets/img/power-ball3.png')}}" alt="" class="power-ball pok-3">
                            <img src="{{asset('website_assets/img/power-ball4.png')}}" alt="" class="power-ball pok-4">
                            <img src="{{asset('website_assets/img/power-ball5.png')}}" alt="" class="power-ball pok-5">
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- banner end -->

        <!-- lottery begin -->
        <div class="lotteries">
            <div class="bg-shape-2">
                <img src="{{asset('website_assets/img/bg-shape/bg-shape-2.png')}}" alt="">
            </div>
            <div class="bg-shape-1">
                <img src="{{asset('website_assets/img/bg-shape/bg-shape-1.png')}}" alt="">
            </div>
            <div class="container">
                    <div class="row">
                        <div class="col-md-10">

                <div class="part-picking-number">

                    <div class="animation-body animated">
                        <div class="picking-number-body">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-numbers" role="tabpanel" aria-labelledby="pills-numbers-tab">
                                    <form action="{{route('submit_data')}}" method="GET">
                                            <input type="hidden" value="urwashi" name=" _name" id="my_name" class="part-lottery-info">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-10 col-lg-10 col-sm-10">

                                                    <table class="table table-striped" id="tbUser">
                                                        <thead>
                                                        <tr>
                                                            <th>Number Select</th>
                                                            <th>Minus</th>
                                                            <th>Quantity</th>
                                                            <th>Add</th>
                                                            <th>Remove</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            <input type="hidden" value="{{$data['lottery_name']}}"  name="lottery_name">
                                                            <input type="hidden" value="{{$data['lottery_set_id']}}"  name="lottery_set_id">
                                                        @foreach($data['token'] as $item)
                                                        <tr>
                                                            <td>
                                                                {{$item}}
                                                                <input type="hidden" value="{{$item}}" name="number_select[]">
                                                            </td>
                                                            <td>
                                                                <button name="button" type="button" class="quantity-right-minue btn btn-warning btn-number sub" >-</button>
                                                            </td>
                                                            <td>
                                                                <input name="quantity[]" type="number" min="1" id="1" value="1" class="field" />
                                                            </td>
                                                            <td>
                                                                <button name="button" type="button" class="quantity-right-plus btn btn-success btn-number add">+</button>
                                                            </td>
                                                            <td>
                                                            <button type="button" class="quantity-right-plus btn btn-danger btn-number btnDelete sub" data-type="plus" data-field="">
                                                                <span class="fa fa-cancel"></span>
                                                            </button>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                <button type="submit" value="Continue" class="btn-pok">Submit</button>
                                            </form>


                                                        <!-- <label>
                                                        <input type="checkbox" name="token[]" value="1" class="card-input-element" />
                                                            <div class="panel panel-default card-input">
                                                            <div class="panel-body">
                                                                01
                                                            </div>
                                                            </div>
                                                        </label>
                                                        <label>
                                                        <input type="checkbox" name="token[]" value="2" class="card-input-element" />
                                                            <div class="panel panel-default card-input">
                                                            <div class="panel-body">
                                                                02
                                                            </div>
                                                            </div>
                                                        </label>
                                                        <label>
                                                        <input type="checkbox" name="token[]" value="3" class="card-input-element" />
                                                            <div class="panel panel-default card-input">
                                                            <div class="panel-body">
                                                                03
                                                            </div>
                                                            </div>
                                                        </label>
                                                        <label>
                                                        <input type="checkbox" name="token[]" value="4" class="card-input-element" />
                                                            <div class="panel panel-default card-input">
                                                            <div class="panel-body">
                                                                04
                                                            </div>
                                                            </div>
                                                        </label>
                                                        <label>
                                                        <input type="checkbox" name="token[]" value="5" class="card-input-element" />
                                                            <div class="panel panel-default card-input">
                                                            <div class="panel-body">
                                                                05
                                                            </div>
                                                            </div>
                                                        </label>
                                                        <label>
                                                        <input type="checkbox" name="token[]" value="6" class="card-input-element" />
                                                            <div class="panel panel-default card-input">
                                                            <div class="panel-body">
                                                                06
                                                            </div>
                                                            </div>
                                                        </label>
                                                        <label>
                                                        <input type="checkbox" name="token[]" value="7" class="card-input-element" />
                                                            <div class="panel panel-default card-input">
                                                            <div class="panel-body">
                                                                07
                                                            </div>
                                                            </div>
                                                        </label>
                                                        <label>
                                                        <input type="checkbox" name="token[]" value="8" class="card-input-element" />
                                                            <div class="panel panel-default card-input">
                                                            <div class="panel-body">
                                                                08
                                                            </div>
                                                            </div>
                                                        </label>
                                                        <label>
                                                        <input type="checkbox" name="token[]" value="9" class="card-input-element" />
                                                            <div class="panel panel-default card-input">
                                                            <div class="panel-body">
                                                                09
                                                            </div>
                                                            </div>
                                                        </label>
                                                        <label>
                                                        <input type="checkbox" name="token[]" value="10" class="card-input-element" />
                                                            <div class="panel panel-default card-input">
                                                            <div class="panel-body">
                                                                10
                                                            </div>
                                                            </div>
                                                        </label> -->
                                                        <!-- <button type="submit" value="Continue" class="btn-pok">Continue</button> -->
                                                    </div>
                                                </div>
                                            </div>

                                    <!-- <div class="picking-number-palate">
                                        <div class="number-box ">
                                             <button class="single-number" >
                                                01
                                            </button> <button class="single-number" >
                                                02
                                            </button>
                                             <button class="single-number" >
                                                03
                                            </button>
                                            <button class="single-number" >
                                                04
                                            </button>
                                            <button class="single-number" >
                                                05
                                            </button>
                                            <button class="single-number" >
                                                06
                                            </button>
                                            <button class="single-number" >
                                                07
                                            </button>
                                            <button class="single-number" >
                                                08
                                            </button>
                                            <button class="single-number" >
                                                09
                                            </button>
                                            <button class="single-number" >
                                                10
                                            </button>
                                        </div>
                                    </div> -->
                                    <!-- <div class="picking-number-final-step">
                                        <div class="part-text">
                                            <p><span class="b-txt">Note :</span>  Problem set compensation the harmonics, understood. Hundreds times,<br/> of until they employed sure a behind boundless their for.</p>
                                        </div>
                                        <div class="part-btn">
                                        </div>
                                    </div> -->
                                </div>
                                <div class="tab-pane fade" id="pills-winners" role="tabpanel" aria-labelledby="pills-winners-tab">
                                    <div class="lottery-winners">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6">
                                                <h4 class="lottery-winners-title">Most recent Winners</h4>
                                                <div class="single-winner">
                                                    <div class="part-img">
                                                        <img src="{{asset('website_assets/img/lottery/winner-1.jpg')}}" alt="">
                                                    </div>
                                                    <div class="part-text">
                                                        <p><span class="user-name">Richard william</span> has won 2 minutes ago.</p>
                                                        <ul>
                                                            <li class="plaing-stats">
                                                                <span class="ps-title">Match :</span>
                                                                <span class="ps-descr">02+</span>
                                                            </li>
                                                            <li class="plaing-stats">
                                                                <span class="ps-title">payout :</span>
                                                                <span class="ps-descr">$536.25</span>
                                                            </li>
                                                        </ul>
                                                        <div class="winning-number">
                                                            <span class="single-number ">01</span>
                                                            <span class="single-number ">25</span>
                                                            <span class="single-number ">34</span>
                                                            <span class="single-number ">43</span>
                                                            <span class="single-number ">55</span>
                                                            <span class="single-number  special">02</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-winner">
                                                    <div class="part-img">
                                                        <img src="{{asset('website_assets/img/lottery/winner-3.jpg')}}" alt="">
                                                    </div>
                                                    <div class="part-text">
                                                        <p><span class="user-name">Rebecca Gaby</span>  has won 13 minutes ago.</p>
                                                        <ul>
                                                            <li class="plaing-stats">
                                                                <span class="ps-title">Match :</span>
                                                                <span class="ps-descr"> 08+</span>
                                                            </li>
                                                            <li class="plaing-stats">
                                                                <span class="ps-title">payout :</span>
                                                                <span class="ps-descr">$325.02</span>
                                                            </li>
                                                        </ul>
                                                        <div class="winning-number">
                                                            <span class="single-number selected">10</span>
                                                            <span class="single-number selected">22</span>
                                                            <span class="single-number selected">30</span>
                                                            <span class="single-number selected">47</span>
                                                            <span class="single-number selected">53</span>
                                                            <span class="single-number selected special">10</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <h4 class="lottery-winners-title">All time top winners</h4>
                                                <div class="single-winner">
                                                    <div class="part-img">
                                                        <img src="{{asset('website_assets/img/lottery/winner-2.jpg')}}" alt="">
                                                    </div>
                                                    <div class="part-text">
                                                        <p><span class="user-name">Summer Colson</span>  has won 3 months ago.</p>
                                                        <ul>
                                                            <li class="plaing-stats">
                                                                <span class="ps-title">Match :</span>
                                                                <span class="ps-descr">08+</span>
                                                            </li>
                                                            <li class="plaing-stats">
                                                                <span class="ps-title">payout :</span>
                                                                <span class="ps-descr">$1,965.00</span>
                                                            </li>
                                                        </ul>
                                                        <div class="winning-number">
                                                            <span class="single-number selected">20</span>
                                                            <span class="single-number selected">35</span>
                                                            <span class="single-number selected">54</span>
                                                            <span class="single-number selected">69</span>
                                                            <span class="single-number selected">35</span>
                                                            <span class="single-number selected special">17</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-winner">
                                                    <div class="part-img">
                                                        <img src="{{asset('website_assets/img/lottery/winner-4.jpg')}}" alt="">
                                                    </div>
                                                    <div class="part-text">
                                                        <p><span class="user-name">Kai Dellit</span>  has won 7 months ago.</p>
                                                        <ul>
                                                            <li class="plaing-stats">
                                                                <span class="ps-title">Match :</span>
                                                                <span class="ps-descr">08+</span>
                                                            </li>
                                                            <li class="plaing-stats">
                                                                <span class="ps-title">payout :</span>
                                                                <span class="ps-descr">$2,120.25</span>
                                                            </li>
                                                        </ul>
                                                        <div class="winning-number">
                                                            <span class="single-number selected">36</span>
                                                            <span class="single-number selected">21</span>
                                                            <span class="single-number selected">76</span>
                                                            <span class="single-number selected">54</span>
                                                            <span class="single-number selected">77</span>
                                                            <span class="single-number selected special">37</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="part-btn">
                                            <a href="lotteries.html" class="btn-pok">See full table <i class="fa-solid fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-info" role="tabpanel" aria-labelledby="pills-info-tab">
                                    <div class="lottery-info">
                                        <div class="part-text">
                                            <h4 class="title">What is super enaLotto?</h4>
                                            <p>EoMillions GO! is a Quick Draw lottery-style game based on the famous European lottery.
                                            The rules of the game are the same as those of the original lottery but the draw results are determined by a random number generator (RNG). Unlike the EuroMillions lottery with its two draws a week, EuroMillions GO! draws take place every hour, every day of the week!</p>
                                        </div>
                                        <div class="middle-part-elem">
                                            <div class="part-info">
                                                <div class="single-stat">
                                                    <h5 class="title">country:</h5>
                                                    <div class="country-descr">
                                                        <span class="cn-flag">
                                                            <img src="{{asset('website_assets/img/lottery/uk-flag.png')}}" alt="">
                                                        </span>
                                                        <span class="stats-txt">united kingdom</span>
                                                    </div>
                                                </div>
                                                <div class="single-stat">
                                                    <h5 class="title">Schedule:</h5>
                                                    <ul class="stats-descr">
                                                        <li class="stats-txt">Thursday 2:59 AM UTC</li>
                                                        <li class="stats-txt">Fridat 3:19 pM UTC</li>
                                                    </ul>
                                                </div>
                                                <div class="single-stat">
                                                    <h5 class="title">Guess Range:</h5>
                                                    <ul class="stats-descr">
                                                        <li class="stats-txt">5/69+1/29</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="latest-winning-number">
                                                <div class="lwn-header">
                                                    <h5 class="title">Latest Result:</h5>
                                                    <div class="date-selection">
                                                        <div class="dropdown">
                                                            <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                24 apr 2022
                                                            </button>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                <li><a class="dropdown-item" href="#0">24 apr 2022</a></li>
                                                                <li><a class="dropdown-item" href="#0">01 may 2022</a></li>
                                                                <li><a class="dropdown-item" href="#0">31 june 2022</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="lwn-number-palate">
                                                    <span class="single-number selected">20</span>
                                                    <span class="single-number selected">35</span>
                                                    <span class="single-number selected">54</span>
                                                    <span class="single-number selected">69</span>
                                                    <span class="single-number selected">35</span>
                                                    <span class="single-number selected special">17</span>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="part-text">
                                            <h4 class="title">How to play EuroMillions GO!</h4>
                                            <p>EoMillions GO! is a Quick Draw lottery-style game based on the famous European lottery.
                                                The rules of the game are the same as those of the original lottery but the draw results are determined by a random number generator (RNG). Unlike the EuroMillions lottery with its two draws a week,
                                                EuroMillions GO! draws take place every hour, every day of the week!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>


            </div>
        </div>
        <!-- lottery end -->

        <!-- about begin -->
        <!-- <div class="about">
            <img src="{{asset('website_assets/img/bg-shape/bg-shape-3.png')}}" alt="" class="bg-shape-3">
            <img src="{{asset('website_assets/img/bg-shape/bg-shape-4.png')}}" alt="" class="bg-shape-4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 d-xl-flex d-lg-flex d-block align-items-end justify-content-end">
                        <div class="part-img">
                            <img class="main-img" src="{{asset('website_assets/img/about/about-img.png')}}" alt="">
                            <img class="bg-img" src="{{asset('website_assets/img/about/img-2.png')}}" alt="">
                            <img class="shape-img" src="{{asset('website_assets/img/about/img-1.png')}}" alt="">
                            <img src="{{asset('website_assets/img/about/ball-1.png')}}" alt="" class="ball-1">
                            <img src="{{asset('website_assets/img/about/ball-2.png')}}" alt="" class="ball-2">
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="about-text">
                            <div class="section-title for-about-section">
                                <h3 class="sub-title">About us</h3>
                                <h2 class="title">We provide best Mega jackpot</h2>
                            </div>
                            <div class="part-bottom">
                                <div class="part-statics">
                                    <div class="single-statics">
                                        <div class="part-icon">
                                            <img src="{{asset('website_assets/img/about/icon-1.png')}}" alt="">
                                        </div>
                                        <div class="part-txt">
                                            <span class="number">25.3k</span>
                                            <span class="text">players</span>
                                        </div>
                                    </div>
                                    <div class="single-statics">
                                        <div class="part-icon">
                                            <img src="{{asset('website_assets/img/about/icon-2.png')}}" alt="">
                                        </div>
                                        <div class="part-txt">
                                            <span class="number">46+</span>
                                            <span class="text">lotteries</span>
                                        </div>
                                    </div>
                                    <div class="single-statics">
                                        <div class="part-icon">
                                            <img src="{{asset('website_assets/img/about/icon-3.png')}}" alt="">
                                        </div>
                                        <div class="part-txt">
                                            <span class="number">270+</span>
                                            <span class="text">jackpot</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="part-descr">
                                    <p>Problem set compensation the harmonics, understood.
                                        Hundreds times, of until they employed sure a behind boundless their for
                                        boss's the certainly and gilded form of tend every of better an over when of
                                        than an are until time. <span class="txt-bold">Would of impenetrable</span>
                                        just the out diesel as it near at that.
                                    </p>
                                    <ul>
                                        <li>He of his in its price always and feedback of films.</li>
                                        <li>towards sight as not and each and, good.</li>
                                        <li>tone, the of preparations never a even viable a.</li>
                                    </ul>
                                    <a href="about.html" class="btn-pok">Know more <i class="fa-solid fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- about end -->

        <!-- cta begin -->
        <!-- <div class="cta">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-9 col-sm-8 d-xl-flex d-lg-flex d-block align-items-center">
                        <div class="part-text">
                            <h2 class="title">If you have any query about lottery or anything!</h2>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="btn-cta">
                            <a href="contact.html" class="btn-pok">Contact Us <i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- cta end -->

        <!-- working process begin -->
        <!-- <div class="working-process">
            <img src="{{asset('website_assets/img/bg-shape/bg-shape-3.png')}}" alt="" class="bg-shape-3">
            <img src="{{asset('website_assets/img/bg-shape/wp-shape-2.png')}}" alt="" class="wp-bg-shape-2">
            <img src="{{asset('website_assets/img/bg-shape/wp-shape-3.png')}}" alt="" class="wp-bg-shape-3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8">
                        <div class="section-title">
                            <h3 class="sub-title">How it works</h3>
                            <h2 class="title">easiest way to picking a number</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="single-process">
                            <div class="part-icon">
                                <img src="{{asset('website_assets/img/working-process/icon-1.png')}}" alt="">
                            </div>
                            <div class="part-text">
                                <span class="step-number">1.</span>
                                <span class="step-title">Set a budget.</span>
                                <p>Playing the lottery is gambling, so keep it fun by treating it as part of your entertainment budget.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="single-process pp-2">
                            <div class="part-text">
                                <span class="step-title">Choose your lottery.</span>
                                <p>There are 5 exciting draw-based jackpot you can try one or all of them.
                                    like powerball etc.</p>
                                <span class="step-number two">2.</span>
                            </div>
                            <div class="part-icon">
                                <img src="{{asset('website_assets/img/working-process/icon-2.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="single-process">
                            <div class="part-icon">
                                <img src="{{asset('website_assets/img/working-process/icon-3.png')}}" alt="">
                            </div>
                            <div class="part-text">
                                <span class="step-number">3.</span>
                                <span class="step-title">Pick your numbers.</span>
                                <p>Since it’s all by chance, enjoy picking your numbers or seeing what the lottery terminal generates.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="single-process pp-2">
                            <div class="part-text">
                                <span class="step-title">Check your numbers.</span>
                                <p>If you are a winner, claim your prize: be sure to visit a retailer before your prize expires in 12 months.</p>
                                <span class="step-number four">4.</span>
                            </div>
                            <div class="part-icon">
                                <img src="{{asset('website_assets/img/working-process/icon-4.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- working process end -->

        <!-- feature begin -->
        <!-- <div class="feature">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-8 col-md-8">
                        <div class="part-left">
                            <div class="section-title">
                                <h3 class="sub-title">Why we are best</h3>
                                <h2 class="title">We are proud to provide best services to our clients</h2>
                            </div>
                            <div class="part-img">
                                <img class="main-img" src="{{asset('website_assets/img/feature/feature-img.png')}}" alt="">
                                <img class="bg-img" src="{{asset('website_assets/img/about/img-2.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-12">
                        <div class="feature-list">
                            <div class="row">
                                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-feature">
                                        <div class="part-icon">
                                            <img src="{{asset('website_assets/img/feature/icon-1.png')}}" alt="">
                                        </div>
                                        <div class="part-text">
                                            <span class="title">SSL security layer</span>
                                            <p>it's the standard technology for keeping an internet connection secure and safeguarding any sensitive.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-feature">
                                        <div class="part-icon">
                                            <img src="{{asset('website_assets/img/feature/icon-2.png')}}" alt="">
                                        </div>
                                        <div class="part-text">
                                            <span class="title">Quick Notifications</span>
                                            <p>When you’ve successfully matched enough numbers to win a prize, we notify you via email and/or SMS</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-feature">
                                        <div class="part-icon">
                                            <img src="{{asset('website_assets/img/feature/icon-3.png')}}" alt="">
                                        </div>
                                        <div class="part-text">
                                            <span class="title">No Lost Tickets</span>
                                            <p>Since it’s all by chance, enjoy picking your numbers or seeing what the lottery terminal generates.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-feature">
                                        <div class="part-icon">
                                            <img src="{{asset('website_assets/img/feature/icon-4.png')}}" alt="">
                                        </div>
                                        <div class="part-text">
                                            <span class="title">No Long Lines</span>
                                            <p>Since it’s all by chance, enjoy picking your numbers or seeing what the lottery terminal generates.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-feature">
                                        <div class="part-icon">
                                            <img src="{{asset('website_assets/img/feature/icon-5.png')}}" alt="">
                                        </div>
                                        <div class="part-text">
                                            <span class="title">Secure Payments</span>
                                            <p>Since it’s all by chance, enjoy picking your numbers or seeing what the lottery terminal generates.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-feature">
                                        <div class="part-icon">
                                            <img src="{{asset('website_assets/img/feature/icon-6.png')}}" alt="">
                                        </div>
                                        <div class="part-text">
                                            <span class="title">24/7 friendly support</span>
                                            <p>Since it’s all by chance, enjoy picking your numbers or seeing what the lottery terminal generates.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- feature end -->

        <!-- testimonial begin -->
        <!-- <div class="testimonial">
            <div class="bg-shape-1">
                <img src="{{asset('website_assets/img/bg-shape/bg-shape-1.png')}}" alt="">
            </div>
            <img src="{{asset('website_assets/img/bg-shape/bg-shape-3.png')}}" alt="" class="bg-shape-3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8">
                        <div class="section-title">
                            <h3 class="sub-title">testimonials</h3>
                            <h2 class="title">client’s valuable feedback</h2>
                        </div>
                    </div>
                </div>
                <div class="testimonial-carousel owl-carousel owl-theme">
                    <div class="single-testimonial">
                        <div class="part-user-info">
                            <span class="user-name">ruhio S albert</span>
                            <span class="lottery-category">MagaMill. Winner</span>
                            <span class="winning-date">( apr - 2022 )</span>
                        </div>
                        <div class="user-img-cover">
                            <div class="part-img">
                                <img src="{{asset('website_assets/img/testimonial/user-1.png')}}" alt="">
                            </div>
                        </div>
                        <div class="part-feedback">
                            <p><img class="quot-1" src="{{asset('website_assets/img/testimonial/quot-icon-1.png')}}" alt="">
                                Since it’s all by chance, enjoy picking your numbers or seeing what the
                            lottery terminal generates Since it’s all by chance.
                            <img class="quot-2" src="{{asset('website_assets/img/testimonial/quot-icon-2.png')}}" alt="">
                        </p>
                        </div>
                    </div>
                    <div class="single-testimonial">
                        <div class="part-user-info">
                            <span class="user-name">Leah Stanley</span>
                            <span class="lottery-category">Powerball. Winner</span>
                            <span class="winning-date">( Jan - 2022 )</span>
                        </div>
                        <div class="user-img-cover">
                            <div class="part-img">
                                <img src="{{asset('website_assets/img/testimonial/user-2.png')}}" alt="">
                            </div>
                        </div>
                        <div class="part-feedback">
                            <p><img class="quot-1" src="{{asset('website_assets/img/testimonial/quot-icon-1.png')}}" alt="">
                                Since it’s all by chance, enjoy picking your numbers or seeing what the
                            lottery terminal generates Since it’s all by chance.
                            <img class="quot-2" src="{{asset('website_assets/img/testimonial/quot-icon-2.png')}}" alt="">
                        </p>
                        </div>
                    </div>
                    <div class="single-testimonial">
                        <div class="part-user-info">
                            <span class="user-name">Megan Clayton</span>
                            <span class="lottery-category">US Lotto. Winner</span>
                            <span class="winning-date">( Dec - 2021 )</span>
                        </div>
                        <div class="user-img-cover">
                            <div class="part-img">
                                <img src="{{asset('website_assets/img/testimonial/user-3.png')}}" alt="">
                            </div>
                        </div>
                        <div class="part-feedback">
                            <p><img class="quot-1" src="{{asset('website_assets/img/testimonial/quot-icon-1.png')}}" alt="">
                                Since it’s all by chance, enjoy picking your numbers or seeing what the
                            lottery terminal generates Since it’s all by chance.
                            <img class="quot-2" src="{{asset('website_assets/img/testimonial/quot-icon-2.png')}}" alt="">
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- testimonial end -->

        <!-- footer begin -->
        <div class="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-5 col-md-7 col-sm-9">
                            <div class="part-about">
                                <div class="footer-logo">
                                    <a href="index.html">
                                        <!-- <img src="{{asset('website_assets/img/logo.png')}}" alt="" class="logo"> -->
                                    </a>
                                </div>
                                <p> </p>
                                <ul class="importants-links">
                                    <li class="single-link">
                                        <a href="#0">policy</a>
                                    </li>
                                    <li class="single-link">
                                        <a href="#0">Terms</a>
                                    </li>
                                    <li class="single-link">
                                        <a href="#0">license</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-bottom-content">
                        <p class="copyright-text">copyright © 2023. all right reserved by</p>
                        <ul class="social-link">
                            <li class="single-social">
                                <a href="#0">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="single-social">
                                <a href="#0">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            </li>
                            <li class="single-social">
                                <a href="#0">
                                    <i class="fa-brands fa-pinterest-p"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="footer-menu">
                            <ul>
                                <li>
                                    <a href="index.html" class="single-menu">homepage</a>
                                </li>
                                <li>
                                    <a href="about.html" class="single-menu">About Us</a>
                                </li>
                                <li>
                                    <a href="lotteries.html" class="single-menu">Lotteries</a>
                                </li>
                                <li>
                                    <a href="blog-posts.html" class="single-menu">Blog</a>
                                </li>
                                <li>
                                    <a href="{{route('user-login')}}" class="single-menu">Login</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer end -->

        <!-- back to button begin -->
        <div class="back-to-top-btn">
            <a href="#">
                <i class="fa-solid fa-arrow-turn-up"></i>
            </a>
        </div>
        <!-- back to top button end -->


        <script>
            $(document).ready(function(){

// Add Minus in jquery
$(this).parent().prev().children(".field")

$('.add').click(function() {
  if (!isNaN($(this).parent().prev().children(".field").val()))

    $(this).parent().prev().children(".field").val(+$(this).parent().prev().children(".field").val() + 1);
  else
    $(this).parent().prev().children(".field").val(0);
});
$('.sub').click(function() {
  if ((!isNaN($(this).parent().next().children(".field").val())) && ($(this).parent().next().children(".field").val() > 0))
    $(this).parent().next().children(".field").val(+$(this).parent().next().children(".field").val() - 1);
  else
    $(this).parent().next().children(".field").val(0);
});

// Add minus in jquery



// alert('asd');
// var quantitiy=0;
//    $('.quantity-right-plus').click(function(e){

//        // Stop acting like a button
//        e.preventDefault();
//        // Get the field name
//        var quantity = parseInt($('#quantity').val());

//         // If is not undefined

//             $('#quantity').val(quantity + 1);


//             // Increment

//     });

//      $('.quantity-left-minus').click(function(e){
//         // Stop acting like a button
//         e.preventDefault();
//         // Get the field name
//         var quantity = parseInt($('#quantity').val());

//         // If is not undefined

//             // Increment
//             if(quantity>0){
//             $('#quantity').val(quantity - 1);
//             }
//     });


    $("#tbUser").on('click', '.btnDelete', function () {
    $(this).closest('tr').remove();
});

});
        </script>
        <!-- jQuery js -->
        <script src="{{asset('website_assets/js/jquery-3.6.0.min.js')}}"></script>
        <!-- bootstrap js -->
        <script src="{{asset('website_assets/js/bootstrap.bundle.min.js')}}"></script>
        <!-- owl carousel js -->
        <script src="{{asset('website_assets/js/owl.carousel.min.js')}}"></script>
        <!-- main js -->
        <script src="{{asset('website_assets/js/main.js')}}"></script>
        <!-- lottery js initialize -->
        <script src="{{asset('website_assets/js/lotteries-initialization.js')}}"></script>
        <script src="{{asset('assets/vendor/libs/toastr/toastr.js')}}"></script>
        <script src="{{asset('assets/js/ui-toasts.js')}}"></script>
        <script>

            var type = "{{ Session::get('type') }}";
              switch (type) {
                  case 'success':
                      toastr.success("{{ Session::get('message') }}");

                      break;

                  case 'error':
                      toastr.error("{{ Session::get('message') }}");
                      break;

              }
        </script>
    </body>

<!-- Mirrored from iamubaidah.com/html/poklotto/poklotto/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jul 2023 13:48:23 GMT -->
</html>
