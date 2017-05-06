@extends('layout.mobile')
@section('title')
    <title>{{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
	@include('seo.seo_home')
@endsection('keyword')
@section('css')
	<link rel="canonical" href="{{ url('/') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-home.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-mediaqueries.css') }}">
@endsection('css')
@section('content')
	<main class="container home">
		<div class="row1">
			<div class="text-center text-uppercase line1">Hỏi bác sỹ nhanh,  chuyên gia online 24/7</div>
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<a href="">
						<img src="{{ asset('public/images/mobile/home-1.png') }}" alt="" class="img-responsive">
					</a>
				</div>
				<div class="flex1col2">
					<a href="">
						<img src="{{ asset('public/images/mobile/home-2.png') }}" alt="" class="img-responsive">
					</a>
				</div>
			</div>
		</div>
		<div class="row2 global1">
			<div class="flex flex1 justify-content-between">
				<div class="text-uppercase flex1col1 flex align-items-center">ĐỘi ngũ chuyên gia Nam Khang</div>
				<div class="flex1col2 flex align-items-center">
					<a href="" class="flex align-items-center justify-content-center text-center arrow_box">Tìm hiểu thêm</a>
				</div>
			</div>
		</div>
		<div class="row3">
			<a href="">
				<img src="{{ asset('public/images/mobile/home-3.png') }}" alt="" class="img-responsive">
			</a>
		</div>
		<div class="row4">
			<div class="flex justify-content-between">
				<a class="flex1col1 flex align-items-center justify-content-center">
					Tư vấn<br>đặt hẹn
				</a>
				<div class="flex1col2 justify-content-center align-items-center flex">
					Lựa chọn đúng bác sĩ là đã thành công một nửa. Mỗi chuyên gia Phòng khám chuyên khoa Nam Khang đều có hơn 20 năm kinh nghiệm khám và điều trị. Chẩn đoán chính xác, hiệu quả rõ rệt, chăm sóc tận tình là “thương hiệu” của họ.
				</div>
			</div>
		</div>
		<div class="row5 global1">
			<div class="flex flex1 justify-content-between">
				<div class="text-uppercase flex1col1 flex align-items-center">Danh mục bệnh</div>
				<div class="flex1col2 flex align-items-center">
					<a href="" class="flex align-items-center justify-content-center text-center arrow_box">Tìm hiểu thêm</a>
				</div>
			</div>
		</div>
		<div class="row6">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1 flex align-items-center justify-content-center text-center">
					<h2 class="text-uppercase">Sùi mào gà</h2>
				</div>
				<div class="flex1col2 flex flex-wrap-wrap align-content-between justify-content-between">
					<a href="" class="text-center flex align-items-center justify-content-center">Nguyên nhân</a>
					<a href="" class="text-center flex align-items-center justify-content-center">Triệu chứng</a>
					<a href="" class="text-center flex align-items-center justify-content-center">Nguy hại</a>
					<a href="" class="text-center flex align-items-center justify-content-center">Điều trị</a>
					<a href="" class="text-center flex align-items-center justify-content-center">Chi phí</a>
					<a href="" class="text-center flex align-items-center justify-content-center">kiểm tra</a>
				</div>
			</div>
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1 flex align-items-center justify-content-center text-center">
					<h2 class="text-uppercase">Bệnh lậu</h2>
				</div>
				<div class="flex1col2 flex flex-wrap-wrap align-content-between justify-content-between">
					<a href="" class="text-center flex align-items-center justify-content-center">Nguyên nhân</a>
					<a href="" class="text-center flex align-items-center justify-content-center">Triệu chứng</a>
					<a href="" class="text-center flex align-items-center justify-content-center">Nguy hại</a>
					<a href="" class="text-center flex align-items-center justify-content-center">Điều trị</a>
					<a href="" class="text-center flex align-items-center justify-content-center">Chi phí</a>
					<a href="" class="text-center flex align-items-center justify-content-center">kiểm tra</a>
				</div>
			</div>
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1 flex align-items-center justify-content-center text-center">
					<h2 class="text-uppercase">Giang mai</h2>
				</div>
				<div class="flex1col2 flex flex-wrap-wrap align-content-between justify-content-between">
					<a href="" class="text-center flex align-items-center justify-content-center">Nguyên nhân</a>
					<a href="" class="text-center flex align-items-center justify-content-center">Triệu chứng</a>
					<a href="" class="text-center flex align-items-center justify-content-center">Nguy hại</a>
					<a href="" class="text-center flex align-items-center justify-content-center">Điều trị</a>
					<a href="" class="text-center flex align-items-center justify-content-center">Chi phí</a>
					<a href="" class="text-center flex align-items-center justify-content-center">kiểm tra</a>
				</div>
			</div>
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1 flex align-items-center justify-content-center text-center">
					<h2 class="text-uppercase">Mụn rộp sinh dục</h2>
				</div>
				<div class="flex1col2 flex flex-wrap-wrap align-content-between justify-content-between">
					<a href="" class="text-center flex align-items-center justify-content-center">Nguyên nhân</a>
					<a href="" class="text-center flex align-items-center justify-content-center">Triệu chứng</a>
					<a href="" class="text-center flex align-items-center justify-content-center">Nguy hại</a>
					<a href="" class="text-center flex align-items-center justify-content-center">Điều trị</a>
					<a href="" class="text-center flex align-items-center justify-content-center">Chi phí</a>
					<a href="" class="text-center flex align-items-center justify-content-center">kiểm tra</a>
				</div>
			</div>
		</div>
		<div class="row7">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1 flex align-items-center justify-content-center text-center">
					Hỏi đúng bệnh
				</div>
				<div class="flex1col2 flex flex-wrap-wrap align-content-between">
					<a href="" class="flex align-items-center justify-content-center text-center bg1 width-100">
						Niệu đạo chảy mủ
					</a>
					<a href="" class="flex align-items-center justify-content-center text-center bg2 width-100">
						Lỗ niệu đạo sưng đau
					</a>
					<a href="" class="flex align-items-center justify-content-center text-center bg3 width-100">
						Lỗ niệu đạo ngứa rát
					</a>
				</div>
				<div class="flex1col2 flex flex-wrap-wrap align-content-between">
					<a href="" class="flex align-items-center justify-content-center text-center bg4 width-100">
						Bao quy sưng đỏ
					</a>
					<a href="" class="flex align-items-center justify-content-center text-center bg5 width-100">
						Dương vật mọc mụn
					</a>
					<a href="" class="flex align-items-center justify-content-center text-center bg6 width-100">
						Những đám mụn màu hồng
					</a>
				</div>
				<div class="flex1col2 flex flex-wrap-wrap align-content-between">
					<a href="" class="flex align-items-center justify-content-center text-center bg7 width-100">
						Quy đầu mọc nốt<br>nhỏ màu đỏ
					</a>
					<a href="" class="flex align-items-center justify-content-center text-center bg8 width-100">
						Bao quy lở loét
					</a>
				</div>
			</div>
		</div>
		<div class="row8">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1 flex align-items-end flex-wrap-wrap">
					Nam khang
				</div>
				<div class="flex1col2 flex align-items-end flex-wrap-wrap">
					Nam khoa chuyên nghiệp
				</div>
				<div class="flex1col3 flex align-items-end flex-wrap-wrap">
					<a href="">>> Xem thêm</a>
				</div>
			</div>
		</div>
		<div class="row9">
			<div class="overfllow">
				<div class="slick-pk">
					<div class="col1">
						<img src="{{ asset('public/images/mobile/home-5.png') }}" alt="" class="img-responsive">
					</div>
					<div class="col1">
						<img src="{{ asset('public/images/mobile/home-6.png') }}" alt="" class="img-responsive">
					</div>
					<div class="col1">
						<img src="{{ asset('public/images/mobile/home-7.png') }}" alt="" class="img-responsive">
					</div>
					<div class="col1">
						<img src="{{ asset('public/images/mobile/home-8.png') }}" alt="" class="img-responsive">
					</div>
					<div class="col1">
						<img src="{{ asset('public/images/mobile/home-9.png') }}" alt="" class="img-responsive">
					</div>
					<div class="col1">
						<img src="{{ asset('public/images/mobile/home-10.png') }}" alt="" class="img-responsive">
					</div>
				</div>
			</div>
			<script>
				$('.slick-pk').slick({
				  	slidesToShow: 3,
				  	slidesToScroll: 1,
				  	autoplay: true,
				  	autoplaySpeed: 5000,
				});	
			</script>
		</div>
	</main>

@endsection('content')
@section('toolbar')
	<div class="container footer-toolbar">
		<div class="flex flex2 justify-content-between">
			<div class="flex2col1 flex justify-content-center">
				<div class="flex3col1 flex align-items-center justify-content-center">
					<div class="text-center h3"><a href="tel:18006181"><i class="bg bg1"></i></a></div>
				</div>
				<div class="flex3col2 flex align-items-center justify-content-center">
					<div class="text-center h4"><a href="tel:18006181">Điện thoại tư vấn</a></div>
				</div>
			</div>
			<div class="flex2col1 flex justify-content-center">
				<div class="flex3col1 flex align-items-center justify-content-center">
					<div class="text-center h3"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="bg bg2"></i></a></div>
				</div>
				<div class="flex3col2 flex align-items-center justify-content-center">
					<div class="text-center h4"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tư vấn trực tuyến</a></div>
				</div>
			</div>
			<div class="flex2col1 flex justify-content-center">
				<div class="flex3col1 flex align-items-center justify-content-center">
					<div class="text-center h3"><a href="#top"><i class="bg bg3"></i></a></div>
				</div>
				<div class="flex3col2 flex align-items-center justify-content-center">
					<div class="text-center h4"><a href="#top">Lên đầu trang</a></div>
				</div>
			</div>
		</div>
	</div>
@endsection('toolbar')