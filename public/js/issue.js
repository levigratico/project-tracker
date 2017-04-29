$(function(){

	$(".history").click(function(){
		var id = $(this).attr('data-raw');
		var post = $(this).closest("div").prev().closest('div').parent().parent().parent();
		$.get($("base").attr('href') + "index.php/listofissue/history/" + id, function(data){
			post.prepend(data);
		});
		return false;
	});


	$(".hidePrepend").click(function(event) {
		/* Act on the event */
		var yes = $(this).closest('div').next().find('div');
		$(yes).find("div").not(":last-child").remove();
	});

});