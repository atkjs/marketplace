<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="SemiColonWeb" />

	@include('front.common.style')

<title>Home - Shop | Canvas</title>
<style>

		.revo-slider-emphasis-text {
			font-size: 58px;
			font-weight: 700;
			letter-spacing: 1px;
			font-family: 'Raleway', sans-serif;
			padding: 15px 20px;
			border-top: 2px solid #FFF;
			border-bottom: 2px solid #FFF;
		}

		.revo-slider-desc-text {
			font-size: 20px;
			font-family: 'Lato', sans-serif;
			width: 650px;
			text-align: center;
			line-height: 1.5;
		}

		.revo-slider-caps-text {
			font-size: 16px;
			font-weight: 400;
			letter-spacing: 3px;
			font-family: 'Raleway', sans-serif;
		}

		.tp-video-play-button { display: none !important; }

		.tp-caption { white-space: nowrap; }

	</style>
</head>
<body class="stretched">

<div id="wrapper" class="clearfix">

	@include('front.common.header')

	@include('front.common.head')

	<div class="promo parallax promo-full bottommargin-lg" style="background: #b9babb" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
		<div class="container clearfix">
			<h3>Get <span>30%</span> off on orders of $29 or more. Use Coupon: <span>SHOP30</span></h3>
			<span>Sale available on selected Designer Brands that include Apparels, Footwear, Fashion Accessories &amp; Watches.</span>
			<a href="#" class="button button-xlarge button-rounded">Start Shopping</a>
		</div>
	</div>

	@yield('content')

	@include('front.common.footer')
</div>

<div id="gotoTop" class="icon-angle-up"></div>
@include('front.common.script')

</body>

</html>