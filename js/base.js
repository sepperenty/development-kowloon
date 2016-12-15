 $('document').ready(function(){


 	console.log("ingeladen");

 

 

 	var tapHeight = $(".tap").height();

 	

 	$(window).resize(function(){
 		var glassWidth = $(".glass").width();
 		$(".glass").css("height" , glassWidth*1.754);

 		var tapWidth = $(".tap").width();
 		$('.tap').css("height", tapWidth*2.192);

 	});
 	
 	



 });