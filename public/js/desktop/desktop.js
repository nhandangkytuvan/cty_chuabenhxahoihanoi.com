$(document).ready(function() {
	$('.row5 .flex1col1').hover(function() {
		var index = $(this).index();
		$(this).addClass('active');
		$(this).siblings('div').removeClass('active');
		$('.row5 .tab-contents >div').eq(index).addClass('active');
		$('.row5 .tab-contents >div').eq(index).siblings('div').removeClass('active');
	}, function() {
		
	});

	// $('#popup-desktop').popup({
 //        blur:true,
 //        transition: 'all 0.3s',
 //        scrolllock: false,
 //        background: false,
 //        backgroundactive:false,
 //        onclose: function() {setTimeout(showchat, 20000);}
 //    });
    var d = new Date();
    var gio = d.getHours();
    var phut = d.getMinutes();
    if((7<gio&&gio<22)||(gio==22&&phut<=30)||(gio==7&&phut>=30)){
        setTimeout(showchat, 15000);
    }
    window.setInterval(function(){
        $("#popup-desktop >.content-popup>.linktv >.table1 tr td:nth-child(2) a").toggleClass('active');
        $("#popup-desktop >.content-popup>.nhapsodienthoai button").toggleClass('active');
    }, 1000);
    //
    $(".popup_desktop_close").click(function(event) {
        //$('#popup-desktop').css('display', 'none');
        $('#popup-desktop').removeClass('active');
        setTimeout(showchat, 20000);
    });

});
function open_tuvan(){
	window.open("http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en","_blank");
}

function showchat() {
    //$('#popup-desktop').popup('show');
    $('#popup-desktop').addClass('active');
}