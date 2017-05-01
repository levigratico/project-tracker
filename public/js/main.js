$(function(){
	$("#login").click(function(){
			var obj = { username : $("#username").val(), password : $("#password").val()};
			$.ajax({
				   type : "POST",
				    url : $("base").attr('href') + "index.php/main/check",
				   data : obj,
				success : function(data){
						// swal login success
						window.location(data);
					},
				  error : function(){
				  			console.log('error');
				    }

			});
	});
});