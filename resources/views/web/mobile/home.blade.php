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
@endsection('css')
@section('content')
	<main class="container home">
		<div class="row1">
			<div class="text-center text-uppercase line1">Hỏi bác sỹ nhanh,  chuyên gia online 24/7</div>
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Tư vấn trực tuyến">
						<img src="{{ asset('public/images/mobile/home-1.png') }}" alt="Tư vấn trực tuyến" class="img-responsive">
					</a>
				</div>
				<div class="flex1col2">
					<a href="tel:18006181" title="1800 6181">
						<img src="{{ asset('public/images/mobile/home-2.png') }}" alt="1800 6181" class="img-responsive">
					</a>
				</div>
			</div>
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
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="flex align-items-center justify-content-center text-center arrow_box" title="Tìm hiểu thêm">Tìm hiểu thêm</a>
				</div>
			</div>
		</div>
		<div class="row6">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1 flex align-items-center justify-content-center text-center">
					<h2 class="text-uppercase"><a href="{{ MyAPI::getUrlTermID(28) }}">Sùi mào gà</a></h2>
				</div>
				<div class="flex1col2 flex flex-wrap-wrap align-content-between justify-content-between">
					<a href="" class="text-center flex align-items-center justify-content-center" title="Nguyên nhân">Nguyên nhân</a>
					<a href="" class="text-center flex align-items-center justify-content-center" title="Triệu chứng">Triệu chứng</a>
					<a href="" class="text-center flex align-items-center justify-content-center" title="Nguy hại">Nguy hại</a>
					<a href="" class="text-center flex align-items-center justify-content-center" title="Điều trị">Điều trị</a>
					<a href="" class="text-center flex align-items-center justify-content-center" title="Chi phí">Chi phí</a>
					<a href="" class="text-center flex align-items-center justify-content-center" title="Kiểm tra">Kiểm tra</a>
				</div>
			</div>
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1 flex align-items-center justify-content-center text-center">
					<h2 class="text-uppercase"><a href="{{ MyAPI::getUrlTermID(30) }}">Bệnh lậu</a></h2>
				</div>
				<div class="flex1col2 flex flex-wrap-wrap align-content-between justify-content-between">
					<a href="" class="text-center flex align-items-center justify-content-center" title="Nguyên nhân">Nguyên nhân</a>
					<a href="" class="text-center flex align-items-center justify-content-center" title="Triệu chứng">Triệu chứng</a>
					<a href="" class="text-center flex align-items-center justify-content-center" title="Nguy hại">Nguy hại</a>
					<a href="" class="text-center flex align-items-center justify-content-center" title="Điều trị">Điều trị</a>
					<a href="" class="text-center flex align-items-center justify-content-center" title="Chi phí">Chi phí</a>
					<a href="" class="text-center flex align-items-center justify-content-center" title="Kiểm tra">Kiểm tra</a>
				</div>
			</div>
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1 flex align-items-center justify-content-center text-center">
					<h2 class="text-uppercase"><a href="{{ MyAPI::getUrlTermID(29) }}">Giang mai</a></h2>
				</div>
				<div class="flex1col2 flex flex-wrap-wrap align-content-between justify-content-between">
					<a href="" class="text-center flex align-items-center justify-content-center" title="Nguyên nhân">Nguyên nhân</a>
					<a href="" class="text-center flex align-items-center justify-content-center" title="Triệu chứng">Triệu chứng</a>
					<a href="" class="text-center flex align-items-center justify-content-center" title="Nguy hại">Nguy hại</a>
					<a href="" class="text-center flex align-items-center justify-content-center" title="Điều trị">Điều trị</a>
					<a href="" class="text-center flex align-items-center justify-content-center" title="Chi phí">Chi phí</a>
					<a href="" class="text-center flex align-items-center justify-content-center" title="Kiểm tra">Kiểm tra</a>
				</div>
			</div>
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1 flex align-items-center justify-content-center text-center">
					<h2 class="text-uppercase"><a href="{{ MyAPI::getUrlTermID(31) }}">Mụn rộp sinh dục</a></h2>
				</div>
				<div class="flex1col2 flex flex-wrap-wrap align-content-between justify-content-between">
					<a href="" class="text-center flex align-items-center justify-content-center" title="Nguyên nhân">Nguyên nhân</a>
					<a href="" class="text-center flex align-items-center justify-content-center" title="Triệu chứng">Triệu chứng</a>
					<a href="" class="text-center flex align-items-center justify-content-center" title="Nguy hại">Nguy hại</a>
					<a href="" class="text-center flex align-items-center justify-content-center" title="Điều trị">Điều trị</a>
					<a href="" class="text-center flex align-items-center justify-content-center" title="Chi phí">Chi phí</a>
					<a href="" class="text-center flex align-items-center justify-content-center" title="Kiểm tra">Kiểm tra</a>
				</div>
			</div>
		</div>
		<div class="row7">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1 flex align-items-center justify-content-center text-center">
					Hỏi đúng bệnh
				</div>
				<div class="flex1col2 flex flex-wrap-wrap align-content-between">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="flex align-items-center justify-content-center text-center bg1 width-100" title="Niệu đạo chảy mủ">
						Niệu đạo chảy mủ
					</a>
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="flex align-items-center justify-content-center text-center bg2 width-100" title="Lỗ niệu đạo sưng đau">
						Lỗ niệu đạo sưng đau
					</a>
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="flex align-items-center justify-content-center text-center bg3 width-100" title="Lỗ niệu đạo ngứa rát">
						Lỗ niệu đạo ngứa rát
					</a>
				</div>
				<div class="flex1col2 flex flex-wrap-wrap align-content-between">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="flex align-items-center justify-content-center text-center bg4 width-100" title="Bao quy sưng đỏ">
						Bao quy sưng đỏ
					</a>
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="flex align-items-center justify-content-center text-center bg5 width-100" title="Dương vật mọc mụn">
						Dương vật mọc mụn
					</a>
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="flex align-items-center justify-content-center text-center bg6 width-100" title="Những đám mụn màu hồng">
						Những đám mụn màu hồng
					</a>
				</div>
				<div class="flex1col2 flex flex-wrap-wrap align-content-between">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="flex align-items-center justify-content-center text-center bg7 width-100" title="Quy đầu mọc nốt nhỏ màu đỏ">
						Quy đầu mọc nốt<br>nhỏ màu đỏ
					</a>
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="flex align-items-center justify-content-center text-center bg8 width-100" title="Bao quy lở loét">
						Bao quy lở loét
					</a>
				</div>
			</div>
		</div>
		<div class="row2 global1">
			<div class="flex flex1 justify-content-between">
				<div class="text-uppercase flex1col1 flex align-items-center">ĐỘi ngũ chuyên gia Nam Khang</div>
				<div class="flex1col2 flex align-items-center">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="flex align-items-center justify-content-center text-center arrow_box" title="Tìm hiểu thêm">Tìm hiểu thêm</a>
				</div>
			</div>
		</div>
		<div class="row3">
			<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
				<img src="{{ asset('public/images/mobile/home-3.png') }}" alt="ĐỘi ngũ chuyên gia Nam Khang" class="img-responsive">
			</a>
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
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Xem thêm">>> Xem thêm</a>
				</div>
			</div>
		</div>
		<div class="row9">
			<div class="overfllow">
				<div class="slick-pk">
					<div class="col1">
						<img src="{{ asset('public/images/mobile/home-5.png') }}" alt="Hình ảnh phòng khám" class="img-responsive">
					</div>
					<div class="col1">
						<img src="{{ asset('public/images/mobile/home-6.png') }}" alt="Hình ảnh phòng khám" class="img-responsive">
					</div>
					<div class="col1">
						<img src="{{ asset('public/images/mobile/home-7.png') }}" alt="Hình ảnh phòng khám" class="img-responsive">
					</div>
					<div class="col1">
						<img src="{{ asset('public/images/mobile/home-8.png') }}" alt="Hình ảnh phòng khám" class="img-responsive">
					</div>
					<div class="col1">
						<img src="{{ asset('public/images/mobile/home-9.png') }}" alt="Hình ảnh phòng khám" class="img-responsive">
					</div>
					<div class="col1">
						<img src="{{ asset('public/images/mobile/home-10.png') }}" alt="Hình ảnh phòng khám" class="img-responsive">
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
					<div class="text-center h3"><a href="tel:18006181" title="Điện thoại tư vấn"><i class="bg bg1"></i></a></div>
				</div>
				<div class="flex3col2 flex align-items-center justify-content-center">
					<div class="text-center h4"><a href="tel:18006181" title="Điện thoại tư vấn">Điện thoại tư vấn</a></div>
				</div>
			</div>
			<div class="flex2col1 flex justify-content-center">
				<div class="flex3col1 flex align-items-center justify-content-center">
					<div class="text-center h3"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Tư vấn trực tuyến"><i class="bg bg2"></i></a></div>
				</div>
				<div class="flex3col2 flex align-items-center justify-content-center">
					<div class="text-center h4"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Tư vấn trực tuyến">Tư vấn trực tuyến</a></div>
				</div>
			</div>
			<div class="flex2col1 flex justify-content-center">
				<div class="flex3col1 flex align-items-center justify-content-center">
					<div class="text-center h3"><a href="#top"><i class="bg bg3"></i></a></div>
				</div>
				<div class="flex3col2 flex align-items-center justify-content-center">
					<div class="text-center h4"><a href="#top" title="Lên đầu trang">Lên đầu trang</a></div>
				</div>
			</div>
		</div>
	</div>
@endsection('toolbar')