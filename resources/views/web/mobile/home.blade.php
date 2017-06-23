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
			<div class="dis-table width-100 table1">
				<div class="table-cell">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Tư vấn trực tuyến">
						<img src="{{ asset('public/images/mobile/home-1.png') }}" alt="Tư vấn trực tuyến" class="img-responsive">
					</a>
				</div>
				<div class="table-cell">
					<a href="tel:18006181" title="1800 6181">
						<img src="{{ asset('public/images/mobile/home-2.png') }}" alt="1800 6181" class="img-responsive">
					</a>
				</div>
			</div>
		</div>
		<div class="row2 global1">
			<div class="dis-table width-100">
				<div class="text-uppercase table-cell">ĐỘi ngũ chuyên gia Nam Khang</div>
				<div class="table-cell">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="text-center arrow_box dis-table" title="Tìm hiểu thêm"><span class="table-cell text-center">Tìm hiểu thêm</span></a>
				</div>
			</div>
		</div>
		<div class="row3">
			<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
				<img src="{{ asset('public/images/mobile/home-3.png') }}" alt="ĐỘi ngũ chuyên gia Nam Khang" class="img-responsive">
			</a>
		</div>
		<div class="row4">
			<div class="dis-table">
				<a class="table-cell text-center" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
					Tư vấn<br>đặt hẹn
				</a>
				<div class="table-cell">
					<div>
						Lựa chọn đúng bác sĩ là đã thành công một nửa. Mỗi chuyên gia Phòng khám chuyên khoa Nam Khang đều có hơn 20 năm kinh nghiệm khám và điều trị. Chẩn đoán chính xác, hiệu quả rõ rệt, chăm sóc tận tình là “thương hiệu” của họ.
					</div>
				</div>
			</div>
		</div>
		<div class="row5 global1">
			<div class="dis-table width-100">
				<div class="text-uppercase table-cell">Danh mục bệnh</div>
				<div class="table-cell">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="text-center arrow_box dis-table" title="Tìm hiểu thêm"><span class="table-cell text-center">Tìm hiểu thêm</span></a>
				</div>
			</div>
		</div>
		<div class="row6">
			<div class="dis-table width-100 table1">
				<div class="table-cell text-center">
					<div><h2 class="text-uppercase"><a href="{{ MyAPI::getUrlTermID(28) }}">Sùi mào gà</a></h2></div>
				</div>
				<div class="table-cell">
					<a href="{{ MyAPI::getUrlPostID(45) }}" class="text-center dis-table width-100" title="Nguyên nhân"><span class="table-cell">Nguyên nhân</span></a>
					<a href="{{ MyAPI::getUrlPostID(47) }}" class="text-center dis-table width-100" title="Triệu chứng"><span class="table-cell">Triệu chứng</span></a>
				</div>
				<div class="table-cell">
					<a href="{{ MyAPI::getUrlPostID(51) }}" class="text-center dis-table width-100" title="Nguy hại"><span class="table-cell">Nguy hại</span></a>
					<a href="{{ MyAPI::getUrlPostID(48) }}" class="text-center dis-table width-100" title="Điều trị"><span class="table-cell">Điều trị</span></a>
				</div>
				<div class="table-cell">
					<a href="#" class="text-center dis-table width-100" title="Chi phí"><span class="table-cell">Chi phí</span></a>
					<a href="{{ MyAPI::getUrlPostID(42) }}" class="text-center dis-table width-100" title="Kiểm tra"><span class="table-cell">Kiểm tra</span></a>
				</div>
			</div>
			<div class="dis-table width-100 table1">
				<div class="table-cell text-center">
					<div><h2 class="text-uppercase"><a href="{{ MyAPI::getUrlTermID(30) }}">Bệnh lậu</a></h2></div>
				</div>
				<div class="table-cell">
					<a href="{{ MyAPI::getUrlPostID(61) }}" class="text-center dis-table width-100" title="Nguyên nhân"><span class="table-cell">Nguyên nhân</span></a>
					<a href="{{ MyAPI::getUrlPostID(66) }}" class="text-center dis-table width-100" title="Triệu chứng"><span class="table-cell">Triệu chứng</span></a>
				</div>
				<div class="table-cell">
					<a href="{{ MyAPI::getUrlPostID(83) }}" class="text-center dis-table width-100" title="Nguy hại"><span class="table-cell">Nguy hại</span></a>
					<a href="{{ MyAPI::getUrlPostID(64) }}" class="text-center dis-table width-100" title="Điều trị"><span class="table-cell">Điều trị</span></a>
				</div>
				<div class="table-cell">
					<a href="{{ MyAPI::getUrlPostID(77) }}" class="text-center dis-table width-100" title="Chi phí"><span class="table-cell">Chi phí</span></a>
					<a href="{{ MyAPI::getUrlPostID(59) }}" class="text-center dis-table width-100" title="Kiểm tra"><span class="table-cell">Kiểm tra</span></a>
				</div>
			</div>
			<div class="dis-table width-100 table1">
				<div class="table-cell text-center">
					<div><h2 class="text-uppercase"><a href="{{ MyAPI::getUrlTermID(29) }}">Giang mai</a></h2></div>
				</div>
				<div class="table-cell">
					<a href="{{ MyAPI::getUrlPostID(60) }}" class="text-center dis-table width-100" title="Nguyên nhân"><span class="table-cell">Nguyên nhân</span></a>
					<a href="{{ MyAPI::getUrlPostID(50) }}" class="text-center dis-table width-100" title="Triệu chứng"><span class="table-cell">Triệu chứng</span></a>
				</div>
				<div class="table-cell">
					<a href="{{ MyAPI::getUrlPostID(57) }}" class="text-center dis-table width-100" title="Nguy hại"><span class="table-cell">Nguy hại</span></a>
					<a href="{{ MyAPI::getUrlPostID(58) }}" class="text-center dis-table width-100" title="Điều trị"><span class="table-cell">Điều trị</span></a>
				</div>
				<div class="table-cell">
					<a href="" class="text-center dis-table width-100" title="Chi phí"><span class="table-cell">Chi phí</span></a>
					<a href="{{ MyAPI::getUrlPostID(44) }}" class="text-center dis-table width-100" title="Kiểm tra"><span class="table-cell">Kiểm tra</span></a>
				</div>
			</div>
			<div class="dis-table width-100 table1">
				<div class="table-cell text-center">
					<div><h2 class="text-uppercase"><a href="{{ MyAPI::getUrlTermID(31) }}">Mụn rộp sinh dục</a></h2></div>
				</div>
				<div class="table-cell">
					<a href="{{ MyAPI::getUrlPostID(67) }}" class="text-center dis-table width-100" title="Nguyên nhân"><span class="table-cell">Nguyên nhân</span></a>
					<a href="{{ MyAPI::getUrlPostID(71) }}" class="text-center dis-table width-100" title="Triệu chứng"><span class="table-cell">Triệu chứng</span></a>
				</div>
				<div class="table-cell">
					<a href="{{ MyAPI::getUrlPostID(73) }}" class="text-center dis-table width-100" title="Nguy hại"><span class="table-cell">Nguy hại</span></a>
					<a href="{{ MyAPI::getUrlPostID(69) }}" class="text-center dis-table width-100" title="Điều trị"><span class="table-cell">Điều trị</span></a>
				</div>
				<div class="table-cell">
					<a href="" class="text-center dis-table width-100" title="Chi phí"><span class="table-cell">Chi phí</span></a>
					<a href="{{ MyAPI::getUrlPostID(62) }}" class="text-center dis-table width-100" title="Kiểm tra"><span class="table-cell">Kiểm tra</span></a>
				</div>
			</div>
		</div>
		<div class="row7">
			<div class="dis-table width-100 table1">
				<div class="table-cell text-center">
					Hỏi đúng bệnh
				</div>
				<div class="table-cell">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-table text-center bg1 width-100" title="Niệu đạo chảy mủ">
						<span class="table-cell">Niệu đạo chảy mủ</span>
					</a>
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-table text-center bg2 width-100" title="Lỗ niệu đạo sưng đau">
						<span class="table-cell">Lỗ niệu đạo sưng đau</span>
					</a>
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-table text-center bg3 width-100" title="Lỗ niệu đạo ngứa rát">
						<span class="table-cell">Lỗ niệu đạo ngứa rát</span>
					</a>
				</div>
				<div class="table-cell">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-table text-center bg4 width-100" title="Bao quy sưng đỏ">
						<span class="table-cell">Bao quy sưng đỏ</span>
					</a>
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-table text-center bg5 width-100" title="Dương vật mọc mụn">
						<span class="table-cell">Dương vật mọc mụn</span>
					</a>
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-table text-center bg6 width-100" title="Những đám mụn màu hồng">
						<span class="table-cell">Những đám mụn màu hồng</span>
					</a>
				</div>
				<div class="table-cell">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-table text-center bg7 width-100" title="Quy đầu mọc nốt nhỏ màu đỏ">
						<span class="table-cell">Quy đầu mọc nốt<br>nhỏ màu đỏ</span>
					</a>
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-table text-center bg8 width-100" title="Bao quy lở loét">
						<span class="table-cell">Bao quy lở loét</span>
					</a>
				</div>
			</div>
		</div>
		<div class="row8">
			<div class="dis-table width-100">
				<div class="table-cell cell1">
					Nam khang
				</div>
				<div class="table-cell cell2">
					Nam khoa chuyên nghiệp
				</div>
				<div class="table-cell cell3">
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
		<div class="dis-table width-100">
			<div class="table-cell cell1">
				<div class="dis-table width-100">
					<div class="table-cell">
						<h3 class="text-center"><a href="tel:18006181"><i class="bg bg1"></i></a></h3>
					</div>
					<div class="table-cell">
						<h4 class="text-center"><a href="tel:18006181">Điện thoại tư vấn</a></h4>
					</div>
				</div>
			</div>
			<div class="table-cell cell2">
				<div class="dis-table width-100">
					<div class="table-cell">
						<h3 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="bg bg2"></i></a></h3>
					</div>
					<div class="table-cell">
						<h4 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tư vấn trực tuyến</a></h4>
					</div>
				</div>
			</div>
			<div class="table-cell cell1">
				<div class="dis-table width-100">
					<div class="table-cell">
						<h3 class="text-center"><a href="#top"><i class="bg bg3"></i></a></h3>
					</div>
					<div class="table-cell">
						<h4 class="text-center"><a href="{{ url('/') }}">Quay lại</a></h4>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection('toolbar')