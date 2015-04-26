<!DOCTYPE html>
<html>
      <head>
        
		<meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../../media/mycss.css">
		<title>Patside E-valimised/tulemused</title>
		
    </head>
    <body>
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=1626023837631574";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        		<div id="divisionk">
                    <h1>Tulemused</h1>
                   <ul class id="menu">
                    
					<li><a href="http://patsid.cs.ut.ee/" class="button">Avaleht</a></li>
					<li><a href="http://patsid.cs.ut.ee/index.php/site/kandidaadid" class="button">Kandidaadid</a></li>
                    <li><a href="http://patsid.cs.ut.ee/index.php/site/tulemused" class="button">Tulemused</a></li>
                    <li><a href="http://patsid.cs.ut.ee/index.php/site/statistika" class="button">Statistika</a></li>
                    <div class="fb-login-button" data-max-rows="1" data-size="xlarge" data-show-faces="false" data-auto-logout-link="true"></div>
				
				</ul>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>
	<script src="http://patsid.cs.ut.ee/media/demo2.js"></script>
        <button type="button" id = "aeg">Uuenda andmeid</button>
        <h2>Tulemuste tabel *HYPE*</h2>
	<div id="Table">
             
            <table border='1'>
            <tr>
                <th>Valimisnumber</th>
                <th>Nimi</th>		
                <th>Erakond</th>
                <th>Ringkond</th>
                <th>Haali</th>
            </tr>    
            <?php
                foreach($results as $row){
                    echo "<tr>";
                    echo "<td>". $row->Valik . "</td>";
                    echo "<td>". $row->Name . "</td>";
                    echo "<td>". $row->Erakond . "</td>";
                    echo "<td>". $row->Ringkond . "</td>";
                    echo "<td>". $row->Haali . "</td>";
                    echo "</tr>";
                    
                }
            
            ?>
            </table>
                    
        </div>
	<h3>Viimati uuendati:</h3>
        <div id="Table4">
             <h2> </h2>
        </div>
            </div>
                    </div>
    </body>
    
</html>