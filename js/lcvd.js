
function menuDown() {
	var parent = $(this).parent();
	// Close any open menus
	if(parent.siblings().hasClass("portOpen")){
		$(".portOpen").find(".port_menu").hide("slow");
		$(".portOpen").find(".portCategory").removeClass("grey");
		$(".portOpen").find("img.arrow").removeClass("over");
		$(".portOpen").removeClass("portOpen");
	};

	// Open the clicked upon menu
	parent.find(".port_menu").toggle("slow");
	parent.find(".portCategory").toggleClass("grey");
	parent.find("img.arrow").toggleClass("over");
	parent.addClass("portOpen");
	$(".horizontal_bar").slideDown("slow");	
};

$("#reel .portCategory").click(menuDown);
$("#Commercial .portCategory").click(menuDown);
$("#Documentary .portCategory").click(menuDown);
$("#Wedding .portCategory").click(menuDown);
$("#Webwork .portCategory").click(menuDown);

function mouseFollow(e) {
	$("#circle").css('left', e.pageX);
	$("#circle").css('top', e.pageY);
};

$("html").mousemove(mouseFollow);



