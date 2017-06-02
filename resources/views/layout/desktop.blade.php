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
    <meta property="fb:app_id" content="217371985432377">
    <meta property="fb:admins" content="https://www.facebook.com/truong321989">
    <!-- link rss,sitemap -->
    <!-- link icon -->
    <link rel="shortcut icon" href="{{ asset('public/img/'.$setting->web_icon) }}" type="image/x-icon">
    @yield('title')
    @yield('keyword')
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/slick/slick.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/slick/slick-theme.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/toastr8/dist/css/toastr8.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/hover/css/hover.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop-popup.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop-header.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop-footer.css') }}">
	@yield('css')
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-1.12.3.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery.SuperSlide.2.1.1.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery.popupoverlay.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-scrolltofixed-min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/slick/slick.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/toastr8/dist/js/toastr8.min.js') }}"></script>
	@yield('js')
	<script type="text/javascript" src="{{ asset('public/js/desktop/desktop.js') }}"></script>
	<!-- <script type="text/javascript" src="{{ asset('public/js/desktop/right.js') }}"></script> -->
	<!-- <script type="text/javascript" src="{{ asset('public/js/desktop/swt.js') }}"></script> -->
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
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=217371985432377";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
    <header>
		<div class="container">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1 flex2 flex justify-content-between">
					<div class="flex2col1 flex align-items-center justify-content-center">
						<div>
							<a href="{{ url('/') }}" title="Phòng khám chuyên khoa Nam Khang">
								<img src="{{ asset('public/images/desktop/logo-header.png') }}" alt="logo">
							</a>
						</div>
					</div>
					<div class="flex2col2 flex align-items-center justify-content-center">
						<div>
							@if(Request::url()==url('/'))
							<h1 class="text-uppercase"><a href="{{ url('ve-chung-toi') }}" title="{{ $setting->web_name }}">Phòng khám chuyên khoa Nam Khang</a></h1>
							@else
							<div class="text-uppercase web-name"><a href="{{ url('ve-chung-toi') }}" title="{{ $setting->web_name }}">Phòng khám chuyên khoa Nam Khang</a></div>
							@endif
							<div class="text-uppercase web-address"><a href="{{ url('dia-chi-phong-kham') }}" title="Số 193C1 Bà Triệu - Hai Bà Trưng - Hà Nội">Số 193C1 Bà Triệu - Hai Bà Trưng - Hà Nội</a></div>
						</div>
						<div class="flex align-items-center">
							Chuyên khoa<br>bệnh xã hội
						</div>
					</div>
				</div>
				<div class="flex1col1 flex justify-content-center align-items-center">
					<div class="thoigian-lamviec">
						<!-- <div class="text-left">Thời gian làm việc</div>
						<div class="text-center">8:00 - 20:00</div>
						<div class="text-right">(làm việc cả chủ nhật, ngày lễ)</div> -->
					</div>
				</div>
				<div class="flex1col1 flex flex3 justify-content-between">
					<div class="flex3col1 flex justify-content-center align-items-center">
						<a href="tel:1800 6181" title="1800 6181">
							<img src="{{ asset('public/images/desktop/header-4.png') }}" alt="1800 6181">
						</a>
					</div>
					<div class="flex3col2 flex justify-content-center align-items-center">
						<div>
							<div class="color1">Đường dây nóng</div>
							<div class="text-center"><a href="tel:1800 - 6181" title="1800 - 6181">1800 - 6181</a></div>
							<div class="text-center"><a href="tel:043-9656999" title="043-9656999">043 - 9656999</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
    <menu>
		<div class="container">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1 flex align-items-center justify-content-center">
					<div><a href="{{ url('/') }}" class="text-container-center hvr-fade" title="Trang chủ">Trang chủ</a></div>
				</div>
				<div class="flex1col1 flex align-items-center justify-content-center">
					<div><a href="{{ url('ve-chung-toi') }}" class="text-container-center hvr-fade" title="Giới thiệu phòng khám">Giới thiệu phòng khám</a></div>
				</div>
				<div class="flex1col1 flex align-items-center justify-content-center">
					<div><a href="{{ MyAPI::getUrlTermID(32) }}" class="text-container-center hvr-fade" title="Kỹ thuật đặc biệt">Kỹ thuật đặc biệt</a></div>
				</div>
				<div class="flex1col1 flex align-items-center justify-content-center">
					<div><a href="#" class="text-container-center hvr-fade" title="Sếp số hẹn khám">Sếp số hẹn khám</a></div>
				</div>
				<div class="flex1col1 flex align-items-center justify-content-center">
					<div><a href="{{ url('/dia-chi-phong-kham') }}" class="text-container-center hvr-fade" title="Địa chỉ phòng khám">Địa chỉ phòng khám</a></div>
				</div>
			</div>
		</div>
	</menu>
	@yield('content')
	<footer>
		<div class="row1">
			<div class="container2">
				<div class="flex flex1 justify-content-between">
					<div class="flex1col1">
						<div>
							<a href="{{ url('/') }}" title="logo">
								<img src="{{ asset('public/images/desktop/logo-header.png') }}" class="center-block" alt="logo">
							</a>
						</div>
						<div class="text-center text-uppercase web-name">
							<a href="{{ url('/') }}" title="Phòng khám chuyên khoa Nam Khang">Phòng khám chuyên khoa Nam Khang</a>
						</div>
						<div class="text-center text-uppercase web-slogan">_____PHÒNG KHÁM UY TÍN Ở HÀ NỘI_____</div>
					</div>
					<div class="flex1col2">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29796.642302271455!2d105.84909!3d21.009455!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8a65517cee98a0b0!2sPh%C3%B2ng+Kh%C3%A1m+Chuy%C3%AAn+Khoa+Nam+Khang!5e0!3m2!1sen!2sus!4v1493863687642" width="100%" height="245px" frameborder="0" style="border:0"></iframe>
					</div>
					<div class="flex1col3">
						<div class="">
							<div class="text-uppercase web-contact">Liên hệ với chúng tôi</div>
							<div class="flex2 flex justify-content-between">
								<div class="flex2col1">
									<div class="flex flex3">
										<div class="flex3col1 flex align-items-center justify-content-center">
											<div class="">
												<i class="bg1"></i>
											</div>
										</div>
										<div class="flex3col2 flex align-items-center justify-content-center">
											<div>
												<div class="text-uppercases">ĐIỆN THOẠI TƯ VẤN MIỄN PHÍ</div>
												<div class="call"><a href="tel:18006181" title="1800-6181">1800-6181</a></div>
											</div>
										</div>
									</div>
								</div>
								<div class="flex2col2">
									<div class="flex flex3">
										<div class="flex3col1 flex align-items-center justify-content-center">
											<div class="">
												<i class="bg2"></i>
											</div>
										</div>
										<div class="flex3col2 flex align-items-center justify-content-center">
											<div>
												<div class="text-uppercase">TƯ VẤN</div>
												<div class="call">
													<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="SKYPE">SKYPE</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="flex4 flex justify-content-between">
								<div class="flex4col1">
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="flex align-items-center dis-block width-100 justify-content-center active hvr-push" title="Hỏi bệnh tình">
										<span class="flex align-items-center justify-content-center">
											<i class="bg3"></i>
										</span>
										<span class="flex align-items-center justify-content-center">Hỏi bệnh tình</span>
									</a>
								</div>
								<div class="flex4col1">
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="flex align-items-center dis-block width-100 justify-content-center hvr-push" title="Hỏi điều trị">
										<span class="flex align-items-center justify-content-center">
											<i class="bg4"></i>
										</span>
										<span class="flex align-items-center justify-content-center">Hỏi điều trị</span>
									</a>
								</div>
								<div class="flex4col1">
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="flex align-items-center dis-block width-100 justify-content-center hvr-push" title="Hỏi chi phí">
										<span class="flex align-items-center justify-content-center">
											<i class="bg5"></i>
										</span>
										<span class="flex align-items-center justify-content-center">Hỏi chi phí</span>
									</a>
								</div>
							</div>
							<div class="web-address"><a href="{{ url('dia-chi-phong-kham') }}" title="Số 193c1 Bà Triệu, Hai Bà Trưng, Hà Nội">Số 193c1 Bà Triệu, Hai Bà Trưng, Hà Nội</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row2">
		</div>
	</footer>
	<div id="popup-desktop">
		<div class="pos-relative">
			<a class="dis-inline-block pos-absolute popup-desktop_close"></a>
			<a class="dis-inline-block pos-absolute tuvan1" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Tư vấn"></a>
			<a class="dis-inline-block pos-absolute tuvan2" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Đặt hẹn"></a>
		</div>
	</div>
</body>
</html>
