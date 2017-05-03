@extends('layout.desktop')
@section('title')
	<title>{{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
	@include('seo.seo_home')
@endsection('keyword')
@section('css')
	<link rel="canonical" href="{{ url('/') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/hover/css/hover.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-home.css') }}">
@endsection('css')
@section('content')
	<div class="baner">
		<div class="slick-home">
			<div>
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
					<img src="{{ asset('public/images/desktop/addslide2.png') }}" alt="Nam khang - Bảo vệ sức khỏe nam giới" class="center-block">
				</a>
			</div>
			<div>
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
					<img src="{{ asset('public/images/desktop/addslide3.png') }}" alt="Nam khang - Kỹ thuật điều trị" class="center-block">
				</a>
			</div>
		</div>
		<script>
			$('.slick-home').slick({
			  	slidesToShow: 1,
			  	slidesToScroll: 1,
			  	autoplay: true,
			  	autoplaySpeed: 2000,
			});	
		</script>
	</div>
	<main class="home">
		<div class="row1 container">
			<div class="flex flex1 align-items-center">
				<div class="col1">
					<h2 class="text-center width-100">Sùi mào gà</h2>
					<div class="flex flex2 width-100">
						<div class="col1"><i class="bg"></i></div>
						<div class="col1 flex flex3 border1 flex-wrap-wrap align-content-end">
							<div class="width-100 text-center"><a href="#">Nguyên nhân</a></div>
							<div class="width-100 text-center"><a href="#">Nguy hại</a></div>
							<div class="width-100 text-center"><a href="#">Chi phí</a></div>
						</div>
						<div class="col1 flex flex3 flex-wrap-wrap align-content-end">
							<div class="width-100 text-center"><a href="#">Triệu chứng</a></div>
							<div class="width-100 text-center"><a href="#">Điều trị</a></div>
							<div class="width-100 text-center"><a href="#">Phòng ngừa</a></div>
						</div>
					</div>
				</div>
				<div class="col1">
					<h2 class="text-center width-100">Bệnh lậu</h2>
					<div class="flex flex2 width-100">
						<div class="col1"><i class="bg bg1"></i></div>
						<div class="col1 flex flex3 border1 flex-wrap-wrap align-content-end">
							<div class="width-100 text-center"><a href="#">Nguyên nhân</a></div>
							<div class="width-100 text-center"><a href="#">Nguy hại</a></div>
							<div class="width-100 text-center"><a href="#">Chi phí</a></div>
						</div>
						<div class="col1 flex flex3 flex-wrap-wrap align-content-end">
							<div class="width-100 text-center"><a href="#">Triệu chứng</a></div>
							<div class="width-100 text-center"><a href="#">Điều trị</a></div>
							<div class="width-100 text-center"><a href="#">Phòng ngừa</a></div>
						</div>
					</div>
				</div>
				<div class="col1">
					<h2 class="text-center width-100">Giang mai</h2>
					<div class="flex flex2 width-100">
						<div class="col1"><i class="bg bg2"></i></div>
						<div class="col1 flex flex3 border1 flex-wrap-wrap align-content-end">
							<div class="width-100 text-center"><a href="#">Nguyên nhân</a></div>
							<div class="width-100 text-center"><a href="#">Nguy hại</a></div>
							<div class="width-100 text-center"><a href="#">Chi phí</a></div>
						</div>
						<div class="col1 flex flex3 flex-wrap-wrap align-content-end">
							<div class="width-100 text-center"><a href="#">Triệu chứng</a></div>
							<div class="width-100 text-center"><a href="#">Điều trị</a></div>
							<div class="width-100 text-center"><a href="#">Phòng ngừa</a></div>
						</div>
					</div>
				</div>
				<div class="col1">
					<h2 class="text-center width-100">Mụn rộp sinh dục</h2>
					<div class="flex flex2 width-100">
						<div class="col1"><i class="bg bg3"></i></div>
						<div class="col1 flex flex3 border1 flex-wrap-wrap align-content-end">
							<div class="width-100 text-center"><a href="#">Nguyên nhân</a></div>
							<div class="width-100 text-center"><a href="#">Nguy hại</a></div>
							<div class="width-100 text-center"><a href="#">Chi phí</a></div>
						</div>
						<div class="col1 flex flex3 flex-wrap-wrap align-content-end">
							<div class="width-100 text-center"><a href="#">Triệu chứng</a></div>
							<div class="width-100 text-center"><a href="#">Điều trị</a></div>
							<div class="width-100 text-center"><a href="#">Phòng ngừa</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row2 container">
			<div class="flex flex1 justify-content-between">
				<div class="col1">
					<div class="line1 text-uppercase"><span>Bài đọc nhiều</span></div>
					<div class="clearfix line2">
						<div class="pull-left">
							<a href="#"><img src="{{ asset('public/images/desktop/home-3.png') }}" alt=""></a>
						</div>
						<div class="post-first">
							<h3 class="post-name text-center">NGUYÊN NHÂN DẪN ĐẾN SÙI MÀO GÀ LÀ GÌ</h3>
							<p class="post-description text-justify">
								Sùi mào gà là một loại bệnh xã hội vô cùng nguy hiểm có thể gặp phải ở cả nam lẫn nữ. Các bác sĩ chuyên khoa trong việc chữa trị bệnh xã hội trong đó có bệnh sùi mào gà tại <a href="#">Chi tiết</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col2">
					<div class="heading text-center">Đội ngũ Bác sĩ Nam Khang</div>
					<div><img src="{{ asset('public/images/desktop/home-2.png') }}" class="center-block" alt="Đội ngũ Bác sĩ Nam Khang"></div>
					<div class="flex flex2 justify-content-between">
						<div class="text-center">
							<a href="">Bác sĩ tư vấn</a>
						</div>
						<div class="text-center">
							<a href="">Xếp số hẹn khám</a>
						</div>
					</div>
					<div>
						Lựa chọn đúng bác sĩ là đã thành công một nửa. Mỗi chuyên gia Phòng khám chuyên khoa Nam Khang đều có hơn 20 năm kinh nghiệm khám và điều trị. Chẩn đoán chính xác, hiệu quả rõ rệt, chăm sóc tận tình là “thương hiệu” của họ.
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection('content')