//jQuery
$(document).ready(function(){
menu_button_sw=0;
menu_button_sw2=0;

$(".click_back_area").click(function(){
	if(menu_button_sw2){
		$(".right_side_area").animate({
			"marginLeft":"100%"
		},200);
		menu_button_sw2=0;
	}
	
	if(menu_button_sw){
		$(".left_side_area").animate({
			"marginLeft":"-60%"
		},200);
		menu_button_sw=0;
	}
	$(".click_back_area").hide();
});


$(".menu_button").click(function(){
	
	if(menu_button_sw2){
		$(".click_back_area").hide();
		$(".right_side_area").animate({
			"marginLeft":"100%"
		},200);
		menu_button_sw2=0;
	}
	
	if(menu_button_sw){
		$(".click_back_area").hide();
		$(".left_side_area").animate({
			"marginLeft":"-60%"
		},200);
		menu_button_sw=0;
	}else{
		$(".click_back_area").show();
		$(".left_side_area").animate({
			"marginLeft":"0%"
		},200);
		menu_button_sw=1;
	}
});



$(".setting_button").click(function(){
	
	if(menu_button_sw){
		$(".click_back_area").hide();
		$(".left_side_area").animate({
			"marginLeft":"-60%"
		},200);
		menu_button_sw=0;
	}
	
	if(menu_button_sw2){
		$(".click_back_area").hide();
		$(".right_side_area").animate({
			"marginLeft":"100%"
		},200);
		menu_button_sw2=0;
	}else{
		$(".click_back_area").show();
		$(".right_side_area").animate({
			"marginLeft":"40%"
		},200);
		menu_button_sw2=1;
	}
});

});