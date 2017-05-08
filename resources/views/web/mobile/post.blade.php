@extends('layout.mobile')
@section('title')
	<title>{{ $data['post']->post_name }} - {{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
	@include('seo.seo_post',['data'=>$data])
@endsection('keyword')
@php $term = $data['post']->term; @endphp
@section('css')
<link rel="canonical" href="{{ MyAPI::getUrlPostObj($data['post']) }}" />
<link rel="stylesheet" href="{{ asset('public/font/post-detail-css.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-home.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-term.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-post.css') }}">
@endsection('css')
@section('content')
	<div class="container home term">
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
		<div class="row6">
			<div class="crub">
				<div class="flex">
					<div class="col1 flex justify-content-center align-items-center">
						<div class="h5"><a href="{{ url('/') }}">Trang chủ <i class="fa fa-angle-right"></i> </a> <a href="{{ MyAPI::getUrlTermObj($term) }}">{{ $term->term_name }}</a></div>
					</div>
				</div>
			</div>
			<div class="post">
				<div class="post-name">
					<h1>{{ $data['post']->post_name }}</h1>
				</div>
				<div class="post-description"></div>
				<div class="post-detail">
					{!! $data['post']->post_detail !!}
				</div>
				<div class="post-footer">
					<div><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/mobile2/about-4.png') }}" class="center-block img-responsive"></a></div>
					<p>
						<span>Nhắc nhở: </span>
						Nếu muốn chữa khỏi bệnh, đầu tiên bệnh nhân cần xây dựng lòng tin có thể hồi phục, sau đó tích cực phối hợp với bác sĩ điều trị, nghiêm ngặt tuân theo yêu cầu của bác sĩ, có như vậy mới có thể hồi phục càng nhanh, bệnh nhân nếu như có gì bất thường thì cần phải đến bệnh viện kiểm tra thăm khám, vì bệnh tật sẽ không tự khỏi khi bạn kéo dài thời gian, nhưng chắc chắn do điều trị không kịp thời mà bệnh càng nặng lên, vì thế kịp thời đi khám, kiểm tra sớm, điều trị sớm mới là tốt.
					</p>
					<h4>Số điện thoại tư vấn : <a href="tel:18006181">1800-6181</a> - <a href="tel:043-9656999">043-9656999</a></h4>
				</div>
			</div>
			<div class="posts-lienquan">
				<div class="post">
					<h4><i class="fa fa-plus-square"></i> Bài viết liên quan</h4>
					<ul>
						@php $posts = $term->post()->where('id','<>',$data['post']->id)->limit(6)->get(); @endphp
						@foreach($posts as $post)
						<li><a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a></li>
						@endforeach
					</ul>
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
		<div class="row4">
			<div class="flex justify-content-between">
				<a class="flex1col1 flex align-items-center justify-content-center" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
					Tư vấn<br>đặt hẹn
				</a>
				<div class="flex1col2 justify-content-center align-items-center flex">
					Lựa chọn đúng bác sĩ là đã thành công một nửa. Mỗi chuyên gia Phòng khám chuyên khoa Nam Khang đều có hơn 20 năm kinh nghiệm khám và điều trị. Chẩn đoán chính xác, hiệu quả rõ rệt, chăm sóc tận tình là “thương hiệu” của họ.
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
	</div>
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