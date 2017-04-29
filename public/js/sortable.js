    
	var obj = {};


    $( function() {

    $( "#sortable" ).sortable();

    $( "#sortable" ).disableSelection();

    $(".thechoosen").click(function(event) {
    	/* Act on the event */
    	$(this).closest("div").parent().next().find("p").find("span").text($(this).text());
    	obj[$(this).attr('data-index')] = $(this).attr('data-id');
    	return false;
    });


    $(".btnsave").click(function(){
    	obj['title'] = $("#form3").val();
    	obj['description'] = $("#form1").val();
        if($("#track_id").val() != '' && $("#approved").val() != '')
        {
            obj['issue_id'] = $("#track_id").val();
            obj['approved'] = $("#approved").val();
        }
    	$.ajax({
    		type    : "POST",
    		url     : $("base").attr('href') + "index.php/createissue/insert",
    		data    : obj,
    		success : function(data){
    				eraser();
    		},
    		error   : function(){
    			console.log("error");
    		}
    	});
        return false;
    });



    $(".btncancel").click(function(){
    	eraser();
    	return false;
    });

  });

    function eraser()
    {
    	var span = [
    				'.divassigned',
					'.divmodule',
					'.divqa',
					'.divgit',
					'.divplat',
					'.divpriority',
					'.divissuetype'
					]

		 for(var i = 0; i < span.length; i++)
		 {
		 	$(span[i]).find("span").text(" ");
		 }
		 
	

		$("#form1").val(" ");
		$("#form3").val(" ");
        $("#approved").val(" ");
        $("#track_id").val(" ");

    }





   