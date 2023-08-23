@extends('front.master')

@section('content')
 
 


<div class="row mt-5">
	<div class="col-md-9 col-md-offset-1  ">
	<section style="" class="text-center mt-12" id="bitcoin">
				<h1>Market</h1>
			 <!-- TradingView Widget BEGIN -->
				
				 <div class="tradingview-widget-container">
					 <div class="tradingview-widget-container__widget"></div>
					 <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
					 <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
						 {
							 "width": "1300",
							 "height": "490",
							 "defaultColumn": "overview",
							 "screener_type": "crypto_mkt",
							 "displayCurrency": "BTC",
							 "colorTheme": "light",
							 "locale": "en"
							}
							</script>
				</div>
				<!-- TradingView Widget END -->

		</section>
	</div>
</div>

@endsection