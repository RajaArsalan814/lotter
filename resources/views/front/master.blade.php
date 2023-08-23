<!DOCTYPE html>
<html lang="zxx" class="js">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="CryptoCoin is a powerful Bitcoin Crypto Currency Wallet and Mining Template with full of customization options and features">
		
		<!-- Site Title  -->
		<title>Lottery</title>

		<!--Bootstrap-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<!-- Fav Icon  -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="shortcut icon" href="{{asset('front-assets/images/images/favicon.png')}}">

		<!-- Vendor Bundle CSS -->
		<link rel="stylesheet" href="{{asset('front-assets/css/vendor.bundle.css')}}" >
		<!-- Custom styles for this template -->
		<link href="{{asset('front-assets/css/style.css')}}" rel="stylesheet">
		<link href="{{asset('front-assets/css/theme-blue.css')}}" rel="stylesheet">


		

		<style>
			.tradingview-widget-copyright {
            	display: none;
        	}

			.row.text-center {
				display: flex;
				justify-content: center;
			}
		

			

			
			/* old Live Chat */
			.my-float{
				margin-top:14px;
				margin-bottom: 14px;
			}


			.openChatBtn {
				background-color: #f7921a;
				color: white;
				padding: 0px 10px;
				border: none;
				font-weight: 500;
				font-size: 18px;
				cursor: pointer;
				opacity: 0.8;
				position: fixed;
				bottom: 30px;
				right: 28px;
				width: 60px;
				border-radius: 50%;
				z-index: 1000;
			}

			.openChatBtn i{

				font-size: 35px;
			}
			.openChat {
				display: none;
				position: fixed;
				bottom: 0;
				right: 15px;
				border: none;
				z-index: 9;
			}
			form {
				max-width: 300px;
				padding: 10px;
				background-color: white;
				border-radius: 5px;
			}
			form textarea {
				width: 100%;
				font-size: 18px;
				padding: 15px;
				margin: 5px 0 22px 0;
				border: none;
				font-weight: 500;
				background: #d5e7ff;
				color: rgb(0, 0, 0);
				resize: none;
				min-height: 250px;
			}
			form textarea:focus {
				background-color: rgb(219, 255, 252);
				outline: none;
			}
			form .btn {
				background-color: #0f152b;
				color: white;
				padding: 16px 20px;
				font-weight: bold;
				border: none;
				cursor: pointer;
				width: 100%;
				margin-bottom: 10px;
				opacity: 0.8;
			}
			form .close {
				background-color: #f7921a;
				opacity: 0;
			}
			form .btn:hover{
				opacity: 0;
			}
			.openChatBtn:hover {
				opacity: 1;
			}
		</style>
		
	</head>
	<body>
	
		<!-- Header --> 
		<header class="site-header header-s2">
			<!-- Navbar is-sticky-->
			<div class="navbar navbar-primary">
				<div class="top-bar-wrap">
					<div class="container relative">
						<div class="clearfix">
							<div class="col-md-4 col-sm-6 mobile-center">
								<a class="navbar-brand" href="{{route('index')}}">
									<img class="logo" alt="" src='{{asset("documents/setting/$setting->logo??null")}}'>
								</a>
							</div>
							<div class="col-md-4 col-sm-6 text-center" style="padding: 25px 0;">
								<h6 class="pt-4" style="padding: 0 0 2px 2px;">Try the best trade you ever head!</h6>
								<!-- <ul class="top-nav hidden-xs hidden-sm">
									<li><a href="faqs.html">Help</a></li>
									<li><a href="faqs.html">Support</a></li>
									<li><a href="signup.html">Login</a></li>
									<li><a href="signup.html">Register</a></li>
								</ul> -->
							</div>
							<div class="col-md-4 col-sm-6 text-right mobile-center" style="padding: 25px 0;">

								<!-- <input type="search" class="search-bar" placeholder="search here..." id=""> -->

								<!-- <ul class="social social-s2">
									
									<li><a href="#"><em class="fa fa-twitter"></em></a></li>
									<li><a href="#"><em class="fa fa-linkedin"></em></a></li>
									<li><a href="#"><em class="fa fa-google-plus"></em></a></li>
								</ul> -->
								<a href="#" class="search-em"><em class="fa fa-search"></em></a>
								<div class="btn btn-outline btn-alt btn-md" style="">Contact</div>
								
								
							</div>
						</div>
					</div>
				</div>
			</div>
				<div class="nav-bar-wrap">
					<div class="container relative">
					
						 
						<div class="container" style="display: flex;justify-content: center; text-align: center;" style="position: relative;">
						<nav class="navbar navbar-expand-md navbar-light ">
							 
							<button class="navbar-toggle " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							  <span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarNav">
							  <ul class="navbar-nav">
								<li class="nav-item active">
								  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item">
								  <a class="nav-link" href="#">Market</a>
								</li>
								<li class="nav-item">
								  <a class="nav-link" href="#!">Register</a>
								</li>
								<!-- <li class="nav-item">
									<a class="nav-link" href="#">Our Mission</a>
								  </li>
								  <li class="nav-item">
									<a class="nav-link" href="#">Carriers</a>
								  </li>
								<li class="nav-item">
								  <a class="nav-link" href="#">About Us</a>
								</li> -->
							  </ul>
							</div>
						  </nav>
						</div>
					</div>
						
						<!-- #end MainNav -->
					
				<!-- </div>
			</div> -->
			<div>
			<!-- End Navbar -->
			<!-- Banner/Slider -->

			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
				<div class="carousel-inner">
				  <div class="carousel-item active">
					<img class="d-block w-100" src="{{asset('front-assets/images/images/btc-banner-1.jpg')}}" alt="First slide">
				  </div>
				  <div class="carousel-item">
					<img src="{{asset('front-assets/images/images/btc-banner-3.jpg')}}" alt="...">
					<div class="carousel-caption d-none d-md-block">
					  <h5>...</h5>
					  <p>...</p>
					</div>
				  </div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				  <span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				  <span class="carousel-control-next-icon" aria-hidden="true"></span>
				  <span class="sr-only">Next</span>
				</a>
			  </div>
				


			<!-- <div id="header" class="banner banner-md light row-vm">
				<div class="imagebg imagebg-bottom">
					<img src="images/header-bg-d.jpg" alt="bg">
				</div>
				<div class="container">
					<div class="banner-content">
						<div class="row text-center">
							<div class="col-md-8 col-md-offset-2">
								<h1 class="">Start bitcoin mining today!</h1>
							</div>
							<div class="gaps size-1x"></div>
						</div>
						<div class="row text-center">
							<div class="col-md-6 col-md-offset-3">
								<p class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
								<ul class="btns">
									<li><a href="#" class="btn">Login</a></li>
									<li><a href="#" class="btn btn-outline">Signup</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div> -->
			<!-- End Banner/Slider -->
		</header>
     	<!-- End Header -->
		
		
		<div class="content">
		   @yield('content')
		</div>
		
      	
      	
		
       	<!-- Section Footer -->
		<div class="footer-section section section-pad-md light bg-footer">
			<div class="imagebg footerbg">
				<img src="images/footer-bg.png" alt="footer-bg">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 wgs-box res-m-bttm">
						<!-- Each Widget -->
						<div class="wgs-footer wgs-menu">
							<h5 class="wgs-title ucap">Menu</h5>
							<div class="wgs-content">
								<ul class="menu">
									<li><a href="#">Home</a></li>
									<li><a href='{{asset("documents/pdf/$pdf->market??null")}}' target="_blank">{{$pdf->market_name??null}}</a></li>
									<li><a href='{{asset("documents/pdf/$pdf->our_vision??null")}}' target="_blank">{{$pdf->our_vision_name??null}}</a></li>
									<li><a href='{{asset("documents/pdf/$pdf->our_mission??null")}}' target="_blank" >{{$pdf->our_mission_name??null}}</a></li>
									<li><a href='{{asset("documents/pdf/$pdf->carrier??null")}}' target="_blank" >{{$pdf->carrier_name??null}}</a></li>
								</ul>
							</div>
						</div>
						<!-- End Widget -->
					</div>
					<div class="col-md-3 col-sm-6 wgs-box res-m-bttm">
						<!-- Each Widget -->
						<div class="wgs-footer wgs-menu">
							<h5 class="wgs-title ucap">About Us</h5>
							<div class="wgs-content">
								<ul class="menu">
									<li><a href='{{asset("documents/pdf/$pdf->about??null")}}' target="_blank" >{{$pdf->about_name??null}}</a></li>
									<li><a href='{{asset("documents/pdf/$pdf->terms_conditions??null")}}' target="_blank" >{{$pdf->terms_condition_name??null}}</a></li>
									<li><a href='{{asset("documents/pdf/$pdf->privacy_policy??null")}}' target="_blank" >{{$pdf->privacy_policy_name??null}}</a></li>
									<li><a href="#">Blogs</a></li>
									<li><a href='{{asset("documents/pdf/$pdf->verification_guide??null")}}' target="_blank" >{{$pdf->verification_guide_name??null}}</a></li>
								</ul>
							</div>
						</div>
						<!-- End Widget -->
					</div>
					<div class="col-md-3 col-sm-6 wgs-box res-m-bttm">
						<!-- Each Widget -->
						<div class="wgs-footer wgs-menu">
							<h5 class="wgs-title ucap">Usefull Links</h5>
							<div class="wgs-content">
								<ul class="menu">
									<li><a href='{{asset("documents/pdf/$pdf->accessibility??null")}}' target="_blank" >{{$pdf->accessibility_name??null}}</a></li>
									<li><a href="#">{{$pdf->site_map_name??null}}</a></li>
									<li><a href="#">Manage All Cookies</a></li>
								</ul>
							</div>
						</div>

						

						<!-- <div class="wgs-footer wgs-post">
							<h5 class="wgs-title ucap">Recent Blog</h5>
							<div class="wgs-content">
								<div class="wgs-post-single">
									<div class="wgs-post-thumb">
										<img src="images/post-thumb-sm-b.jpg" alt="post-thumb">
									</div>
									<div class="wgs-post-entry">
										<h6 class="wgs-post-title"><a href="blog-single.html">Working Hard to Keep Pace with Demand </a></h6>
										<span class="wgs-post-meta">December 19, 2017</span>
									</div>
								</div>
								<div class="wgs-post-single">
									<div class="wgs-post-thumb">
										<img src="images/post-thumb-sm-c.jpg" alt="post-thumb">
									</div>
									<div class="wgs-post-entry">
										<h6 class="wgs-post-title"><a href="blog-single.html">Working Hard to Keep Pace with Demand </a></h6>
										<span class="wgs-post-meta">December 19, 2017</span>
									</div>
								</div>
							</div>
						</div> -->
						<!-- End Widget -->
					</div>

					<div class="col-md-3 col-sm-6 ">
						<!-- Each Widget -->

						<div class="wgs-footer wgs-menu">
							<h5 class="wgs-title ucap">Social Links</h5>
						</div>
						<div class=" text-left mobile-left" style="margin-top:20px;">
							<ul class="social">
								<li><a href="{{$setting->facebook??null}}" target="_blank" ><em class="fa fa-facebook"></em></a></li>
								<li><a href="{{$setting->twitter??null}}" target="_blank"  ><em class="fa fa-twitter"></em></a></li>
								<li><a href="{{$setting->linkdin??null}}" target="_blank" ><em class="fa fa-linkedin"></em></a></li>
								<li><a href="{{$setting->google_plus??null}}" target="_blank"><em class="fa fa-google-plus"></em></a></li>
								<li><a href="{{$setting->instagram??null}}" target="_blank"><em class="fa fa-instagram"></em></a></li>
								<li><a href="{{$setting->whatsapp??null}}" target="_blank"><em class="bx bxl-whatsapp"></em></a></li>
							</ul>
						</div>
						<!-- End Widget -->
					</div>
					
				</div>
				<!-- <div class=" text-left mobile-left">
					<ul class="social">
						<li><a href="#"><em class="fa fa-facebook"></em></a></li>
						<li><a href="#"><em class="fa fa-twitter"></em></a></li>
						<li><a href="#"><em class="fa fa-linkedin"></em></a></li>
						<li><a href="#"><em class="fa fa-google-plus"></em></a></li>
					</ul>
				</div> -->
			</div>	
		</div>
		<!-- End Section -->
		
		<!-- Copyright -->
		<div class="copyright light">
			<div class="container">
				<div class="row text-center">
					<div class="site-copy text-center">
						<p>Copyright &copy; 2023 by AFIX Global</p>
					</div>
					
				</div>
			</div>
		</div>
		<!-- End Copyright -->

		<!-- <button class="chatbox-open">
			<i class="fa fa-comment fa-2x" aria-hidden="true"></i>
		  </button>
		<button class="chatbox-close">
			<i class="fa fa-close fa-2x" aria-hidden="true"></i>
		  </button>
		<section class="chatbox-popup">
		  <header class="chatbox-popup__header">
			<aside style="flex:3">
			  <i class="fa fa-user-circle fa-4x chatbox-popup__avatar" aria-hidden="true"></i>
			</aside>
			<aside style="flex:8">
			  <h1>Sussanah Austin</h1> Agent (Online)
			</aside>
			<aside style="flex:1">
			  <button class="chatbox-maximize"><i class="fa fa-window-maximize" aria-hidden="true"></i></button>
			</aside>
		  </header>
		  <main class="chatbox-popup__main">
			We make it simple and seamless for<br> bussiness and people to talk to each<br> other. Ask us anything.
		  </main>
		  <footer class="chatbox-popup__footer">
			<aside style="flex:1;color:#888;text-align:center;">
			  <i class="fa fa-camera" aria-hidden="true"></i>
			</aside>
			<aside style="flex:10">
			  <textarea type="text" placeholder="Type your message here..." autofocus></textarea>
			</aside>
			<aside style="flex:1;color:#888;text-align:center;">
			  <i class="fa fa-paper-plane" aria-hidden="true"></i>
			</aside>
		  </footer>
		</section>
		<section class="chatbox-panel">
		  <header class="chatbox-panel__header">
			<aside style="flex:3">
			  <i class="fa fa-user-circle fa-3x chatbox-popup__avatar" aria-hidden="true"></i>
			</aside>
			<aside style="flex:6">
			  <h1>Sussanah Austin</h1> Agent (Online)
			</aside>
			<aside style="flex:3;text-align:right;">
			  <button class="chatbox-minimize"><i class="fa fa-window-restore" aria-hidden="true"></i></button>
			  <button class="chatbox-panel-close"><i class="fa fa-close" aria-hidden="true"></i></button>
			</aside>
		  </header>
		  <main class="chatbox-panel__main" style="flex:1">
			We make it simple and seamless for<br> bussiness and people to talk to each<br> other. Ask us anything.
		  </main>
		  <footer class="chatbox-panel__footer">
			<aside style="flex:1;color:#888;text-align:center;">
			  <i class="fa fa-camera" aria-hidden="true"></i>
			</aside>
			<aside style="flex:10">
			  <textarea type="text" placeholder="Type your message here..." autofocus></textarea>
			</aside>
			<aside style="flex:1;color:#888;text-align:center;">
			  <i class="fa fa-paper-plane" aria-hidden="true"></i>
			</aside>
		  </footer>
		</section> -->



		<!--live Chat old -->
		<button class="openChatBtn" onclick="openForm()">
		<i class="bx bx-chat my-float"></i></button>
		<div class="openChat">
			<form>
			<h3>Chat</h3>
			<label for="msg"><b>Message</b></label>
			<textarea placeholder="Type message.." name="msg" required></textarea>
			<button type="submit" class="btn">Send</button>
			<button type="button" class="btn close" onclick="closeForm()">
			Close
			</button>
			</form>
			</div>




		<!-- Preloader !remove please if you do not want -->
		<div id="preloader"><div id="status">&nbsp;</div></div> 
		<!-- Preloader End -->
		
		<!-- JavaScript
		================================================== -->

		
			
		
		<script>

			

			// const chatbox = jQuery.noConflict();	

			// chatbox(() => {
			// chatbox(".chatbox-open").click(() =>
			// 	chatbox(".chatbox-popup, .chatbox-close").fadeIn()
			// );

			// chatbox(".chatbox-close").click(() =>
			// 	chatbox(".chatbox-popup, .chatbox-close").fadeOut()
			// );

			// chatbox(".chatbox-maximize").click(() => {
			// 	chatbox(".chatbox-popup, .chatbox-open, .chatbox-close").fadeOut();
			// 	chatbox(".chatbox-panel").fadeIn();
			// 	chatbox(".chatbox-panel").css({ display: "flex" });
			// });

			// chatbox(".chatbox-minimize").click(() => {
			// 	chatbox(".chatbox-panel").fadeOut();
			// 	chatbox(".chatbox-popup, .chatbox-open, .chatbox-close").fadeIn();
			// });

			// chatbox(".chatbox-panel-close").click(() => {
			// 	chatbox(".chatbox-panel").fadeOut();
			// 	chatbox(".chatbox-open").fadeIn();
			// });
			// });

			//Old Live Chat
			var slideIndex = 1;
			showDivs(slideIndex);
			
			function plusDivs(n) {
			  showDivs(slideIndex += n);
			}
			
			function currentDiv(n) {
			  showDivs(slideIndex = n);
			}
			
			function showDivs(n) {
			  var i;
			  var x = document.getElementsByClassName("mySlides");
			  var dots = document.getElementsByClassName("demo");
			  if (n > x.length) {slideIndex = 1}
			  if (n < 1) {slideIndex = x.length}
			  for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";  
			  }
			  for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" w3-white", "");
			  }
			  x[slideIndex-1].style.display = "block";  
			  dots[slideIndex-1].className += " w3-white";
			}



			document .querySelector(".openChatBtn") .addEventListener("click", openForm);
			document.querySelector(".close").addEventListener("click", closeForm);
			function openForm() {
				document.querySelector(".openChat").style.display = "block";
			}
			function closeForm() {
				document.querySelector(".openChat").style.display = "none";
			}
			</script>


		
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

		<!-- Placed at the end of the document so the pages load faster -->
		
		<script src="{{asset('front-assets/js/jquery.bundle.js')}}"></script>
		<script src="{{asset('front-assets/js/script.js')}}"></script>
		
	</body>
</html>
