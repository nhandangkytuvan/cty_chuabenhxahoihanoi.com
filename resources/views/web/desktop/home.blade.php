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
					<h2 class="text-center width-100"><a href="">Sùi mào gà</a></h2>
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
					<h2 class="text-center width-100"><a href="">Bệnh lậu</a></h2>
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
					<h2 class="text-center width-100"><a href="">Giang mai</a></h2>
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
					<h2 class="text-center width-100"><a href="">Mụn rộp sinh dục</a></h2>
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
					<div class="line2 flex justify-content-between">
						<div class="col1">
							<a href="#"><img src="{{ asset('public/images/desktop/home-3.png') }}" alt=""></a>
						</div>
						<div class="col2">
							<div class="post-first">
								<h3 class="post-name text-center"><a href="">NGUYÊN NHÂN DẪN ĐẾN SÙI MÀO GÀ LÀ GÌ</a></h3>
								<p class="post-description text-justify">
									Sùi mào gà là một loại bệnh xã hội vô cùng nguy hiểm có thể gặp phải ở cả nam lẫn nữ. Các bác sĩ chuyên khoa trong việc chữa trị bệnh xã hội trong đó có bệnh sùi mào gà tại <a href="#">Chi tiết</a>
								</p>
							</div>
							<ul class="post-orthers">
								<li>
									<i class="fa fa-circle"></i> 
									<h4><a href="">Những biến chứng của bệnh sùi mào gà?</a></h4>
									<p>Sùi mào gà là bệnh xã hội nguy hiểm và ngày càng phổ biến. Tuy không</p>
								</li>
								<li>
									<i class="fa fa-circle"></i> 
									<h4><a href="">Những biến chứng của bệnh sùi mào gà?</a></h4>
									<p>Sùi mào gà là bệnh xã hội nguy hiểm và ngày càng phổ biến. Tuy không</p>
								</li>
							</ul>
						</div>
					</div>
					<ul class="post-orthers">
						<li>
							<i class="fa fa-circle"></i> 
							<h4><a href="">Những biến chứng của bệnh sùi mào gà?</a></h4>
							<p>Sùi mào gà là bệnh xã hội nguy hiểm và ngày càng phổ biến. Tuy không</p>
						</li>
						<li>
							<i class="fa fa-circle"></i> 
							<h4><a href="">Những biến chứng của bệnh sùi mào gà?</a></h4>
							<p>Sùi mào gà là bệnh xã hội nguy hiểm và ngày càng phổ biến. Tuy không</p>
						</li>
					</ul>
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
		<div class="row3 container">
			<div class="flex flex1 justify-content-between">
				<div class="col1">
					<div class="text-uppercase">Triệu chứng thường gặp của các bệnh xã hội</div>
					<div class="flex flex2 justify-content-between">
						<div class="col1 flex flex3 flex-wrap-wrap align-content-between">
							<div class="width-100 flex align-items-center justify-content-center height1 text-center">
								<a href="">Tiểu ra mủ</a>
							</div>
							<div class="width-100 flex align-items-center justify-content-center height2 text-center">
								<a href="">Sưng đau<br>lỗ niệu đạo</a>
							</div>
							<div class="width-100 flex align-items-center justify-content-center height1 text-center">
								<a href="">Ngứa lỗ niệu đạo</a>
							</div>
						</div>
						<div class="col1 flex flex3 flex-wrap-wrap align-content-between">
							<div class="width-100 flex align-items-center justify-content-center height2 text-center">
								<a href="">Sưng đỏ<br>bao quy đầu</a>
							</div>
							<div class="width-100 flex align-items-center justify-content-center height1 text-center">
								<a href="">Tiểu buốt</a>
							</div>
							<div class="width-100 flex align-items-center justify-content-center height1 text-center">
								<a href="">Nổi mụn dương vật</a>
							</div>
						</div>
						<div class="col1 flex flex3 flex-wrap-wrap align-content-between">
							<div class="width-100 flex align-items-center justify-content-center height1 text-center">
								<a href="">Vết loét đỏ</a>
							</div>
							<div class="width-100 flex align-items-center justify-content-center height1 text-center">
								<a href="">Viêm quy đầu</a>
							</div>
							<div class="width-100 flex align-items-center justify-content-center height2 text-center">
								<a href="">Đau ngứa<br>dương vật</a>
							</div>
						</div>
						<div class="col1 flex flex3 flex-wrap-wrap align-content-between">
							<div class="width-100 flex align-items-center justify-content-center height2 text-center">
								<a href="">Mụn nước xuất<br>hiện trên người</a>
							</div>
							<div class="width-100 flex align-items-center justify-content-center height1 text-center">
								<a href="">Sưng hạch</a>
							</div>
							<div class="width-100 flex align-items-center justify-content-center height1 text-center">
								<a href="">Nổi mụn đỏ thành chùm</a>
							</div>
						</div>
						<div class="col1 flex flex3 flex-wrap-wrap align-content-between">
							<div class="width-100 flex align-items-center justify-content-center height1 text-center">
								<a href="">Loét bao quy đầu</a>
							</div>
							<div class="width-100 flex align-items-center justify-content-center height1 text-center">
								<a href="">Bạch biến quy đầu</a>
							</div>
							<div class="width-100 flex align-items-center justify-content-center height2 text-center">
								<a href="">Chấm đỏ nhỏ<br>ở quy đầu</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col2">
					<div class="text-uppercase line1">Dịch vụ tiện ích</div>
					<div class="flex flex4 flex-wrap-wrap align-content-between justify-content-between">
						<a class="flex4col1 flex align-items-center justify-content-around text-center hvr-glow" href="#">
							<i class="bg bg1"></i>
							<span>Tư vấn<br>trực tuyến</span>
						</a>
						<a class="flex4col1 flex align-items-center justify-content-around text-center hvr-glow" href="#">
							<i class="bg bg2"></i>
							<span>Xếp số<br>hẹn khám</span>
						</a>
						<a class="flex4col1 flex align-items-center justify-content-around text-center hvr-glow" href="#">
							<i class="bg bg3"></i>
							<span>Hỏi đáp<br>chi phí</span>
						</a>
						<a class="flex4col1 flex align-items-center justify-content-around text-center hvr-glow" href="#">
							<i class="bg bg4"></i>
							<span>Chỉ đường</span>
						</a>
					</div>
					<div class="flex flex5 justify-content-between align-items-center">
						<div class="flex5col1">Đường dây nóng đặt hẹn</div>
						<div class="flex5col2"><a href="tel:1800 6181">1800 6181</a></div>
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
				                    <a href=""><h3>Nguyên nhân dẫn đến sùi mào gà là gì</h3></a>
				                    <p>
				                        Sùi mào gà là một loại bệnh xã hội vô cùng nguy hiểm có thể gặp phải ở cả nam lẫn nữ. Các bác sĩ chuyên khoa trong việc chữa trị bệnh xã hội trong đó có bệnh sùi mào gà tại...
				                        <a href="" >[chi tiết]</a>
				                    </p>
				                    <a href="" >
				                        <span><i>Tác hại</i>Tác hại của bệnh sùi mào gà</span>
				                    </a>
				                    <a href="" >
				                        <span><i>Điều trị</i>Các phương pháp chữa trị bệnh sùi mào gà</span>
				                    </a>
				                    <a href="" >
				                        <span><i>Nguyên nhân</i>Nguyên nhân gây bệnh sùi mào gà</span>
				                    </a>
				                    <a href="" >
				                        <span><i>Triệu chứng</i>Những triệu chứng của sùi mào gà..</span>
				                    </a>
				                </li>
				            </ul>
				            <div class="flex flex1 justify-content-between">
				            	<div class="flex1col1">
				            		<a href="#"></a>
				            	</div>
				            	<div class="flex1col1">
				            		<a href="#"></a>
				            	</div>
				            	<div class="flex1col1">
				            		<a href="#"></a>
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
				            		<a href="#"></a>
				            	</div>
				            	<div class="flex1col1">
				            		<a href="#"></a>
				            	</div>
				            	<div class="flex1col1">
				            		<a href="#"></a>
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
				            		<a href="#"></a>
				            	</div>
				            	<div class="flex1col1">
				            		<a href="#"></a>
				            	</div>
				            	<div class="flex1col1">
				            		<a href="#"></a>
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
				            		<a href="#"></a>
				            	</div>
				            	<div class="flex1col1">
				            		<a href="#"></a>
				            	</div>
				            	<div class="flex1col1">
				            		<a href="#"></a>
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
								<img src="{{ asset('public/images/desktop/th5.png') }}" alt="" class="center-block img-responsive">
							</a>
						</div>
						<div class="flex2col1">
							<a href="">
								<img src="{{ asset('public/images/desktop/th6.png') }}" alt="" class="center-block img-responsive">
							</a>
						</div>
						<div class="flex2col1">
							<a href="">
								<img src="{{ asset('public/images/desktop/th7.png') }}" alt="" class="center-block img-responsive">
							</a>
						</div>
						<div class="flex2col1">
							<a href="">
								<img src="{{ asset('public/images/desktop/th8.png') }}" alt="" class="center-block img-responsive">
							</a>
						</div>
					</div>
				</div>
				<div class="active">
					<div class="slick-pk">
						<div class="flex3col1">
							<a href="">
								<img src="{{ asset('public/images/desktop/th14.png') }}" alt="" class="center-block img-responsive">
							</a>
						</div>
						<div class="flex3col1">
							<a href="">
								<img src="{{ asset('public/images/desktop/th9.png') }}" alt="" class="center-block img-responsive">
							</a>
						</div>
						<div class="flex3col1">
							<a href="">
								<img src="{{ asset('public/images/desktop/th10.png') }}" alt="" class="center-block img-responsive">
							</a>
						</div>
						<div class="flex3col1">
							<a href="">
								<img src="{{ asset('public/images/desktop/th11.png') }}" alt="" class="center-block img-responsive">
							</a>
						</div>
						<div class="flex3col1">
							<a href="">
								<img src="{{ asset('public/images/desktop/th12.png') }}" alt="" class="center-block img-responsive">
							</a>
						</div>
						<div class="flex3col1">
							<a href="">
								<img src="{{ asset('public/images/desktop/th13.png') }}" alt="" class="center-block img-responsive">
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
	</main>
@endsection('content')