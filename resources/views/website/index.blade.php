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
        <link rel="stylesheet" href="{{asset('website_assets/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('website_assets/css/animate.min.css')}}">
        <!-- load all Font Awesome styles -->
        <link rel="stylesheet" href="{{asset('website_assets/css/all.min.css')}}">
        <!-- owl carousel css -->
        <link rel="stylesheet" href="{{asset('website_assets/css/owl.carousel.min.css')}}">
        <!-- main css -->
        <link rel="stylesheet" href="{{asset('website_assets/css/style.css')}}">
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





 body {font-family: "Lato", sans-serif;}

ul.tab {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Float the list items side by side */
ul.tab li {float: left;}

/* Style the links inside the list items */
ul.tab li a {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of links on hover */
ul.tab li a:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
ul.tab li a:focus, .active {
    background-color: #ddd;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    -webkit-animation: fadeEffect 1s;
    animation: fadeEffect 1s;
}

@-webkit-keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
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
                                            <a class="nav-link " href="{{route('home_page')}}">Homepage</a>
                                        </li>
                                        @if(Auth::user())
                                        <li class="nav-item">
                                            <a class="nav-link " href="{{route('dashboard')}}">Dashbaord</a>
                                        </li>
                                        @endif
                                        {{-- <li class="nav-item">
                                            <a class="nav-link" href="about.html">About us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="lotteries.html">Lotteries</a>
                                        </li>
                                        <li class="nav-item dropdown">
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
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact.html">Contact</a>
                                        </li> --}}
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    @if(Auth::user())
                    <div class="col-xl-3 col-lg-3 d-xl-flex d-lg-flex d-none align-items-center justify-content-end">
                        <a href="{{route('logout')}}" class="btn-pok mid">
                            Log out
                        </a>
                    </div>
                    @else
                    <div class="col-xl-3 col-lg-3 d-xl-flex d-lg-flex d-none align-items-center justify-content-end">
                        <a href="{{route('user-login')}}" class="btn-pok mid">
                            Login
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- header end -->

        <!-- banner begin -->
        {{-- <div class="banner">
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
        </div> --}}
        {{-- <div class="lotteries">
            <div class="bg-shape-2">
                <img src="{{asset('website_assets/img/bg-shape/bg-shape-2.png')}}" alt="">
            </div>
            <div class="bg-shape-1">
                <img src="{{asset('website_assets/img/bg-shape/bg-shape-1.png')}}" alt="">
            </div>
            <div class="container">
                <div class="part-picking-number">
                    <div class="lotteries-selection-menu">
                        <ul>
                            <li>
                                <a href="#0" class="single-lottery-item active">
                                    <span class="lottery-icon">
                                        <img src="{{asset('website_assets/img/lottery/euro-jackpot.png')}}" alt="">
                                    </span>
                                    <span class="lottery-name">Urvashi</span>
                                    <span class="lottery-set-id" style="display:none">1</span>
                                </a>
                            </li>
                            <li>
                                <a href="#1" class="single-lottery-item active">
                                    <span class="lottery-icon">
                                        <img src="{{asset('website_assets/img/lottery/euro-jackpot.png')}}" alt="">
                                    </span>
                                    <span class="lottery-name">Monika</span>
                                    <span class="lottery-set-id" style="display:none">1</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="animation-body animated" id="check1">
                        <div class="picking-number-body">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-numbers" role="tabpanel" aria-labelledby="pills-numbers-tab">
                                    <form action="{{route('hit_me')}}" method="GET">
                                            <input type="hidden" value="urwashi" name="lottery_name" id="my_name" class="part-lottery-info">
                                            <input type="hidden"
                                            value="{{ $first_lottery ? $first_lottery->id : '' }}" name="lottery_set_id" id="lottery_set_id" class="lottery-set-id">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12 col-lg-12 col-sm-4">
                                                        <label>
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
                                                        </label>
                                                        <button type="submit" value="Continue" class="btn-pok">Continue</button>
                                                    </div>
                                                </div>
                                            </div>

                                    </form>

                                    <div class="picking-number-final-step">
                                        <div class="part-text">
                                            <p><span class="b-txt">Note :</span>  Problem set compensation the harmonics, understood. Hundreds times,<br/> of until they employed sure a behind boundless their for.</p>
                                        </div>
                                        <div class="part-btn">

                                        </div>
                                    </div>
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
        </div> --}}
{{-- <h2>Tabs</h2>
<p>Click on the buttons inside the tabbed menu:</p>
<div class="container">
    <div class="row">
        <ul class="tab">
            <li><a href="#" class="tablinks1 active" onclick="openCity(event, 'London')">Monika</a></li>
            <li><a href="#" class="tablinks1" onclick="openCity(event, 'Paris')">Urwashi</a></li>
            <li><a href="#" class="tablinks1" onclick="openCity(event, 'Tokyo')">Dev</a></li>
          </ul>

          <div id="London" class="tabcontent" style="display:block">
            <h3>Monika</h3>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Lottery</th>
                    <th scope="col">Win Prize</th>
                    <th scope="col">Win Number</th>
                    <th scope="col">Total Winner</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Kash</td>
                    <td>Monika</td>
                    <td>100</td>
                    <td>6</td>
                    <td>50</td>
                  </tr>

                  <tr>
                    <td>Rohti</td>
                    <td>Monika</td>
                    <td>100</td>
                    <td>6</td>
                    <td>50</td>
                  </tr>
                  <tr>
                    <td>Delpi</td>
                    <td>Monika</td>
                    <td>100</td>
                    <td>9</td>
                    <td>28</td>
                  </tr>
                  <tr>
                    <td>bhagi</td>
                    <td>Monika</td>
                    <td>100</td>
                    <td>1</td>
                    <td>38</td>
                  </tr>
                  <tr>
                    <td>Sach</td>
                    <td>Monika</td>
                    <td>100</td>
                    <td>6</td>
                    <td>11</td>
                  </tr>
                  <tr>
                    <td>Sunri</td>
                    <td>Monika</td>
                    <td>100</td>
                    <td>4</td>
                    <td>20</td>
                  </tr>
                </tbody>
            </table>
          </div>

          <div id="Paris" class="tabcontent">
            <h3>Urwashi</h3>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Lottery</th>
                    <th scope="col">Win Prize</th>
                    <th scope="col">Win Number</th>
                    <th scope="col">Total Winner</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Kash</td>
                    <td>Urwashi</td>
                    <td>111</td>
                    <td>6</td>
                    <td>50</td>
                  </tr>

                  <tr>
                    <td>Rohti</td>
                    <td>Urwashi</td>
                    <td>111</td>
                    <td>6</td>
                    <td>50</td>
                  </tr>
                  <tr>
                    <td>Delpi</td>
                    <td>Urwashi</td>
                    <td>111</td>
                    <td>9</td>
                    <td>28</td>
                  </tr>
                  <tr>
                    <td>bhagi</td>
                    <td>Urwashi</td>
                    <td>111</td>
                    <td>1</td>
                    <td>38</td>
                  </tr>
                  <tr>
                    <td>Sach</td>
                    <td>Urwashi</td>
                    <td>111</td>
                    <td>6</td>
                    <td>11</td>
                  </tr>
                  <tr>
                    <td>Sunri</td>
                    <td>Urwashi</td>
                    <td>111</td>
                    <td>4</td>
                    <td>20</td>
                  </tr>
                </tbody>
            </table>
          </div>

          <div id="Tokyo" class="tabcontent">
            <h3>Dev</h3>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Lottery</th>
                    <th scope="col">Win Prize</th>
                    <th scope="col">Win Number</th>
                    <th scope="col">Total Winner</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Kash</td>
                    <td>Dev</td>
                    <td>500</td>
                    <td>6</td>
                    <td>50</td>
                  </tr>

                  <tr>
                    <td>Rohti</td>
                    <td>Dev</td>
                    <td>500</td>
                    <td>6</td>
                    <td>50</td>
                  </tr>
                  <tr>
                    <td>Delpi</td>
                    <td>Dev</td>
                    <td>500</td>
                    <td>9</td>
                    <td>28</td>
                  </tr>
                  <tr>
                    <td>bhagi</td>
                    <td>Dev</td>
                    <td>500</td>
                    <td>1</td>
                    <td>38</td>
                  </tr>
                  <tr>
                    <td>Sach</td>
                    <td>Dev</td>
                    <td>500</td>
                    <td>6</td>
                    <td>11</td>
                  </tr>
                  <tr>
                    <td>Sunri</td>
                    <td>Dev</td>
                    <td>500</td>
                    <td>4</td>
                    <td>20</td>
                  </tr>
                </tbody>
            </table>
          </div>

    </div>
</div> --}}



        <!-- banner end -->

        <!-- lottery begin -->
        @if(!$lottery->isEmpty())
        <div class="lotteries">
            <div class="bg-shape-2">
                <img src="{{asset('website_assets/img/bg-shape/bg-shape-2.png')}}" alt="">
            </div>
            <div class="bg-shape-1">
                <img src="{{asset('website_assets/img/bg-shape/bg-shape-1.png')}}" alt="">
            </div>
            <div class="container">
                <div class="part-picking-number">
                    <div class="lotteries-selection-menu">
                        <ul>
                            @foreach($lottery as $item)
                            <li>
                                <a href="#0" class="single-lottery-item ">
                                    <span class="lottery-icon">
                                        <img src="{{asset('website_assets/img/lottery/euro-jackpot.png')}}" alt="">
                                    </span>
                                    <span class="lottery-name">{{$item->lottery->name}}</span>
                                    <span class="lottery-set-id" style="display:none">{{$item->id}}</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="animation-body animated" id="check1">
                        <div class="picking-number-body">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" style="background:white" id="pills-numbers" role="tabpanel" aria-labelledby="pills-numbers-tab">
                                    <form action="{{route('hit_me')}}" method="GET">
                                            <input type="hidden" value="urwashi" name="lottery_name" id="my_name" class="part-lottery-info">
                                            <input type="hidden"
                                            value="{{ $first_lottery ? $first_lottery->id : '' }}" name="lottery_set_id" id="lottery_set_id" class="lottery-set-id">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12 col-lg-12 col-sm-4">
                                                        <label>
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
                                                        </label>
                                                        <button type="submit" value="Continue" class="btn-pok">Continue</button>
                                                    </div>
                                                </div>
                                            </div>

                                    </form>

                                    {{-- <div class="picking-number-final-step">
                                        <div class="part-text">
                                            <p><span class="b-txt">Note :</span>  Problem set compensation the harmonics, understood. Hundreds times,<br/> of until they employed sure a behind boundless their for.</p>
                                        </div>
                                        <div class="part-btn">

                                        </div>
                                    </div> --}}
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

                    <div class="animation-body animated" id="check2" style="display:none">
                        <div class="picking-number-body">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" style="background:#fff" id="pills-numbers" role="tabpanel" aria-labelledby="pills-numbers-tab">
                                    <form action="{{route('hit_me')}}" method="GET">
                                            <input type="hidden" value="dev" name="lottery_name" id="my_name" class="part-lottery-info">
                                            <input type="hidden"
                                            value="{{ $first_lottery ? $first_lottery->id : '' }}" name="lottery_set_id" id="lottery_set_id" class="lottery-set-id">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-6 col-lg-6 col-sm-4">
                                                        <select name="number_1" class="form-control" id="mySelect" onchange="myFunction()" >
                                                            <option value="" disabled selected>Select Number</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-6 col-lg-6 col-sm-4" id="above_selected">
                                                        <select name="number_2" class="form-control" id="second" >
                                                            <option value="" disabled selected>Select Number</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-4 col-lg-4 col-sm-4">
                                                        <br>
                                                        <button type="submit" value="Continue" class="btn-pok" style="text-align: center">Continue</button>
                                                    </div>


                                                    {{-- <div class="col-md-12 col-lg-12 col-sm-4">



                                                        <label>
                                                        <input type="checkbox" name="token[]" value="12" class="card-input-element" />
                                                            <div class="panel panel-default card-input">
                                                            <div class="panel-body">
                                                                12
                                                            </div>
                                                            </div>
                                                        </label>
                                                        <label>
                                                        <input type="checkbox" name="token[]" value="13" class="card-input-element" />
                                                            <div class="panel panel-default card-input">
                                                            <div class="panel-body">
                                                                13
                                                            </div>
                                                            </div>
                                                        </label>
                                                        <label>
                                                            <input type="checkbox" name="token[]" value="14" class="card-input-element" />
                                                                <div class="panel panel-default card-input">
                                                                <div class="panel-body">
                                                                    14
                                                                </div>
                                                                </div>
                                                            </label>
                                                        <label>
                                                        <input type="checkbox" name="token[]" value="15" class="card-input-element" />
                                                            <div class="panel panel-default card-input">
                                                            <div class="panel-body">
                                                                15
                                                            </div>
                                                            </div>
                                                        </label>

                                                            <label>
                                                            <input type="checkbox" name="token[]" value="16" class="card-input-element" />
                                                                <div class="panel panel-default card-input">
                                                                <div class="panel-body">
                                                                    16
                                                                </div>
                                                                </div>
                                                            </label>
                                                            <label>
                                                            <input type="checkbox" name="token[]" value="21" class="card-input-element" />
                                                                <div class="panel panel-default card-input">
                                                                <div class="panel-body">
                                                                    21
                                                                </div>
                                                                </div>
                                                            </label>

                                                            <label>
                                                                <input type="checkbox" name="token[]" value="23" class="card-input-element" />
                                                                    <div class="panel panel-default card-input">
                                                                    <div class="panel-body">
                                                                        23
                                                                    </div>
                                                                    </div>
                                                                </label>
                                                            <label>
                                                            <input type="checkbox" name="token[]" value="24" class="card-input-element" />
                                                                <div class="panel panel-default card-input">
                                                                <div class="panel-body">
                                                                    24
                                                                </div>
                                                                </div>
                                                            </label>

                                                                <label>
                                                                <input type="checkbox" name="token[]" value="25" class="card-input-element" />
                                                                    <div class="panel panel-default card-input">
                                                                    <div class="panel-body">
                                                                        25
                                                                    </div>
                                                                    </div>
                                                                </label>
                                                                <label>
                                                                <input type="checkbox" name="token[]" value="26" class="card-input-element" />
                                                                    <div class="panel panel-default card-input">
                                                                    <div class="panel-body">
                                                                        26
                                                                    </div>
                                                                    </div>
                                                                </label>


                                                                <label>
                                                                    <input type="checkbox" name="token[]" value="31" class="card-input-element" />
                                                                        <div class="panel panel-default card-input">
                                                                        <div class="panel-body">
                                                                            31
                                                                        </div>
                                                                        </div>
                                                                    </label>

                                                                    <label>
                                                                        <input type="checkbox" name="token[]" value="32" class="card-input-element" />
                                                                            <div class="panel panel-default card-input">
                                                                            <div class="panel-body">
                                                                                32
                                                                            </div>
                                                                            </div>
                                                                        </label>
                                                                    <label>
                                                                    <input type="checkbox" name="token[]" value="34" class="card-input-element" />
                                                                        <div class="panel panel-default card-input">
                                                                        <div class="panel-body">
                                                                            34
                                                                        </div>
                                                                        </div>
                                                                    </label>

                                                                        <label>
                                                                        <input type="checkbox" name="token[]" value="35" class="card-input-element" />
                                                                            <div class="panel panel-default card-input">
                                                                            <div class="panel-body">
                                                                                35
                                                                            </div>
                                                                            </div>
                                                                        </label>
                                                                        <label>
                                                                        <input type="checkbox" name="token[]" value="36" class="card-input-element" />
                                                                            <div class="panel panel-default card-input">
                                                                            <div class="panel-body">
                                                                                36
                                                                            </div>
                                                                            </div>
                                                                        </label>


                                                                        <label>
                                                                            <input type="checkbox" name="token[]" value="41" class="card-input-element" />
                                                                                <div class="panel panel-default card-input">
                                                                                <div class="panel-body">
                                                                                    41
                                                                                </div>
                                                                                </div>
                                                                            </label>

                                                                            <label>
                                                                                <input type="checkbox" name="token[]" value="42" class="card-input-element" />
                                                                                    <div class="panel panel-default card-input">
                                                                                    <div class="panel-body">
                                                                                        42
                                                                                    </div>
                                                                                    </div>
                                                                                </label>
                                                                            <label>
                                                                            <input type="checkbox" name="token[]" value="43" class="card-input-element" />
                                                                                <div class="panel panel-default card-input">
                                                                                <div class="panel-body">
                                                                                    43
                                                                                </div>
                                                                                </div>
                                                                            </label>

                                                                                <label>
                                                                                <input type="checkbox" name="token[]" value="45" class="card-input-element" />
                                                                                    <div class="panel panel-default card-input">
                                                                                    <div class="panel-body">
                                                                                        45
                                                                                    </div>
                                                                                    </div>
                                                                                </label>
                                                                                <label>
                                                                                <input type="checkbox" name="token[]" value="46" class="card-input-element" />
                                                                                    <div class="panel panel-default card-input">
                                                                                    <div class="panel-body">
                                                                                        46
                                                                                    </div>
                                                                                    </div>
                                                                                </label>

                                                                                <label>
                                                                                    <input type="checkbox" name="token[]" value="51" class="card-input-element" />
                                                                                        <div class="panel panel-default card-input">
                                                                                        <div class="panel-body">
                                                                                            51
                                                                                        </div>
                                                                                        </div>
                                                                                    </label>

                                                                                    <label>
                                                                                        <input type="checkbox" name="token[]" value="52" class="card-input-element" />
                                                                                            <div class="panel panel-default card-input">
                                                                                            <div class="panel-body">
                                                                                                52
                                                                                            </div>
                                                                                            </div>
                                                                                        </label>
                                                                                    <label>
                                                                                    <input type="checkbox" name="token[]" value="54" class="card-input-element" />
                                                                                        <div class="panel panel-default card-input">
                                                                                        <div class="panel-body">
                                                                                            54
                                                                                        </div>
                                                                                        </div>
                                                                                    </label>

                                                                                        <label>
                                                                                        <input type="checkbox" name="token[]" value="55" class="card-input-element" />
                                                                                            <div class="panel panel-default card-input">
                                                                                            <div class="panel-body">
                                                                                                55
                                                                                            </div>
                                                                                            </div>
                                                                                        </label>
                                                                                        <label>
                                                                                        <input type="checkbox" name="token[]" value="56" class="card-input-element" />
                                                                                            <div class="panel panel-default card-input">
                                                                                            <div class="panel-body">
                                                                                                56
                                                                                            </div>
                                                                                            </div>
                                                                                        </label>


                                                                                <label>
                                                                                    <input type="checkbox" name="token[]" value="61" class="card-input-element" />
                                                                                        <div class="panel panel-default card-input">
                                                                                        <div class="panel-body">
                                                                                            61
                                                                                        </div>
                                                                                        </div>
                                                                                    </label>

                                                                                    <label>
                                                                                        <input type="checkbox" name="token[]" value="62" class="card-input-element" />
                                                                                            <div class="panel panel-default card-input">
                                                                                            <div class="panel-body">
                                                                                                62
                                                                                            </div>
                                                                                            </div>
                                                                                        </label>
                                                                                    <label>
                                                                                    <input type="checkbox" name="token[]" value="64" class="card-input-element" />
                                                                                        <div class="panel panel-default card-input">
                                                                                        <div class="panel-body">
                                                                                            64
                                                                                        </div>
                                                                                        </div>
                                                                                    </label>

                                                                                        <label>
                                                                                        <input type="checkbox" name="token[]" value="65" class="card-input-element" />
                                                                                            <div class="panel panel-default card-input">
                                                                                            <div class="panel-body">
                                                                                                65
                                                                                            </div>
                                                                                            </div>
                                                                                        </label>
                                                                                        <label>
                                                                                        <input type="checkbox" name="token[]" value="66" class="card-input-element" />
                                                                                            <div class="panel panel-default card-input">
                                                                                            <div class="panel-body">
                                                                                                66
                                                                                            </div>
                                                                                            </div>
                                                                                        </label>
                                                        <button type="submit" value="Continue" class="btn-pok">Continue</button>
                                                    </div> --}}
                                                </div>
                                            </div>

                                    </form>

                                    <div class="picking-number-final-step">
                                        <div class="part-text">
                                            <p><span class="b-txt">Note :</span>  Problem set compensation the harmonics, understood. Hundreds times,<br/> of until they employed sure a behind boundless their for.</p>
                                        </div>
                                        <div class="part-btn">

                                        </div>
                                    </div>
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
        @endif
        <!-- lottery end -->


        <!-- cta begin -->
        <div class="cta">
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
        </div>
        <!-- cta end -->

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
                                <p>Lottery players can play Virginia Lottery games online from anywhere in Virginia on a phone, tablet or computer. </p>
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
                        <p class="copyright-text">copyright © 2023. all right reserved by Lottery</p>
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




              function openCity(evt, cityName) {
    var i, tabcontent, tablinks1;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks1 = document.getElementsByClassName("tablinks1");
    for (i = 0; i < tablinks1.length; i++) {
        tablinks1[i].className = tablinks1[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}


        </script>
    </body>

<!-- Mirrored from iamubaidah.com/html/poklotto/poklotto/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jul 2023 13:48:23 GMT -->
</html>
