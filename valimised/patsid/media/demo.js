$(document).ready(function(){
    $('#aeg').click(function(){
		document.getElementById("demo").innerHTML = Date();
	});

	
	$('#kandideerinupp').click(function(){
		
		$.ajax({
				
            type: "POST",

            url: "http://patsid.cs.ut.ee/index.php/site/insertValues/",
				
		    data: $("#kandideeri :input").serializeArray(),
             	statusCode: {
                 404: function() {
                     alert( "page not found" );
                    }
             },
				
		    success: function messageforyou() 

			{

	                $('#msgThankyou').fadeIn(600).delay(1000).fadeOut(1800);

	            }

		   

			

	     	   });

	});
    
	$('#haaletanupp').click(function(){
		
		$.ajax({
				
            type: "POST",

            url: "http://patsid.cs.ut.ee/index.php/site/insertValues2/",
				
		    data: $("#haaleta :input").serializeArray(),
				
		    success: function(messageforyou)

	            {

	               $('#msgThankyou').fadeIn(600).delay(1000).fadeOut(1800);

	            }

	     	   });

	});
	$("#kandideeri").submit( function() {
		return false
	});
    $("#haaleta").submit( function() {
		return false
	});

});