$(document).ready(function(){
    setInterval(ajaxCall, 10000); //300000 MS == 5 minutes

    function ajaxCall() {
    //do your AJAX stuff here
        document.getElementById("Table4").innerHTML = Date();
        $.ajax({
		type: "GET",
		url: "http://patsid.cs.ut.ee/index.php/site/table",
		dataType: 'html',
		success: function(data) {
            
			$("#Table").html(data);
		}
	})
    }
    $('#aeg').click(function(){
		document.getElementById("Table4").innerHTML = Date();
        $.ajax({
		type: "GET",
		url: "http://patsid.cs.ut.ee/index.php/site/table",
		dataType: 'html',
		success: function(data) {
            
			$("#Table").html(data);
		}
	})
	});

});