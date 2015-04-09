<!DOCTYPE html>
<html>
      <head>
          
        
		<meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../../media/mycss.css">
		<title>Patside E-valimised/kandidaadid</title>
		
    </head>
    <body>
    <script>
  // This is called with the results from from FB.getLoginStatus().
    function removeAllByTextContent(tag, search, uusnimi) {
        var anchors  = document.getElementsByTagName(tag);

        for (var i=anchors.length-1; i>=0; i--) {
            var    a = anchors[i], 
            text = a.textContent || a.innerText;

            if (text == search) a.innerText="Sisselogitud: " + uusnimi;
            
        }
    }
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
        FB.api('/me', function(response) {
            removeAllByTextContent("a", "Logi sisse", response.name);
        });
    } else {
        testAPI();
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '1626023837631574',
    status     : true,
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.2' // use version 2.2
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    location.href = 'login';
  }
</script>
        
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>
	<script src="http://patsid.cs.ut.ee/media/demo.js"></script>
        		<div id="lairiba">
                    <h1>Kandidaadid</h1>
                    <ul class id="menu">
                    
					<li><a href="http://patsid.cs.ut.ee/" class="button">Avaleht</a></li>
					<li><a href="http://patsid.cs.ut.ee/index.php/site/kandidaadid" class="button">Kandidaadid</a></li>
                    <li><a href="http://patsid.cs.ut.ee/index.php/site/tulemused" class="button">Tulemused</a></li>
                    <li><a href="http://patsid.cs.ut.ee/index.php/site/statistika" class="button">Statistika</a></li>
                    <li><a href="http://patsid.cs.ut.ee/index.php/site/login" class="button">Logi sisse</a></li>
				
				</ul>
	<p id="demo"></p>

	<button type="button" id = "aeg">Try it</button>

    <div id="lahtrid">
        <div id="lahtrid1">
                    <h2>Kandideeri</h2>
                    <form id="kandideeri" >
			         Nimi: <input type="text" name="Nimi"><br>
			         Ringkond: <input type="text" name="Ringkond"><br>
			         Erakond: <input type="text" name="Erakond"><br>
                                                
                        <button id = 'kandideerinupp'>Kandideeri</button>
                    </form>
                    
                </div>
        <div id="lahtrid2">
                    <h2>Hääleta</h2>
                    <form id="haaleta" >
			         Nimi: <input type="text" name="Nimi"><br>
			         Kandidaadi number: <input type="text" name="Kandidaat"><br>
			                                 
                        <button id = 'haaletanupp'>Haaleta</button>
                    </form>
                    
                </div>
        </div>
        <div id="Table">
            <h2>Kandidaatide tabel</h2> 
            <table border='1'>
            <tr>
                <th>Valimisnumber</th>
                <th>Nimi</th>		
                <th>Erakond</th>
                <th>Ringkond</th>
            </tr>    
            <?php
                foreach($results as $row){
                    echo "<tr>";
                    echo "<td>". $row->Id . "</td>";
                    echo "<td>". $row->Name . "</td>";
                    echo "<td>". $row->Erakond . "</td>";
                    echo "<td>". $row->Ringkond . "</td>";
                    echo "</tr>";
                    
                }
            
            ?>
            </table>
                    
        </div>
	<div id = "msgThankyou" class = "messagebox">

		<br/>

		Andmed lisatud andmebaasi<br/>

	</div>
            

        
    </div>
    </body>
    
</html>