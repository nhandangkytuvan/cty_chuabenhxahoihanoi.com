@extends('layout.chuyende-mobile')
<!-- title -->
@section('title')
	<title>Viêm nhiễm quy đầu</title>
@endsection('title')
<!-- seo -->
@section('keyword')
	@include('seo.seo_home')
@endsection('keyword')
<!-- css -->
@section('css')
<link rel="canonical" href="{{ url('chuyen-de/viem-nhiem-quy-dau') }}" />
<link rel="stylesheet" href="{{ asset('public/css/chuyende/mobile/viem-nhiem-quy-dau.css') }}">
@endsection('css')
<!-- banner -->
@section('banner')
	<img src="{{ asset('public/images/chuyende/mobile/viemnhiemquydau/viemnhiemquydau-1.png') }}" alt="Phòng khám Nam Khang" class="center-block img-responsive">
@endsection('banner')
<!-- content -->
@section('content')
	<div class="container chuyende">
		<div class="row1">
			<div class="flex flex1 justify-content-center">
				<div class="flex1col1 flex align-items-center justify-content-center text-center text-uppercase">
					Chuyên gia cho biết
				</div>
				<div class="flex1col2 flex flex-wrap-wrap align-content-around width-100">
					<p class="text-justify">
						Quy đầu khó chịu, xuất hiện những triệu chứng bất thường, nếu như có đời sống tình dục không an toàn, có thể bị viêm nhiễm, các bệnh thường gặp là viêm quy đầu (cần chú ý: viêm nhiễm cơ quan sinh dục nếu như không kịp thời điều trị có thể gây viêm nhiễm giao thoa khi quan hệ tình dục, truyền nhiễm cho bạn đời), nếu như quan hệ tình dục không an toàn thường bị mắc các bệnh xã hội (sùi mào gà, giang mai, lậu…)
					</p>
					<div class="flex flex2 justify-content-end text-center width-100">
						<a class="flex flex3 justify-content-around align-items-center" href="#">
							<i></i>
							<span class="text-center text-uppercase">Cổng tư vấn</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row2 global1">
			<div class="bg">
				<div class="line1 text-uppercase text-center">Triệu chứng lâm sàng</div>
				<div class="line2 text-center text-uppercase"><span>thường gặp ở viêm nhiễm quy đầu</span></div>
				<div class="line3 text-center text-uppercase"><span>COMMON CLNICAL SYMPTOMS OF THE INFECTION OF THE GLANS PENIS</span></div>
			</div>
		</div>
		<div class="row3">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<img src="{{ asset('public/images/chuyende/mobile/viemnhiemquydau/viemnhiemquydau-5.png') }}" alt="" class="img-responsive center-block">
					<span>Quy đầu mọc nốt đỏ</span>
				</div>
				<div class="flex1col1">
					<img src="{{ asset('public/images/chuyende/mobile/viemnhiemquydau/viemnhiemquydau-6.png') }}" alt="" class="img-responsive center-block">
					<span>Quy đầu bong da</span>
				</div>
				<div class="flex1col1">
					<img src="{{ asset('public/images/chuyende/mobile/viemnhiemquydau/viemnhiemquydau-7.png') }}" alt="" class="img-responsive center-block">
					<span>Quy đầu sưng đau</span>
				</div>
			</div>
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<img src="{{ asset('public/images/chuyende/mobile/viemnhiemquydau/viemnhiemquydau-8.png') }}" alt="" class="img-responsive center-block">
					<span>Quy đầu mọc mụn nước</span>
				</div>
				<div class="flex1col1">
					<img src="{{ asset('public/images/chuyende/mobile/viemnhiemquydau/viemnhiemquydau-9.png') }}" alt="" class="img-responsive center-block">
					<span>Quy đầu mọc mụn</span>
				</div>
				<div class="flex1col1">
					<img src="{{ asset('public/images/chuyende/mobile/viemnhiemquydau/viemnhiemquydau-10.png') }}" alt="" class="img-responsive center-block">
					<span>Quy đầu mọc gai u nhú</span>
				</div>
			</div>
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<img src="{{ asset('public/images/chuyende/mobile/viemnhiemquydau/viemnhiemquydau-11.png') }}" alt="" class="img-responsive center-block">
					<span>Quy đầu mọc mụn sần</span>
				</div>
				<div class="flex1col1">
					<img src="{{ asset('public/images/chuyende/mobile/viemnhiemquydau/viemnhiemquydau-12.png') }}" alt="" class="img-responsive center-block">
					<span>Quy đầu chảy mủ</span>
				</div>
				<div class="flex1col1">
					<img src="{{ asset('public/images/chuyende/mobile/viemnhiemquydau/viemnhiemquydau-13.png') }}" alt="" class="img-responsive center-block">
					<span>Biểu mô quy đầu lở loét</span>
				</div>
			</div>
			<div class="global2">
				<div class="line1"><span>Chuyên gia nhắc nhở</span></div>
				<div class="line2">
					Viêm quy đầu và triệu chứng của bệnh xã hội tương đối giống nhau, cần phải nhờ bác sĩ thăm khám mới chẩn đoán được
				</div>
			</div>
			<div class="global3 text-center">
				<div>Trao đổi tình trạng của bản thân, nhanh chóng nắm bắt tình trạng bệnh</div>
				<div class="text-uppercase"><a href="">click vào để tư vấn với chuyên gia</a></div>
			</div>
		</div>
		<div class="row4">
			<div class="global1">
				<div class="bg">
					<div class="line1 text-uppercase text-center">Nguyên nhân nào</div>
					<div class="line2 text-center text-uppercase"><span>gây nên viêm nhiễm quy đầu</span></div>
					<div class="line3 text-center text-uppercase"><span>WHAT CAUSES THE INFECTION Ò THE GLANS PENIS?</span></div>
				</div>
			</div>
			<div class="description">
				Viêm nhiễm quy đầu là căn bệnh viêm nhiễm hệ sinh dục thường gặp ở nam giới, chuyên gia Phòng khám chuyên khoa Nam Khang cho biết, nguyên nhân gây viêm nhiễm quy đầu ở nam giới có rất nhiều, nguyên nhân thường gặp là do mắc viêm quy đầu, mụn rộp sinh dục, sùi mào gà….gây nên.
			</div>
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<div><i class="bg1 center-block"></i></div>
					<h2 class="text-uppercase text-center">Viêm quy đầu</h2>
				</div>
				<div class="flex1col2 flex flex-wrap-wrap align-content-around">
					<div class="width-100">Quy đầu bị viêm do trùng roi, candida, nấm…</div>
					<div class="width-100"><span>Triệu chứng thường gặp</span></div>
					<div class="width-100">Nốt đỏ, chảy mủ, ngứa rát, sưng đỏ, lở loét, mụn trắng, đau, mùi bất thường, lỗ niệu đạo bất thường…</div>
				</div>
			</div>
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<div><i class="bg2 center-block"></i></div>
					<h2 class="text-uppercase text-center">Mụn rộp sinh dục</h2>
				</div>
				<div class="flex1col2 flex flex-wrap-wrap align-content-around">
					<div class="width-100">Đa phần do sinh hoạt tình dục không an toàn, viêm nhiễm gián tiếp, nhiễm trùng trong thời kì mang thai…</div>
					<div class="width-100"><span>Triệu chứng thường gặp</span></div>
					<div class="width-100">Thời gian đầu sẽ xuất hiện mụn nước, sau mấy ngày sẽ vỡ ra tạo thành vết loét, một số bệnh nhân có cảm giác nóng rát hoặc đau.…</div>
				</div>
			</div>
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<div><i class="bg3 center-block"></i></div>
					<h2 class="text-uppercase text-center">Sùi mào gà</h2>
				</div>
				<div class="flex1col2 flex flex-wrap-wrap align-content-around">
					<div class="width-100">Đa phần do sinh hoạt tình dục không an toàn, viêm nhiễm gián tiếp...</div>
					<div class="width-100"><span>Triệu chứng thường gặp</span></div>
					<div class="width-100">Xuất hiện những u nhú dạng mào gà, hoa súp lơ hoặc gai, dễ bị lở loét, chảy dịch và xuất huyết, có mùi hôi.</div>
				</div>
			</div>
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<div><i class="bg4 center-block"></i></div>
					<h2 class="text-uppercase text-center">Hẹp bao quy đầu</h2>
				</div>
				<div class="flex1col2 flex flex-wrap-wrap align-content-around">
					<div class="width-100">Tích tụ bụi bẩn ở bao quy đầu hoặc không chú ý vệ sinh gây nên</div>
					<div class="width-100"><span>Triệu chứng thường gặp</span></div>
					<div class="width-100">Quy đầu đỏ cục bộ, có cảm giác nóng rát và ngứa.</div>
				</div>
			</div>
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<div><i class="bg5 center-block"></i></div>
					<h2 class="text-uppercase text-center">Viêm niệu đạo</h2>
				</div>
				<div class="flex1col2 flex flex-wrap-wrap align-content-around">
					<div class="width-100">Ảnh hưởng đến thượng bì niệu đạo, gây viêm nhiễm cục bộ</div>
					<div class="width-100"><span>Triệu chứng thường gặp</span></div>
					<div class="width-100">Khi đi tiểu lỗ niệu đạo xuất hiện cảm giác đau như kim châm, tiểu không hết, đau khó chịu, thường có triệu chứng tiểu nhiều, tiểu rắt, tiểu vàng…</div>
				</div>
			</div>
			<div class="global2">
				<div class="line1"><span>Chuyên gia nhắc nhở</span></div>
				<div class="line2">
					Hiện tượng quy đầu bị viêm cần được coi trọng, kịp thời đến bệnh viện điều trị, không tự ý dùng thuốc hoặc tìm những phòng khám không chuyên khoa tùy tiện chữa, tránh bệnh trở nên nghiêm trọng hơn!
				</div>
			</div>
			<div class="global3 text-center">
				<div>Tình trạng của tôi do nguyên nhân nào ở trên gây nên?</div>
				<div class="text-uppercase"><a href="">click chuyên gia TƯ VẤN</a></div>
			</div>
		</div>
		<div class="row5">
			<div class="global1">
				<div class="bg">
					<div class="line1 text-uppercase text-center">Ba phương pháp</div>
					<div class="line2 text-center text-uppercase"><span>chẩn đoán viêm nhiễm quy đầu</span></div>
					<div class="line3 text-center text-uppercase"><span>3 METHODS TO DIAGNOSE THE INFETION OF GLANS PENI</span></div>
				</div>
			</div>
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1 flex flex-wrap-wrap align-content-between">
					<div><i class="bg1"></i></div>
					<div>
						<div class="line1 text-center"><strong>Miêu tả triệu chứng</strong></div>
						<div class="line2 text-center">symptom description</div>
					</div>
					<div><i class="bg2"></i></div>
					<div>
						Nhập nội dung miêu tả tình hình cụ thể, chuyên gia căn cứ vào đó chẩn đoán. (Thích hợp với triệu chứng xuất hiện trong vòng 1~7 ngày)
					</div>
					<div>
						<a href="">Click vào để<br>miêu tả tình trạng trực tuyến</a>
					</div>
				</div>
				<div class="flex1col1 flex flex-wrap-wrap align-content-between">
					<div><i class="bg3"></i></div>
					<div>
						<div class="line1 text-center"><strong>Miêu tả triệu chứng</strong></div>
						<div class="line2 text-center">symptom description</div>
					</div>
					<div><i class="bg4"></i></div>
					<div>
						Nhập nội dung miêu tả tình hình cụ thể, chuyên gia căn cứ vào đó chẩn đoán. (Thích hợp với triệu chứng xuất hiện trong vòng 1~7 ngày)
					</div>
					<div>
						<a href="">Click vào để<br>miêu tả tình trạng trực tuyến</a>
					</div>
				</div>
				<div class="flex1col1 flex flex-wrap-wrap align-content-between">
					<div><i class="bg5"></i></div>
					<div>
						<div class="line1 text-center"><strong>Miêu tả triệu chứng</strong></div>
						<div class="line2 text-center">symptom description</div>
					</div>
					<div><i class="bg6"></i></div>
					<div>
						Nhập nội dung miêu tả tình hình cụ thể, chuyên gia căn cứ vào đó chẩn đoán. (Thích hợp với triệu chứng xuất hiện trong vòng 1~7 ngày)
					</div>
					<div>
						<a href="">Click vào để<br>miêu tả tình trạng trực tuyến</a>
					</div>
				</div>
			</div>
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
					<div class="text-center h4"><a href="{{ url('/') }}">Quay lại</a></div>
				</div>
			</div>
		</div>
	</div>
@endsection('toolbar')