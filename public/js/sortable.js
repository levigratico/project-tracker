
$("#tabIssue").hide();
    $("#sortable").hide();
    $(document).ready(function(){
        $("#btncreateissue").click(function(){
            $("#NoPanel").hide();
            $("#tabIssue").show();
            $("#sortable").show();
        });
        $("#show").click(function(){
            $("p").show();
        });
    });


    $( function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
  } );



   $( function() {
           $( "#sortable" ).sortable();
           $( "#sortable" ).disableSelection();
         });

   $(document).on('click', 'a', function(event){
        return false;
   });