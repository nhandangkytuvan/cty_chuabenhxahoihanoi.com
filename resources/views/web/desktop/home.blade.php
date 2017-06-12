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
		</div>
		<script>
			$('.slick-home').slick({
			  	slidesToShow: 1,
			  	slidesToScroll: 1,
			  	autoplay: true,
			  	autoplaySpeed: 5000,
			});	
		</script>
	</div>
	<main class="home">
		<div class="row1 container">
			<div class="flex flex1 align-items-center">
				<div class="col1">
					<h2 class="text-center width-100"><a href="{{ MyAPI::getUrlTermID(28) }}" title="Sùi mào gà">Sùi mào gà</a></h2>
					<div class="flex flex2 width-100">
						<div class="col1"><i class="bg"></i></div>
						<div class="col1 flex flex3 border1 flex-wrap-wrap align-content-end">
							<div class="width-100 text-center"><a href="{{ MyAPI::getUrlPostID(45) }}" title="Nguyên nhân sùi mào gà">Nguyên nhân</a></div>
							<div class="width-100 text-center"><a href="{{ MyAPI::getUrlPostID(51) }}" title="Nguy hại">Nguy hại</a></div>
							<div class="width-100 text-center"><a href="#" title="Chi phí">Chi phí</a></div>
						</div>
						<div class="col1 flex flex3 flex-wrap-wrap align-content-end">
							<div class="width-100 text-center"><a href="{{ MyAPI::getUrlPostID(47) }}" title="Triệu chứng">Triệu chứng</a></div>
							<div class="width-100 text-center"><a href="{{ MyAPI::getUrlPostID(48) }}" title="Điều trị">Điều trị</a></div>
							<div class="width-100 text-center"><a href="#" title="Kiểm tra">Kiểm tra</a></div>
						</div>
					</div>
				</div>
				<div class="col1">
					<h2 class="text-center width-100"><a href="{{ MyAPI::getUrlTermID(30) }}" title="Bệnh lậu">Bệnh lậu</a></h2>
					<div class="flex flex2 width-100">
						<div class="col1"><i class="bg bg1"></i></div>
						<div class="col1 flex flex3 border1 flex-wrap-wrap align-content-end">
							<div class="width-100 text-center"><a href="#" title="Nguyên nhân">Nguyên nhân</a></div>
							<div class="width-100 text-center"><a href="#" title="Nguy hại">Nguy hại</a></div>
							<div class="width-100 text-center"><a href="#" title="Chi phí">Chi phí</a></div>
						</div>
						<div class="col1 flex flex3 flex-wrap-wrap align-content-end">
							<div class="width-100 text-center"><a href="#" title="Triệu chứng">Triệu chứng</a></div>
							<div class="width-100 text-center"><a href="#" title="Điều trị">Điều trị</a></div>
							<div class="width-100 text-center"><a href="#" title="Kiểm tra">Kiểm tra</a></div>
						</div>
					</div>
				</div>
				<div class="col1">
					<h2 class="text-center width-100"><a href="{{ MyAPI::getUrlTermID(29) }}" title="Giang mai">Giang mai</a></h2>
					<div class="flex flex2 width-100">
						<div class="col1"><i class="bg bg2"></i></div>
						<div class="col1 flex flex3 border1 flex-wrap-wrap align-content-end">
							<div class="width-100 text-center"><a href="#" title="Nguyên nhân">Nguyên nhân</a></div>
							<div class="width-100 text-center"><a href="#" title="Nguy hại">Nguy hại</a></div>
							<div class="width-100 text-center"><a href="#" title="Chi phí">Chi phí</a></div>
						</div>
						<div class="col1 flex flex3 flex-wrap-wrap align-content-end">
							<div class="width-100 text-center"><a href="{{ MyAPI::getUrlPostID(50) }}" title="Triệu chứng">Triệu chứng</a></div>
							<div class="width-100 text-center"><a href="#" title="Điều trị">Điều trị</a></div>
							<div class="width-100 text-center"><a href="#" title="Kiểm tra">Kiểm tra</a></div>
						</div>
					</div>
				</div>
				<div class="col1">
					<h2 class="text-center width-100"><a href="{{ MyAPI::getUrlTermID(31) }}" title="Mụn rộp sinh dục">Mụn rộp sinh dục</a></h2>
					<div class="flex flex2 width-100">
						<div class="col1"><i class="bg bg3"></i></div>
						<div class="col1 flex flex3 border1 flex-wrap-wrap align-content-end">
							<div class="width-100 text-center"><a href="#" title="Nguyên nhân">Nguyên nhân</a></div>
							<div class="width-100 text-center"><a href="#" title="Nguy hại">Nguy hại</a></div>
							<div class="width-100 text-center"><a href="#" title="Chi phí">Chi phí</a></div>
						</div>
						<div class="col1 flex flex3 flex-wrap-wrap align-content-end">
							<div class="width-100 text-center"><a href="#" title="Triệu chứng">Triệu chứng</a></div>
							<div class="width-100 text-center"><a href="#" title="Điều trị">Điều trị</a></div>
							<div class="width-100 text-center"><a href="#" title="Kiểm tra">Kiểm tra</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row2 container">
			<div class="flex flex1 justify-content-between">
				<div class="col1">
					<div class="slick-kt">
						<div>
							<a href="#"><img src="{{ asset('public/images/desktop/kt1.png') }}" alt=""></a>
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="view-more" title="Tìm hiểu">Tìm hiểu <i class="fa fa-long-arrow-right"></i></a>
						</div>
						<div>
							<a href="#"><img src="{{ asset('public/images/desktop/kt2.png') }}" alt=""></a>
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="view-more" title="Tìm hiểu">Tìm hiểu <i class="fa fa-long-arrow-right"></i></a>
						</div>
						<div>
							<a href="#"><img src="{{ asset('public/images/desktop/kt3.png') }}" alt=""></a>
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="view-more" title="Tìm hiểu">Tìm hiểu <i class="fa fa-long-arrow-right"></i></a>
						</div>
						<div>
							<a href="#"><img src="{{ asset('public/images/desktop/kt4.png') }}" alt=""></a>
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="view-more" title="Tìm hiểu">Tìm hiểu <i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
					<script>
						$('.slick-kt').slick({
						  	slidesToShow: 1,
						  	slidesToScroll: 1,
						  	autoplay: true,
						  	autoplaySpeed: 4000,
						});	
					</script>
				</div>
				<div class="col2">
					<div class="line1 text-uppercase"><span>Bài đọc nhiều</span></div>
					@if(isset($post_news[0]))
					<div class="post-first flex justify-content-between">
						<div>
							<a href="{{ MyAPI::getUrlPostObj($post_news[0]) }}"><img src="{{ asset('public/img/'.$post_news[0]->post_avatar) }}" 
							alt="{{ $post_news[0]->post_name }}" class="img-responsive center-block"></a>
						</div>
						<div>
							<h3 class="post-name text-center"><a title="{{ $post_news[0]->post_name }}" href="{{ MyAPI::getUrlPostObj($post_news[0]) }}">{{ $post_news[0]->post_name }}</a></h3>
							<p class="post-description text-justify">
								{!! MyAPI::getLimitWord($post_news[0]->post_description,40) !!} <a title="Xem đầy đủ" href="{{ MyAPI::getUrlPostObj($post_news[0]) }}">Chi tiết</a>
							</p>
						</div>
					</div>
					@php unset($post_news[0]); @endphp
					@endif
					<ul class="post-orthers">
						@foreach($post_news as $post)
						<li>
							<i class="fa fa-circle"></i> 
							<h4><a href="{{ MyAPI::getUrlPostObj($post) }}" title="{{ $post->post_name }}">{{ $post->post_name }}</a></h4>
							<p>{!! MyAPI::getLimitWord($post->post_description,15) !!}</p>
						</li>
						@endforeach
					</ul>
				</div>
				<div class="col3">
					<div class="heading text-center">Đội ngũ Bác sĩ Nam Khang</div>
					<div><img src="{{ asset('public/images/desktop/home-2.png') }}" class="center-block" alt="Đội ngũ Bác sĩ Nam Khang"></div>
					<div class="flex flex2 justify-content-between">
						<div class="text-center">
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Bác sĩ tư vấn">Bác sĩ tư vấn</a>
						</div>
						<div class="text-center">
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Xếp số hẹn khám">Xếp số hẹn khám</a>
						</div>
					</div>
					<div>
						Lựa chọn đúng bác sĩ là đã thành công một nửa. Mỗi chuyên gia Phòng khám chuyên khoa Nam Khang đều có hơn 20 năm kinh nghiệm khám và điều trị. Chẩn đoán chính xác, hiệu quả rõ rệt, chăm sóc tận tình là “thương hiệu” của họ.
					</div>
				</div>
			</div>
		</div>
		<div class="row3 container">
			<div class="flex flex1 justify-content-between">
				<div class="col1">
					<div class="text-uppercase">Triệu chứng thường gặp của các bệnh xã hội</div>
					<div class="flex flex2 justify-content-between">
						<div class="col1 flex flex3 flex-wrap-wrap align-content-between">
							<div class="width-100 flex align-items-center justify-content-center height1 text-center">
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Tiểu ra mũ">Tiểu ra mủ</a>
							</div>
							<div class="width-100 flex align-items-center justify-content-center height2 text-center">
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Sưng đau lỗ niệu đạo">Sưng đau<br>lỗ niệu đạo</a>
							</div>
							<div class="width-100 flex align-items-center justify-content-center height1 text-center">
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Ngứa lỗ niệu đạo">Ngứa lỗ niệu đạo</a>
							</div>
						</div>
						<div class="col1 flex flex3 flex-wrap-wrap align-content-between">
							<div class="width-100 flex align-items-center justify-content-center height2 text-center">
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Sưng đỏ bao quy đầu">Sưng đỏ<br>bao quy đầu</a>
							</div>
							<div class="width-100 flex align-items-center justify-content-center height1 text-center">
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Tiểu buốt">Tiểu buốt</a>
							</div>
							<div class="width-100 flex align-items-center justify-content-center height1 text-center">
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Nỗi mụn dương vật">Nổi mụn dương vật</a>
							</div>
						</div>
						<div class="col1 flex flex3 flex-wrap-wrap align-content-between">
							<div class="width-100 flex align-items-center justify-content-center height1 text-center">
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Vết loét đỏ">Vết loét đỏ</a>
							</div>
							<div class="width-100 flex align-items-center justify-content-center height1 text-center">
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Viêm quy đầu">Viêm quy đầu</a>
							</div>
							<div class="width-100 flex align-items-center justify-content-center height2 text-center">
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Đau ngứa dương vật">Đau ngứa<br>dương vật</a>
							</div>
						</div>
						<div class="col1 flex flex3 flex-wrap-wrap align-content-between">
							<div class="width-100 flex align-items-center justify-content-center height2 text-center">
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Mụn nước xuất hiện trên người">Mụn nước xuất<br>hiện trên người</a>
							</div>
							<div class="width-100 flex align-items-center justify-content-center height1 text-center">
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Sưng hạch">Sưng hạch</a>
							</div>
							<div class="width-100 flex align-items-center justify-content-center height1 text-center">
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Nổi mụn đỏ thành chùm">Nổi mụn đỏ thành chùm</a>
							</div>
						</div>
						<div class="col1 flex flex3 flex-wrap-wrap align-content-between">
							<div class="width-100 flex align-items-center justify-content-center height1 text-center">
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Loét bao quy đầu">Loét bao quy đầu</a>
							</div>
							<div class="width-100 flex align-items-center justify-content-center height1 text-center">
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Bạch biến quy đầu">Bạch biến quy đầu</a>
							</div>
							<div class="width-100 flex align-items-center justify-content-center height2 text-center">
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Chấm đỏ nhỏ ở quy đầu">Chấm đỏ nhỏ<br>ở quy đầu</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col2">
					<div class="text-uppercase line1">Dịch vụ tiện ích</div>
					<div class="flex flex4 flex-wrap-wrap align-content-between justify-content-between">
						<a class="flex4col1 flex align-items-center justify-content-around text-center hvr-glow" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Tư vấn trực tuyến">
							<i class="bg bg1"></i>
							<span>Tư vấn<br>trực tuyến</span>
						</a>
						<a class="flex4col1 flex align-items-center justify-content-around text-center hvr-glow" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Xếp số hẹn khám">
							<i class="bg bg2"></i>
							<span>Xếp số<br>hẹn khám</span>
						</a>
						<a class="flex4col1 flex align-items-center justify-content-around text-center hvr-glow" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Hỏi đáp chi phí">
							<i class="bg bg3"></i>
							<span>Hỏi đáp<br>chi phí</span>
						</a>
						<a class="flex4col1 flex align-items-center justify-content-around text-center hvr-glow" href="{{ url('/dia-chi-phong-kham') }}" title="Chỉ đường">
							<i class="bg bg4"></i>
							<span>Chỉ đường</span>
						</a>
					</div>
					<div class="flex flex5 justify-content-between align-items-center">
						<div class="flex5col1">Đường dây nóng đặt hẹn</div>
						<div class="flex5col2"><a href="tel:1800 6181" title="Gọi:1800 6181">1800 6181</a></div>
					</div>
					<div class="flex flex6 justify-content-around align-items-center">
						<div><i></i></div>
						<div>
							<span>Thời gian làm việc</span><br>
							<span>7:00 20:00</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row4 container">
			<div class="border1">
				<div class="bzzx">
				    <div class="bzzx_left text-uppercase">
				        <li class="bzzx_left1"><a href="#" >Sùi mào gà</a> </li>
				        <li class="bzzx_left1"><a href="#" >Bệnh lậu</a></li>
				        <li class="bzzx_left1"><a href="#" >Giang mai</a></li>
				        <li class="bzzx_left1"><a href="#" >Mụn rộp<br>sinh dục</a></li>
				    </div>
				    <div class="bzzx_right">
				        <div class="bzzx_right1">
				            <ul class="bzzx_right11">
				                <a href="" class="bzzx_right111" >
				                	<img alt="" src="{{ asset('public/images/desktop/home-9.png') }}" width="340" height="254">
				                </a>
				                <li>
				                    <a href="{{ MyAPI::getUrlPostID(45) }}" title="Nguyên nhân dẫn đến sùi mào gà là gì"><h3>Nguyên nhân dẫn đến sùi mào gà là gì</h3></a>
				                    <p>
				                        {!! MyAPI::getLimitWord(MyAPI::getPostID(45)->post_description,40) !!}...
				                        <a href="{{ MyAPI::getUrlPostID(45) }}" title="Xem đầy đủ">[chi tiết]</a>
				                    </p>
				                    <a href="{{ MyAPI::getUrlPostID(51) }}" title="{{ MyAPI::getPostID(51)->post_name }}" >
				                        <span><i>Tác hại</i>Tác hại của bệnh sùi mào gà</span>
				                    </a>
				                    <a href="{{ MyAPI::getUrlPostID(48) }}" title="{{ MyAPI::getPostID(48)->post_name }}" >
				                        <span><i>Điều trị</i>Các phương pháp chữa trị bệnh sùi mào gà</span>
				                    </a>
				                    <a href="{{ MyAPI::getUrlPostID(45) }}" title="{{ MyAPI::getPostID(45)->post_name }}" >
				                        <span><i>Nguyên nhân</i>Nguyên nhân gây bệnh sùi mào gà</span>
				                    </a>
				                    <a href="{{ MyAPI::getUrlPostID(47) }}" title="{{ MyAPI::getPostID(47)->post_name }}" >
				                        <span><i>Triệu chứng</i>Những triệu chứng của sùi mào gà..</span>
				                    </a>
				                </li>
				            </ul>
				            <div class="flex flex1 justify-content-between">
				            	<div class="flex1col1">
				            		<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"></a>
				            	</div>
				            	<div class="flex1col1">
				            		<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"></a>
				            	</div>
				            	<div class="flex1col1">
				            		<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"></a>
				            	</div>
				            </div>
				        </div>
				        <div class="bzzx_right1">
				            <ul class="bzzx_right11">
				                <a href="" class="bzzx_right111" >
				                	<img alt="" src="{{ asset('public/images/desktop/home-10.png') }}" width="340" height="254">
				                </a>
				                <li>
				                    <a href=""><h3>Nguyên nhân dẫn đến Bệnh lậu là gì</h3></a>
				                    <p>
				                        Bệnh lậu là một loại bệnh xã hội vô cùng nguy hiểm có thể gặp phải ở cả nam lẫn nữ. Các bác sĩ chuyên khoa trong việc chữa trị bệnh xã hội trong đó có bệnh Bệnh lậu tại...
				                        <a href="" >[chi tiết]</a>
				                    </p>
				                    <a href="" >
				                        <span><i>Tác hại</i>Tác hại của bệnh Bệnh lậu</span>
				                    </a>
				                    <a href="" >
				                        <span><i>Điều trị</i>Các phương pháp chữa trị bệnh Bệnh lậu</span>
				                    </a>
				                    <a href="" >
				                        <span><i>Nguyên nhân</i>Nguyên nhân gây bệnh Bệnh lậu</span>
				                    </a>
				                    <a href="" >
				                        <span><i>Triệu chứng</i>Những triệu chứng của Bệnh lậu..</span>
				                    </a>
				                </li>
				            </ul>
				            <div class="flex flex1 justify-content-between">
				            	<div class="flex1col1">
				            		<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"></a>
				            	</div>
				            	<div class="flex1col1">
				            		<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"></a>
				            	</div>
				            	<div class="flex1col1">
				            		<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"></a>
				            	</div>
				            </div>
				        </div>
				        <div class="bzzx_right1">
				            <ul class="bzzx_right11">
				                <a href="" class="bzzx_right111" >
				                	<img alt="" src="{{ asset('public/images/desktop/home-11.png') }}" width="340" height="254">
				                </a>
				                <li>
				                    <a href=""><h3>Nguyên nhân dẫn đến Giang mai là gì</h3></a>
				                    <p>
				                        Giang mai là một loại bệnh xã hội vô cùng nguy hiểm có thể gặp phải ở cả nam lẫn nữ. Các bác sĩ chuyên khoa trong việc chữa trị bệnh xã hội trong đó có bệnh Giang mai tại...
				                        <a href="" >[chi tiết]</a>
				                    </p>
				                    <a href="" >
				                        <span><i>Tác hại</i>Tác hại của bệnh Giang mai</span>
				                    </a>
				                    <a href="" >
				                        <span><i>Điều trị</i>Các phương pháp chữa trị bệnh Giang mai</span>
				                    </a>
				                    <a href="" >
				                        <span><i>Nguyên nhân</i>Nguyên nhân gây bệnh Giang mai</span>
				                    </a>
				                    <a href="" >
				                        <span><i>Triệu chứng</i>Những triệu chứng của Giang mai..</span>
				                    </a>
				                </li>
				            </ul>
				            <div class="flex flex1 justify-content-between">
				            	<div class="flex1col1">
				            		<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"></a>
				            	</div>
				            	<div class="flex1col1">
				            		<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"></a>
				            	</div>
				            	<div class="flex1col1">
				            		<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"></a>
				            	</div>
				            </div>
				        </div>
				        <div class="bzzx_right1">
				            <ul class="bzzx_right11">
				                <a href="" class="bzzx_right111" >
				                	<img alt="" src="{{ asset('public/images/desktop/home-12.png') }}" width="340" height="254">
				                </a>
				                <li>
				                    <a href=""><h3>Nguyên nhân dẫn đến Mụn rộp sinh dục là gì</h3></a>
				                    <p>
				                        Mụn rộp sinh dục là một loại bệnh xã hội vô cùng nguy hiểm có thể gặp phải ở cả nam lẫn nữ. Các bác sĩ chuyên khoa trong việc chữa trị bệnh xã hội trong đó có bệnh Mụn rộp sinh dục tại...
				                        <a href="" >[chi tiết]</a>
				                    </p>
				                    <a href="" >
				                        <span><i>Tác hại</i>Tác hại của bệnh Mụn rộp sinh dục</span>
				                    </a>
				                    <a href="" >
				                        <span><i>Điều trị</i>Các phương pháp chữa trị bệnh Mụn rộp sinh dục</span>
				                    </a>
				                    <a href="" >
				                        <span><i>Nguyên nhân</i>Nguyên nhân gây bệnh Mụn rộp sinh dục</span>
				                    </a>
				                    <a href="" >
				                        <span><i>Triệu chứng</i>Những triệu chứng của Mụn rộp sinh dục..</span>
				                    </a>
				                </li>
				            </ul>
				            <div class="flex flex1 justify-content-between">
				            	<div class="flex1col1">
				            		<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"></a>
				            	</div>
				            	<div class="flex1col1">
				            		<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"></a>
				            	</div>
				            	<div class="flex1col1">
				            		<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"></a>
				            	</div>
				            </div>
				        </div>
				    </div>
				</div>
				<script>
					$(document).ready(function(){
						$(".bzzx").slide({titCell:".bzzx_left li",mainCell:".bzzx_right",autoPlay:true,delayTime:1000});
					})
				</script>
			</div>
		</div>
		<div class="row5 container">
			<div class="flex flex1 justify-content-around">
				<div class="flex1col1 flex align-items-center justify-content-center">
					<i class="bg bg1"></i><span class="text-uppercase">Thiết bị tiên tiến</span>
				</div>
				<div class="flex1col1 flex align-items-center active justify-content-center">
					<i class="bg bg2"></i><span class="text-uppercase">Hình ảnh phòng khám</span>
				</div>
			</div>
			<div class="tab-contents">
				<div class="">
					<div class="flex flex2 justify-content-between">
						<div class="flex2col1">
							<a href="">
								<img src="{{ asset('public/images/desktop/th5.png') }}" alt="Thiết bị tiên tiến" class="center-block img-responsive">
							</a>
						</div>
						<div class="flex2col1">
							<a href="">
								<img src="{{ asset('public/images/desktop/th6.png') }}" alt="Thiết bị tiên tiến" class="center-block img-responsive">
							</a>
						</div>
						<div class="flex2col1">
							<a href="">
								<img src="{{ asset('public/images/desktop/th7.png') }}" alt="Thiết bị tiên tiến" class="center-block img-responsive">
							</a>
						</div>
						<div class="flex2col1">
							<a href="">
								<img src="{{ asset('public/images/desktop/th8.png') }}" alt="Thiết bị tiên tiến" class="center-block img-responsive">
							</a>
						</div>
					</div>
				</div>
				<div class="active">
					<div class="slick-pk">
						<div class="flex3col1">
							<a href="">
								<img src="{{ asset('public/images/desktop/th13.png') }}" alt="Hình ảnh phòng khám" class="center-block img-responsive">
							</a>
						</div>
						<div class="flex3col1">
							<a href="">
								<img src="{{ asset('public/images/desktop/th14.png') }}" alt="Hình ảnh phòng khám" class="center-block img-responsive">
							</a>
						</div>
						<div class="flex3col1">
							<a href="">
								<img src="{{ asset('public/images/desktop/th9.png') }}" alt="Hình ảnh phòng khám" class="center-block img-responsive">
							</a>
						</div>
						<div class="flex3col1">
							<a href="">
								<img src="{{ asset('public/images/desktop/th10.png') }}" alt="Hình ảnh phòng khám" class="center-block img-responsive">
							</a>
						</div>
						<div class="flex3col1">
							<a href="">
								<img src="{{ asset('public/images/desktop/th11.png') }}" alt="Hình ảnh phòng khám" class="center-block img-responsive">
							</a>
						</div>
						<div class="flex3col1">
							<a href="">
								<img src="{{ asset('public/images/desktop/th12.png') }}" alt="Hình ảnh phòng khám" class="center-block img-responsive">
							</a>
						</div>
					</div>
					<script>
						$(document).ready(function() {
							$('.slick-pk').slick({
							  	slidesToShow: 3,
							  	slidesToScroll: 1,
							  	// autoplay: true,
							  	autoplaySpeed: 2000,
							});	
						});
					</script>
				</div>
			</div>
		</div>
		<div class="row6 container">
			<div class="flex flex1 justify-content-between">
				<a class="flex1col1 flex align-items-center justify-content-center" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Liên hệ bác sĩ của chúng tôi">
					<span><i class="bg1"></i></span>
					<span>Tư vấn trực tuyến<br>Liên hệ bác sĩ của chúng tôi</span>
				</a>
				<a class="flex1col1 flex align-items-center justify-content-center" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Đặt hẹn trực tuyến,càng nhanh hơn">
					<span><i class="bg2"></i></span>
					<span>Đặt hẹn trực tuyến<br>Đặt hẹn trực tuyến,càng nhanh hơn</span>
				</a>
				<a class="flex1col1 flex align-items-center justify-content-center" href="tel:18006181" title="18006181">
					<span><i class="bg3"></i></span>
					<span>Điện thoại liên hệ <br>18006181</span>
				</a>
				<a class="flex1col1 flex align-items-center justify-content-center" href="{{ url('/dia-chi-phong-kham') }}" title="Số 193c1 Bà Triệu Hai Bà Trưng, Hà Nội">
					<span><i class="bg4"></i></span>
					<span>Địa chỉ phòng khám:<br>Số 193c1 Bà Triệu,<br>Hai Bà Trưng, Hà Nội</span>
				</a>
				<a class="flex1col1 flex align-items-center justify-content-center" href="#" title="Theo dõi Facebook hiểu thêm về Nam Khang">
					<span><i class="bg5"></i></span>
					<span>Facebook phòng khám<br>Theo dõi Facebook,hiểu<br>thêm về Nam Khang</span>
				</a>
			</div>
		</div>
	</main>
@endsection('content')