<!DOCTYPE html><html lang="en" dir="ltr"><head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="images/fx-favicon.png">
<script src="js/jquery.min_2.js"></script>
<link rel="stylesheet" type="text/css" href="css/fontawesome.css">	
<script src="js/my_script.js"></script>	

<script type="text/javascript">const wss_url = "wss://fxcoinapi.com";</script><style type="text/css">
:root {
	--buy-color: #28a745;
	--sell-color: #dc3545;

			--hover-bg-color: #ffffff13;
	  --border-color: #32383e;
	  --content-color: #d1d4dc;
	  --theme-color: #212529;
	  --small-color: rgb(156 178 199 / 60%);
			--scroll-speed: 50s;
			--font-family: sans-serif;

	/* theme color  */
			--theme-color: #353841;
	/* hover color */
			--scrolling-from: 0%;
		--scrolling-to: -100%;
	}
</style>

<link rel="stylesheet" type="text/css" href="css/style_2.css">

<script type="text/javascript">
	
	$(document).ready(function(){
		/*var interval = setInterval(function() { 
			var uniq_key = "";
			var fcsLink = $('.fcs-link').attr('href');
			var fcsLinkStyle = $('.fcs-link').attr('style');
			var fcsLinkInner = $('.fcs-link .tag').attr('style');
			var fcsLinkInnerText = $('.fcs-link .tag').text().trim();
			var fcsLinkImgStyle = $('.fcs-link .tag img').attr('style');
			var fcsLinkImg = $('.fcs-link .tag img').attr('src');
			
			if (uniq_key != ""){
				clearInterval(interval);
			}
			else if (
				typeof fcsLinkStyle !== "undefined" || 
				!$(".fcs-link").length || 
				typeof fcsLinkInner !== "undefined" || 
				!$(".fcs-link .tag").length || 
				typeof fcsLinkImgStyle !== "undefined" || 
				!$(".fcs-link .tag img").length || 
				fcsLink != "https://fcsapi.com" || 
				fcsLinkInnerText != 'Live Forex API' || 
				fcsLinkImg != 'images/logo.png'
			){
				$('html').html('<a href="https://fxpricing.com/widget" target="_blank">Get Widgets</a>');
				clearInterval(interval);
			}
		}, 5000);*/
	});

</script>

<title>Ticker Tape Widget | FX Pricing</title>

	<script src="js/widget_set_data.js"></script>
		<script type="text/javascript">
			chg_only_price_bg = true;
			set_type('SPC',false,true);
		</script>
</head>
<body class="">
	<div class="ticker-top-main theme-dark">
		<div class="ticker-border  direction_ltr ticker-main display-flex">
			<div class="ticker-marquee ticker-head-marquee ticker-marquee-allow ">
				<a href="https://fxpricing.com/eur-usd/euro-us-dollar" target="_blank" rel="noopener noreferrer" class="ticker-regular-main "><div class="ticker-regular-inner"><div class="regular-flag-pair"><div class="ticker-flag-circle"><div class="circleFlagMain">
		                			<img src="fonts/eur.svg">
									<img src="fonts/usd.svg"></div></div><div><strong>EUR/USD</strong></div></div>
			                <div class="regular-price"><span class="EUR-USD-price">1.08498</span></div><div class="regular-values"><span class="direction_ltr display-inline buy_clr EUR-USD-change">+0.00191</span><span class="direction_ltr display-inline buy_clr EUR-USD-change-per">+0.18%</span></div></div></a><a href="https://fxpricing.com/eur-chf/euro-swiss-franc" target="_blank" rel="noopener noreferrer" class="ticker-regular-main "><div class="ticker-regular-inner"><div class="regular-flag-pair"><div class="ticker-flag-circle"><div class="circleFlagMain">
		                			<img src="fonts/eur.svg">
									<img src="fonts/chf.svg"></div></div><div><strong>EUR/CHF</strong></div></div>
			                <div class="regular-price"><span class="EUR-CHF-price">0.97903</span></div><div class="regular-values"><span class="direction_ltr display-inline buy_clr EUR-CHF-change">+0.00046</span><span class="direction_ltr display-inline buy_clr EUR-CHF-change-per">+0.05%</span></div></div></a><a href="https://fxpricing.com/eur-jpy/euro-japanese-yen" target="_blank" rel="noopener noreferrer" class="ticker-regular-main "><div class="ticker-regular-inner"><div class="regular-flag-pair"><div class="ticker-flag-circle"><div class="circleFlagMain">
		                			<img src="fonts/eur.svg">
									<img src="fonts/jpy.svg"></div></div><div><strong>EUR/JPY</strong></div></div>
			                <div class="regular-price"><span class="EUR-JPY-price">170.624</span></div><div class="regular-values"><span class="direction_ltr display-inline buy_clr EUR-JPY-change">+0.752</span><span class="direction_ltr display-inline buy_clr EUR-JPY-change-per">+0.44%</span></div></div></a><a href="https://fxpricing.com/eur-nzd/euro-new-zealand-dollar" target="_blank" rel="noopener noreferrer" class="ticker-regular-main "><div class="ticker-regular-inner"><div class="regular-flag-pair"><div class="ticker-flag-circle"><div class="circleFlagMain">
		                			<img src="fonts/eur.svg">
									<img src="fonts/nzd.svg"></div></div><div><strong>EUR/NZD</strong></div></div>
			                <div class="regular-price"><span class="EUR-NZD-price">1.76584</span></div><div class="regular-values"><span class="direction_ltr display-inline sell_clr EUR-NZD-change">-0.00573</span><span class="direction_ltr display-inline sell_clr EUR-NZD-change-per">-0.32%</span></div></div></a><a href="https://fxpricing.com/aud-jpy/australian-dollar-japanese-yen" target="_blank" rel="noopener noreferrer" class="ticker-regular-main "><div class="ticker-regular-inner"><div class="regular-flag-pair"><div class="ticker-flag-circle"><div class="circleFlagMain">
		                			<img src="fonts/aud.svg">
									<img src="fonts/jpy.svg"></div></div><div><strong>AUD/JPY</strong></div></div>
			                <div class="regular-price"><span class="AUD-JPY-price">104.670</span></div><div class="regular-values"><span class="direction_ltr display-inline buy_clr AUD-JPY-change">+0.64</span><span class="direction_ltr display-inline buy_clr AUD-JPY-change-per">+0.62%</span></div></div></a><a href="https://fxpricing.com/usd-jpy/us-dollar-japanese-yen" target="_blank" rel="noopener noreferrer" class="ticker-regular-main "><div class="ticker-regular-inner"><div class="regular-flag-pair"><div class="ticker-flag-circle"><div class="circleFlagMain">
		                			<img src="fonts/usd.svg">
									<img src="fonts/jpy.svg"></div></div><div><strong>USD/JPY</strong></div></div>
			                <div class="regular-price"><span class="USD-JPY-price">157.297</span></div><div class="regular-values"><span class="direction_ltr display-inline buy_clr USD-JPY-change">+0.482</span><span class="direction_ltr display-inline buy_clr USD-JPY-change-per">+0.31%</span></div></div></a><a href="https://fxpricing.com/xau-btc/gold-spot-bitcoin" target="_blank" rel="noopener noreferrer" class="ticker-regular-main "><div class="ticker-regular-inner"><div class="regular-flag-pair"><div class="ticker-flag-circle"><div class="circleFlagMain">
		                			<img src="fonts/xau.svg">
									<img src="fonts/btc.svg"></div></div><div><strong>XAU/BTC</strong></div></div>
			                <div class="regular-price"><span class="XAU-BTC-price">0.03447</span></div><div class="regular-values"><span class="direction_ltr display-inline sell_clr XAU-BTC-change">-0.00024</span><span class="direction_ltr display-inline sell_clr XAU-BTC-change-per">-0.69%</span></div></div></a><a href="https://fxpricing.com/eur-usd/euro-us-dollar" target="_blank" rel="noopener noreferrer" class="ticker-regular-main "><div class="ticker-regular-inner"><div class="regular-flag-pair"><div class="ticker-flag-circle"><div class="circleFlagMain">
		                			<img src="fonts/eur.svg">
									<img src="fonts/usd.svg"></div></div><div><strong>EUR/USD</strong></div></div>
			                <div class="regular-price"><span class="EUR-USD-price">1.08498</span></div><div class="regular-values"><span class="direction_ltr display-inline buy_clr EUR-USD-change">+0.00191</span><span class="direction_ltr display-inline buy_clr EUR-USD-change-per">+0.18%</span></div></div></a><a href="https://fxpricing.com/eur-chf/euro-swiss-franc" target="_blank" rel="noopener noreferrer" class="ticker-regular-main "><div class="ticker-regular-inner"><div class="regular-flag-pair"><div class="ticker-flag-circle"><div class="circleFlagMain">
		                			<img src="fonts/eur.svg">
									<img src="fonts/chf.svg"></div></div><div><strong>EUR/CHF</strong></div></div>
			                <div class="regular-price"><span class="EUR-CHF-price">0.97903</span></div><div class="regular-values"><span class="direction_ltr display-inline buy_clr EUR-CHF-change">+0.00046</span><span class="direction_ltr display-inline buy_clr EUR-CHF-change-per">+0.05%</span></div></div></a><a href="https://fxpricing.com/eur-jpy/euro-japanese-yen" target="_blank" rel="noopener noreferrer" class="ticker-regular-main "><div class="ticker-regular-inner"><div class="regular-flag-pair"><div class="ticker-flag-circle"><div class="circleFlagMain">
		                			<img src="fonts/eur.svg">
									<img src="fonts/jpy.svg"></div></div><div><strong>EUR/JPY</strong></div></div>
			                <div class="regular-price"><span class="EUR-JPY-price">170.624</span></div><div class="regular-values"><span class="direction_ltr display-inline buy_clr EUR-JPY-change">+0.752</span><span class="direction_ltr display-inline buy_clr EUR-JPY-change-per">+0.44%</span></div></div></a><a href="https://fxpricing.com/eur-nzd/euro-new-zealand-dollar" target="_blank" rel="noopener noreferrer" class="ticker-regular-main "><div class="ticker-regular-inner"><div class="regular-flag-pair"><div class="ticker-flag-circle"><div class="circleFlagMain">
		                			<img src="fonts/eur.svg">
									<img src="fonts/nzd.svg"></div></div><div><strong>EUR/NZD</strong></div></div>
			                <div class="regular-price"><span class="EUR-NZD-price">1.76584</span></div><div class="regular-values"><span class="direction_ltr display-inline sell_clr EUR-NZD-change">-0.00573</span><span class="direction_ltr display-inline sell_clr EUR-NZD-change-per">-0.32%</span></div></div></a><a href="https://fxpricing.com/aud-jpy/australian-dollar-japanese-yen" target="_blank" rel="noopener noreferrer" class="ticker-regular-main "><div class="ticker-regular-inner"><div class="regular-flag-pair"><div class="ticker-flag-circle"><div class="circleFlagMain">
		                			<img src="fonts/aud.svg">
									<img src="fonts/jpy.svg"></div></div><div><strong>AUD/JPY</strong></div></div>
			                <div class="regular-price"><span class="AUD-JPY-price">104.670</span></div><div class="regular-values"><span class="direction_ltr display-inline buy_clr AUD-JPY-change">+0.64</span><span class="direction_ltr display-inline buy_clr AUD-JPY-change-per">+0.62%</span></div></div></a><a href="https://fxpricing.com/usd-jpy/us-dollar-japanese-yen" target="_blank" rel="noopener noreferrer" class="ticker-regular-main "><div class="ticker-regular-inner"><div class="regular-flag-pair"><div class="ticker-flag-circle"><div class="circleFlagMain">
		                			<img src="fonts/usd.svg">
									<img src="fonts/jpy.svg"></div></div><div><strong>USD/JPY</strong></div></div>
			                <div class="regular-price"><span class="USD-JPY-price">157.297</span></div><div class="regular-values"><span class="direction_ltr display-inline buy_clr USD-JPY-change">+0.482</span><span class="direction_ltr display-inline buy_clr USD-JPY-change-per">+0.31%</span></div></div></a><a href="https://fxpricing.com/xau-btc/gold-spot-bitcoin" target="_blank" rel="noopener noreferrer" class="ticker-regular-main "><div class="ticker-regular-inner"><div class="regular-flag-pair"><div class="ticker-flag-circle"><div class="circleFlagMain">
		                			<img src="fonts/xau.svg">
									<img src="fonts/btc.svg"></div></div><div><strong>XAU/BTC</strong></div></div>
			                <div class="regular-price"><span class="XAU-BTC-price">0.03447</span></div><div class="regular-values"><span class="direction_ltr display-inline sell_clr XAU-BTC-change">-0.00024</span><span class="direction_ltr display-inline sell_clr XAU-BTC-change-per">-0.69%</span></div></div></a>			</div>

			<div class="ticker-marquee ticker-tail-marquee ticker-marquee-allow "><a href="https://fxpricing.com/eur-usd/euro-us-dollar" target="_blank" rel="noopener noreferrer" class="ticker-regular-main "><div class="ticker-regular-inner"><div class="regular-flag-pair"><div class="ticker-flag-circle"><div class="circleFlagMain">
		                			<img src="fonts/eur.svg">
									<img src="fonts/usd.svg"></div></div><div><strong>EUR/USD</strong></div></div>
			                <div class="regular-price"><span class="EUR-USD-price">1.08498</span></div><div class="regular-values"><span class="direction_ltr display-inline buy_clr EUR-USD-change">+0.00191</span><span class="direction_ltr display-inline buy_clr EUR-USD-change-per">+0.18%</span></div></div></a><a href="https://fxpricing.com/eur-chf/euro-swiss-franc" target="_blank" rel="noopener noreferrer" class="ticker-regular-main "><div class="ticker-regular-inner"><div class="regular-flag-pair"><div class="ticker-flag-circle"><div class="circleFlagMain">
		                			<img src="fonts/eur.svg">
									<img src="fonts/chf.svg"></div></div><div><strong>EUR/CHF</strong></div></div>
			                <div class="regular-price"><span class="EUR-CHF-price">0.97903</span></div><div class="regular-values"><span class="direction_ltr display-inline buy_clr EUR-CHF-change">+0.00046</span><span class="direction_ltr display-inline buy_clr EUR-CHF-change-per">+0.05%</span></div></div></a><a href="https://fxpricing.com/eur-jpy/euro-japanese-yen" target="_blank" rel="noopener noreferrer" class="ticker-regular-main "><div class="ticker-regular-inner"><div class="regular-flag-pair"><div class="ticker-flag-circle"><div class="circleFlagMain">
		                			<img src="fonts/eur.svg">
									<img src="fonts/jpy.svg"></div></div><div><strong>EUR/JPY</strong></div></div>
			                <div class="regular-price"><span class="EUR-JPY-price">170.624</span></div><div class="regular-values"><span class="direction_ltr display-inline buy_clr EUR-JPY-change">+0.752</span><span class="direction_ltr display-inline buy_clr EUR-JPY-change-per">+0.44%</span></div></div></a><a href="https://fxpricing.com/eur-nzd/euro-new-zealand-dollar" target="_blank" rel="noopener noreferrer" class="ticker-regular-main "><div class="ticker-regular-inner"><div class="regular-flag-pair"><div class="ticker-flag-circle"><div class="circleFlagMain">
		                			<img src="fonts/eur.svg">
									<img src="fonts/nzd.svg"></div></div><div><strong>EUR/NZD</strong></div></div>
			                <div class="regular-price"><span class="EUR-NZD-price">1.76584</span></div><div class="regular-values"><span class="direction_ltr display-inline sell_clr EUR-NZD-change">-0.00573</span><span class="direction_ltr display-inline sell_clr EUR-NZD-change-per">-0.32%</span></div></div></a><a href="https://fxpricing.com/aud-jpy/australian-dollar-japanese-yen" target="_blank" rel="noopener noreferrer" class="ticker-regular-main "><div class="ticker-regular-inner"><div class="regular-flag-pair"><div class="ticker-flag-circle"><div class="circleFlagMain">
		                			<img src="fonts/aud.svg">
									<img src="fonts/jpy.svg"></div></div><div><strong>AUD/JPY</strong></div></div>
			                <div class="regular-price"><span class="AUD-JPY-price">104.670</span></div><div class="regular-values"><span class="direction_ltr display-inline buy_clr AUD-JPY-change">+0.64</span><span class="direction_ltr display-inline buy_clr AUD-JPY-change-per">+0.62%</span></div></div></a><a href="https://fxpricing.com/usd-jpy/us-dollar-japanese-yen" target="_blank" rel="noopener noreferrer" class="ticker-regular-main "><div class="ticker-regular-inner"><div class="regular-flag-pair"><div class="ticker-flag-circle"><div class="circleFlagMain">
		                			<img src="fonts/usd.svg">
									<img src="fonts/jpy.svg"></div></div><div><strong>USD/JPY</strong></div></div>
			                <div class="regular-price"><span class="USD-JPY-price">157.297</span></div><div class="regular-values"><span class="direction_ltr display-inline buy_clr USD-JPY-change">+0.482</span><span class="direction_ltr display-inline buy_clr USD-JPY-change-per">+0.31%</span></div></div></a><a href="https://fxpricing.com/xau-btc/gold-spot-bitcoin" target="_blank" rel="noopener noreferrer" class="ticker-regular-main "><div class="ticker-regular-inner"><div class="regular-flag-pair"><div class="ticker-flag-circle"><div class="circleFlagMain">
		                			<img src="fonts/xau.svg">
									<img src="fonts/btc.svg"></div></div><div><strong>XAU/BTC</strong></div></div>
			                <div class="regular-price"><span class="XAU-BTC-price">0.03447</span></div><div class="regular-values"><span class="direction_ltr display-inline sell_clr XAU-BTC-change">-0.00024</span><span class="direction_ltr display-inline sell_clr XAU-BTC-change-per">-0.69%</span></div></div></a><a href="https://fxpricing.com/eur-usd/euro-us-dollar" target="_blank" rel="noopener noreferrer" class="ticker-regular-main "><div class="ticker-regular-inner"><div class="regular-flag-pair"><div class="ticker-flag-circle"><div class="circleFlagMain">
		                			<img src="fonts/eur.svg">
									<img src="fonts/usd.svg"></div></div><div><strong>EUR/USD</strong></div></div>
			                <div class="regular-price"><span class="EUR-USD-price">1.08498</span></div><div class="regular-values"><span class="direction_ltr display-inline buy_clr EUR-USD-change">+0.00191</span><span class="direction_ltr display-inline buy_clr EUR-USD-change-per">+0.18%</span></div></div></a><a href="https://fxpricing.com/eur-chf/euro-swiss-franc" target="_blank" rel="noopener noreferrer" class="ticker-regular-main "><div class="ticker-regular-inner"><div class="regular-flag-pair"><div class="ticker-flag-circle"><div class="circleFlagMain">
		                			<img src="fonts/eur.svg">
									<img src="fonts/chf.svg"></div></div><div><strong>EUR/CHF</strong></div></div>
			                <div class="regular-price"><span class="EUR-CHF-price">0.97903</span></div><div class="regular-values"><span class="direction_ltr display-inline buy_clr EUR-CHF-change">+0.00046</span><span class="direction_ltr display-inline buy_clr EUR-CHF-change-per">+0.05%</span></div></div></a><a href="https://fxpricing.com/eur-jpy/euro-japanese-yen" target="_blank" rel="noopener noreferrer" class="ticker-regular-main "><div class="ticker-regular-inner"><div class="regular-flag-pair"><div class="ticker-flag-circle"><div class="circleFlagMain">
		                			<img src="fonts/eur.svg">
									<img src="fonts/jpy.svg"></div></div><div><strong>EUR/JPY</strong></div></div>
			                <div class="regular-price"><span class="EUR-JPY-price">170.624</span></div><div class="regular-values"><span class="direction_ltr display-inline buy_clr EUR-JPY-change">+0.752</span><span class="direction_ltr display-inline buy_clr EUR-JPY-change-per">+0.44%</span></div></div></a><a href="https://fxpricing.com/eur-nzd/euro-new-zealand-dollar" target="_blank" rel="noopener noreferrer" class="ticker-regular-main "><div class="ticker-regular-inner"><div class="regular-flag-pair"><div class="ticker-flag-circle"><div class="circleFlagMain">
		                			<img src="fonts/eur.svg">
									<img src="fonts/nzd.svg"></div></div><div><strong>EUR/NZD</strong></div></div>
			                <div class="regular-price"><span class="EUR-NZD-price">1.76584</span></div><div class="regular-values"><span class="direction_ltr display-inline sell_clr EUR-NZD-change">-0.00573</span><span class="direction_ltr display-inline sell_clr EUR-NZD-change-per">-0.32%</span></div></div></a><a href="https://fxpricing.com/aud-jpy/australian-dollar-japanese-yen" target="_blank" rel="noopener noreferrer" class="ticker-regular-main "><div class="ticker-regular-inner"><div class="regular-flag-pair"><div class="ticker-flag-circle"><div class="circleFlagMain">
		                			<img src="fonts/aud.svg">
									<img src="fonts/jpy.svg"></div></div><div><strong>AUD/JPY</strong></div></div>
			                <div class="regular-price"><span class="AUD-JPY-price">104.670</span></div><div class="regular-values"><span class="direction_ltr display-inline buy_clr AUD-JPY-change">+0.64</span><span class="direction_ltr display-inline buy_clr AUD-JPY-change-per">+0.62%</span></div></div></a><a href="https://fxpricing.com/usd-jpy/us-dollar-japanese-yen" target="_blank" rel="noopener noreferrer" class="ticker-regular-main "><div class="ticker-regular-inner"><div class="regular-flag-pair"><div class="ticker-flag-circle"><div class="circleFlagMain">
		                			<img src="fonts/usd.svg">
									<img src="fonts/jpy.svg"></div></div><div><strong>USD/JPY</strong></div></div>
			                <div class="regular-price"><span class="USD-JPY-price">157.297</span></div><div class="regular-values"><span class="direction_ltr display-inline buy_clr USD-JPY-change">+0.482</span><span class="direction_ltr display-inline buy_clr USD-JPY-change-per">+0.31%</span></div></div></a><a href="https://fxpricing.com/xau-btc/gold-spot-bitcoin" target="_blank" rel="noopener noreferrer" class="ticker-regular-main "><div class="ticker-regular-inner"><div class="regular-flag-pair"><div class="ticker-flag-circle"><div class="circleFlagMain">
		                			<img src="fonts/xau.svg">
									<img src="fonts/btc.svg"></div></div><div><strong>XAU/BTC</strong></div></div>
			                <div class="regular-price"><span class="XAU-BTC-price">0.03447</span></div><div class="regular-values"><span class="direction_ltr display-inline sell_clr XAU-BTC-change">-0.00024</span><span class="direction_ltr display-inline sell_clr XAU-BTC-change-per">-0.69%</span></div></div></a></div>		</div>

					<a href="https://fcsapi.com" target="_blank" rel="noopener noreferrer" class="fcs-link">
				<div class="fcs-brand position-absolute">
					<img src="images/logo_1.png">
					<span>Live Forex API</span>
				</div>
			</a>
			</div>


			<script type="text/javascript">
			$(document).ready(function(){
				$('.ticker-main').hover(function(){
					$(".ticker-marquee-allow").css('animation-play-state', 'paused');
				}, function(){
					$(".ticker-marquee-allow").css('animation-play-state', 'running');
				});
			});
		</script>
	
</body></html>