<!DOCTYPE html>
<html>
      <head>        
		<meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../../media/mycss.css">
		<title>Patside E-valimised/kandidaadid</title>
		
    </head>
    <body>
    <script src="http://patsid.cs.ut.ee/media/demo3.js"></script>
 
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>
	<script src="http://patsid.cs.ut.ee/media/demo.js"></script>
        		<div id="lairiba">
                    <h1>Kandidaadid</h1>
                    <ul class id="menu">
                    
					<li><a href="http://patsid.cs.ut.ee/" class="button">Avaleht</a></li>
					<li><a href="http://patsid.cs.ut.ee/index.php/site/kandidaadid" class="button">Kandidaadid</a></li>
                    <li><a href="http://patsid.cs.ut.ee/index.php/site/tulemused" class="button">Tulemused</a></li>
                    <li><a href="http://patsid.cs.ut.ee/index.php/site/statistika" class="button">Statistika</a></li>
                    <div class="fb-login-button" data-max-rows="1" data-size="xlarge" data-show-faces="false" data-auto-logout-link="true"></div>
				
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