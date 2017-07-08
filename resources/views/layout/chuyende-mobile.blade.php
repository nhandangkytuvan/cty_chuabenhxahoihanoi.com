<!DOCTYPE html>
<html lang="vi">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="language" content="vi" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="classification" content="hospital" />
	<meta name="distribution" content="Global" />
	<meta name="rating" content="General" />
	<meta name="robots" content="index, follow" />
	<meta name="creator" content="Phòng khám Nam Khang" />
	<meta name="publisher" content="Phòng khám Nam Khang" />
    <meta name="author" content="{{ $setting->web_name }}">
    <!-- csrf -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- facebook -->
    <meta property="og:site_name" content="Phòng Khám Nam Khang" />
	<meta property="og:type" content="article" />
    <meta property="og:locale " content="vi_VN">
    <!-- link rss,sitemap -->
    
    <!-- link icon -->
    <link rel="shortcut icon" href="{{ asset('public/img/'.$setting->web_icon) }}" type="image/x-icon">
    @yield('title')
    @yield('keyword')
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/glyphicon-bootstrap/glyphicon-bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/font-awesome/css/font-awesome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/slick/slick.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/slick/slick-theme.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobile.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobile-header.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobile-footer.css') }}">
	@yield('css')
	<link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-mediaqueries.css') }}">
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-1.12.3.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery.popupoverlay.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-scrolltofixed-min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/slick/slick.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/mobile/mobile.js') }}"></script>
	@yield('js')
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-85212676-12', 'auto');
	  ga('send', 'pageview');

	</script>
</head>
<body>
	<header>
		<div class="container">
			<div class="flex flex1 justify-content-around">
				<div class="flex flex1col1">
					<div class="flex2col1">
						<div><a href="{{ url('/') }}" title="phòng khám chuyên khoa nam khang"><img src="{{ asset('public/images/mobile2/logo.png') }}" class="center-block"></a></div>
					</div>
					<div class="flex flex2col2">
						<div class="box-center">
							@if(Request::url()==url('/'))
							<h1 class="text-uppercase">phòng khám chuyên khoa nam khang</h1>
							@else
							<div class="h3 text-uppercase">phòng khám chuyên khoa nam khang</div>
							@endif
							<div class="web-address text-uppercase">số 193C1 bà triệu - hai bà trưng - hà nội</div>
						</div>
					</div>
				</div>
				<div class="flex flex1col2 align-items-center">
					<img src="{{ asset('public/images/mobile/header-1.png') }}" alt="doc">
				</div>
				<div class="flex flex1col3 align-items-center">
					<span class="text-uppercase">Chuyên khoa<br>bệnh xã hội</span>
				</div>
			</div>
		</div>
	</header>
	<menu class="container">
		<div class="flex flex1 justify-content-between">
			<a class="flex flex1col1 align-items-center justify-content-center text-center text-uppercase" href="{{ url('/') }}" title="Trang chủ">
				Trang chủ
			</a>
			<a class="flex flex1col1 align-items-center justify-content-center text-center text-uppercase" href="{{ url('ve-chung-toi') }}" title="Giới thiệu phòng khám">
				Giới thiệu<br>phòng khám
			</a>
			<a class="flex flex1col1 align-items-center justify-content-center text-center text-uppercase" href="#" title="Đội ngũ chuyên gia">
				Đội ngũ<br>chuyên gia
			</a>
			<a class="flex flex1col1 align-items-center justify-content-center text-center text-uppercase" href="{{ url('dia-chi-phong-kham') }}" title="Địa chỉ phòng khám">
				Địa chỉ<br>phòng khám
			</a>
		</div>
	</menu>
	<div class="banner container">
		<div class="slick-home">
			<div>
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
					@yield('banner')
				</a>
			</div>
		</div>
		<script>
			$('.slick-home').slick({
				autoplay: true,
				autoplaySpeed: 4000,
			});
		</script>
	</div>
	@yield('content')	
	<footer>
		<div class="row1 container">
			<div class="flex flex1 justify-content-around">
				<div class="flex1col1">
					<div class="text-center">
						<a href="{{ url('/') }}" title="PHÒNG KHÁM CHUYÊN KHOA NAM KHANG"><img src="{{ asset('public/images/mobile2/logo.png') }}" alt="logo"></a>
					</div>
					<div class="text-uppercase text-center">
						PHÒNG KHÁM CHUYÊN KHOA NAM KHANG
					</div>
					<div class="text-uppercase text-center">
						____PHÒNG KHÁM UY TÍN Ở HÀ NỘI____
					</div>
				</div>
				<div class="flex1col1">
					<div class="text-uppercase">LIÊN HỆ VỚI CHÚNG TÔI</div>
					<div class="flex flex2">
						<div class="flex2col1 flex align-items-center">
							<img src="{{ asset('public/images/mobile/footer-1.png') }}" alt="phone" class="">
						</div>
						<div class="flex2col2 flex flex-wrap-wrap align-content-center">
							<a href="tel:18006181" class="width-100" title="ĐIỆN THOẠI TƯ VẤN MIỄN PHÍ">ĐIỆN THOẠI<br>TƯ VẤN MIỄN PHÍ</a>
							<a href="tel:18006181" class="width-100" title="ĐIỆN THOẠI TƯ VẤN MIỄN PHÍ">1800-6181</a>
						</div>
					</div>
					<div>
						<a href="{{ url('dia-chi-phong-kham') }}" title="Số 193c1 Bà Triệu Hai Bà Trưng, Hà Nội">
							Số 193c1 Bà Triệu<br>Hai Bà Trưng, Hà Nội
						</a>
					</div>
				</div>
			</div>
		</div>
		@yield('toolbar')	
	</footer>
	<script language="javascript" src="http://swt.phongkham193.com/JS/LsJS.aspx?siteid=MFI63108226&float=1&lng=en"></script>
	<div id="my_popup" class="pos-relative">
	    <p>Dịch vụ tư vấn đặt hẹn </p>
	    <a class="btn-cancel" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tư vấn</a>
	    <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="btn-agree">Đặt hẹn</a>
	    <span class="my_popup_close pos-absolute fa fa-window-close"></span>
	</div>
	<img src="{{ asset('public/images/mobile/shake.gif') }}" alt="" style="position: fixed; top: 15%;right: 0px;z-index: 999;width:55px;">
</body>
</html>